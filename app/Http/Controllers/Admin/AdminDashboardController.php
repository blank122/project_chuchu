<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function AdminDashboard(){
        return view ('admin.admin-dashboard');
    }

    public function announcement(){
        return view ('admin.announcement.a-index');
    }
    public function readingMats(){
        return view ('admin.reading_materials.reading-mats-index');
    }
    public function topnotch()
    {
        return view ('admin.slider.index');
    }
    public function studyante()
    {
        return view ('admin.student.index');
    }

}
