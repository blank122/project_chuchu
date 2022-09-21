<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddReadingMaterialsRequest;
use App\Models\ReadingMaterials;
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
        
        return redirect('admin/reading-materials')->with('message', 'Reading Material is added successfully');

    }

    public function viewPdf($id)
    {
        $data = ReadingMaterials::find($id);
        return view('view', compact('data'));
    }

}
