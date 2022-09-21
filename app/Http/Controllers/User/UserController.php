<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ReadingMaterials;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.userdashboard');
    }

    public function announcement()
    {
        return view('user.announcement');
    }
    public function readingMats()
    {
        return view('user.reading-materials');
    }

    public function viewPdf ($readingFile)
    {
        $readingFile = ReadingMaterials::find($readingFile);
        return view('user.viewdocuments', compact('readingFile'));
    }
}
