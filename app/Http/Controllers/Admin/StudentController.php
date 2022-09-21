<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentEnrollRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{   

    public function index(){
        return view('admin.student.index');
    }

    public function create(){
        return view('admin.student.create');
    }

    public function store(StudentEnrollRequest $request){

        $dataValidation = $request->validated();

        $announcement = new StudentEnrollRequest(); //invoke object to store the announcement data

        $announcement->announcement_topic = $dataValidation['announcement_topic'];
        $announcement->announcement_content = $dataValidation['announcement_content'];
        if ($request->hasFile('image')) { //process the file in order to store it into the database
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension(); //get the user file extension
            $filename = time().'.'.$ext; //create new file name

            $file->move('uploads/announcementImages/', $filename); //store the file into uploads folder
            $announcement->image = $filename;
        }
        $announcement->save();
        
        return redirect('admin/announcement')->with('message', 'Announcement Added Successfully');

    }

}
