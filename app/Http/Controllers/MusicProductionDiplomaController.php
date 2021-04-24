<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MusicProductionDiploma;
use App\MusicProductionDiplomaLogic;
use App\ProductionCoursePro;
use App\MusicProductionDiplomaQuick;
use App\HomeNotification;
use App\Menu;
use App\DesktopMenuSection;

class MusicProductionDiplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicProductionDiploma = MusicProductionDiploma::all();
        $quick = MusicProductionDiplomaQuick::all();
        $logic = MusicProductionDiplomaLogic::all();
        $homeNotification = HomeNotification::all();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $desktopMenu = DesktopMenuSection::orderBy('sort_by', "asc")->get();
        return view('frontend.music-production-diploma-course', compact('musicProductionDiploma','quick','logic','pro','homeNotification','menus','desktopMenu'));
    }
}
