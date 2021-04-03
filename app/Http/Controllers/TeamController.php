<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\TeamProduction;
use App\HomeNotification;
use App\Menu;
use App\DesktopMenuSection;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        $teamProduction = TeamProduction::all();
        $homeNotification = HomeNotification::all();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $desktopMenu = DesktopMenuSection::orderBy('sort_by', "asc")->get();
        return view('frontend.faculty', compact('team','teamProduction','homeNotification','menus','desktopMenu'));
    }
}
