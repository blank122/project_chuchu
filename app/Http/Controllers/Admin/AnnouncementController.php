<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddAnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function AnnouncementIndex(){
        return view('admin.announcement.a-index');
    }

    public function create(){
        return view('admin.announcement.create');
    }

    public function store(AddAnnouncementRequest $request){

        $dataValidation = $request->validated();

        $announcement = new Announcement; //invoke object to store the announcement data

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

    public function edit(Announcement $announcement){
        return view('admin.announcement.edit', compact('announcement'));
    }

    public function update(AddAnnouncementRequest $request, $announcement)
    {
        $dataValidation = $request->validated();

        $announcement = Announcement::findOrFail($announcement);

        $announcement->announcement_topic = $dataValidation['announcement_topic'];
        $announcement->announcement_content = $dataValidation['announcement_content'];
        if ($request->hasFile('image')) { //process the file in order to store it into the database
            $path = 'uploads/announcementImage/'.$announcement->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension(); //get the user file extension
            $filename = time().'.'.$ext; //create new file name

            $file->move('uploads/announcementImages/', $filename); //store the file into uploads folder
            $announcement->image = $filename;
        }
        $announcement->update();
        
        return redirect('admin/announcement')->with('message', 'Announcement Updated Successfully');
        
    }

}
