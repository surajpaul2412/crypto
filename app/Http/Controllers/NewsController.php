<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Newstag;
use App\Menu;
use App\HomeNotification;
use App\DesktopMenuSection;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        $newsTags = NewsTag::select('tag')
            ->groupBy('tag')
            ->get();
        $homeNotification = HomeNotification::all();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $desktopMenu = DesktopMenuSection::orderBy('sort_by', "asc")->get();
        return view('frontend.newsroom', compact('news','homeNotification','menus','desktopMenu','newsTags'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        if(empty($news)){
            return redirect('404');
        }
        $homeNotification = HomeNotification::all();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $desktopMenu = DesktopMenuSection::orderBy('sort_by', "asc")->get();
        return view('frontend.inner_newsroom', compact('news','homeNotification','menus','desktopMenu'));
    }
}
