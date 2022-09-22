<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddReadingMaterialsRequest;
use App\Models\ReadingMaterials;
use Faker\Provider\el_CY\Address;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ReadingMaterialsController extends Controller
{
    public function ReadingMatsIndex(){
        return view('admin.reading_materials.reading-mats-index');
    }

    public function create(){
        return view('admin.reading_materials.create');
    }

    public function store(AddReadingMaterialsRequest $request){

        $dataValidation = $request->validated();

        $upload = new ReadingMaterials; //invoke object to store the announcement data
        $upload->material_filename = $dataValidation['material_filename'];


        if ($request->hasFile('reading_material')) { //process the file in order to store it into the database
            $file = $request->file('reading_material');
            $ext = $file->getClientOriginalExtension(); //get the user file extension
            $filename = time().'.'.$ext; //create new file name

            $file->move('uploads/files/', $filename); //store the file into uploads folder
            $upload->reading_material = $filename;
        }
        $upload->save();
        
        return redirect('admin/reading_materials')->with('message', 'Reading Material is added successfully');

    }

    public function edit(ReadingMaterials $reading_file){
        return view('admin.reading_materials.edit', compact('reading_file'));
    }

    public function update(AddReadingMaterialsRequest $request, $reading_file){
        $dataValidation = $request->validated();

        $reading_file = ReadingMaterials :: findOrFail($reading_file);
        $reading_file->material_filename = $dataValidation['material_filename'];
        if ($request->hasFile('reading_material')) { //process the file in order to store it into the database
            $path = 'uploads/files/'.$reading_file->reading_material;
            if(File::exists($path)){
                File::delete($path);
            }
             $file = $request->file('reading_material');
            $ext = $file->getClientOriginalName(); //get the user file extension
             //create new file name

            $file->move('uploads/files/', $ext); //store the file into uploads folder
            $reading_file->reading_material = $ext;
        }
        $reading_file->update();
        
        return redirect('admin/reading-materials')->with('message', 'Updated successfully');
    }

    public function viewPdf($id)
    {
        $data = ReadingMaterials::find($id);
        return view('view', compact('data'));
    }

}
