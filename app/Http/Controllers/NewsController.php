<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Menu;
use App\HomeNotification;
use App\DesktopMenuSection;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        $homeNotification = HomeNotification::all();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $desktopMenu = DesktopMenuSection::orderBy('sort_by', "asc")->get();
        return view('frontend.newsroom', compact('news','homeNotification','menus','desktopMenu'));
    }
}
