<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EngineeringCourse;
use App\EngineeringCourseSound;
use App\EngineeringCourseSoftware;
use App\EngineeringCourseHardware;

class EngineeringCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineeringCourse = EngineeringCourse::all();
        $engineeringCourseSound = EngineeringCourseSound::all();
        $engineeringCourseSoftware = EngineeringCourseSoftware::all();
        $engineeringCourseHardware = EngineeringCourseHardware::all();
        return view('frontend.engineering-course', compact('engineeringCourse','engineeringCourseSound','engineeringCourseSoftware','engineeringCourseHardware'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
