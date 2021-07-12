<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeNotification;
use App\StudentsWork;
use App\Menu;
use App\DesktopMenuSection;

class StudentWorkController extends Controller
{
    public function index()
    {
        $homeNotification = HomeNotification::all();
        $studentsWork = StudentsWork::whereNotNull('status')->get();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $desktopMenu = DesktopMenuSection::orderBy('sort_by', "asc")->get();
        return view('frontend.studentsWork', compact('homeNotification','studentsWork','menus','desktopMenu'));
    }

    public function show($id)
    {
        $homeNotification = HomeNotification::all();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $desktopMenu = DesktopMenuSection::orderBy('sort_by', "asc")->get();
        $work = StudentsWork::findOrFail($id);
        return view('frontend.studentsWorkShow', compact('homeNotification','work','menus','desktopMenu'));
    }
}
