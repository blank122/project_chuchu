<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }
    public function store (SliderFormRequest $request)
    {
        $validatedData = $request->validated();

        $store_slider = new Slider;
        $store_slider->name = $validatedData['name'];
        $store_slider->rank = $validatedData['rank'];


        if($request->hasFile('image')){
            $file = $request->file('image');
            $clientFileName = $file->getClientOriginalName();
            $filename = $clientFileName;
            $file->move('uploads/slider/',$filename);
            $store_slider->image = $filename;
        }
        $store_slider->save();
        // Slider::create([
        //     'title'=>$validatedData['title'],
        //     'description'=>$validatedData['description'],
        //     'image'=>$validatedData['image'],
        //     'status'=>$validatedData['status'],

        // ]);
        return redirect ('admin/dashboard/slider')->with('message', 'Topnotcher Added Successfully');
    }

    public function edit(Slider $slider_id){
        return view('admin.slider.edit', compact('slider_id'));
    }

    public function update(SliderFormRequest $request, $slider_id){
        $validatedData = $request->validated();

        $store_slider = Slider :: findOrFail($slider_id);
        $store_slider->name = $validatedData['name'];
        $store_slider->rank = $validatedData['rank'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'uploads/slider/'.$store_slider->reading_material;
            if(File::exists($path)){
                File::delete($path);
            }
            $clientFileName = $file->getClientOriginalName();
            $filename = $clientFileName;
            $file->move('uploads/slider/',$filename);
            $store_slider->image = $filename;
        }
        $store_slider->update();
        return view('admin.slider.index')->with('message', 'Topnotchers Slider Added Successfully');
    }
}
