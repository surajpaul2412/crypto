<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EngineeringCourse;
use App\EngineeringCourseSound;
use App\EngineeringCourseSoftware;
use App\EngineeringCourseHardware;
use App\engineeringCourseModule;
use App\EngineeringCourseOverview;
use App\EngineeringCourseLogicAbleton;
use App\HomeNotification;

class EngineeringCourseController extends Controller
{
    public function index()
    {
        $engineeringCourse = EngineeringCourse::all();
        $engineeringCourseSound = EngineeringCourseSound::all();
        $engineeringCourseSoftware = EngineeringCourseSoftware::all();
        $engineeringCourseHardware = EngineeringCourseHardware::all();
        $engineeringCourseModule = engineeringCourseModule::all();
        $engineeringCourseOverview = EngineeringCourseOverview::all();
        $engineeringCourseLogicAbleton = EngineeringCourseLogicAbleton::all();
        $homeNotification = HomeNotification::all();
        return view('frontend.engineering-course', compact('engineeringCourse','engineeringCourseSound','engineeringCourseSoftware','engineeringCourseHardware','engineeringCourseModule','engineeringCourseOverview','engineeringCourseLogicAbleton','homeNotification'));
    }
}
