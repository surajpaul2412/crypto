<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use App\User;
use App\StudentDetails;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.register');
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
        $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:users',
            'phone'=> 'required|min:7',
        ]);

        // Users Table
        $user = new User([
            'role_id' => 4,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => bcrypt('test1234'),
            'created_at' => carbon::now(),
        ]);
        $user->save();
        dd("Student successfully registered");

        // Student Details
        $TempId = User::where('phone', $request->get('phone'))->first();
        $studentTempId = $TempId->id;
        $studentDetails = new StudentDetails([
            'student_id' => $studentTempId,
            'course' => $request->get('course'),
            'batch' => $request->get('batch'),
            'image' => $request->get('image'),
            'address' => $request->get('address'),
            'nationality' => $request->get('nationality'),
            'pincode' => $request->get('pincode'),
            'fathers_name' => $request->get('fathers_name'),
            'fathers_phone' => $request->get('fathers_phone'),
            'guardian_name' => $request->get('guardian_name'),
            'guardian_phone' => $request->get('guardian_phone'),
            'guardian_occupation' => $request->get('guardian_occupation'),
            'gst' => $request->get('gst'),
            'trade_title' => $request->get('trade_title'),
            'trade_address' => $request->get('trade_address'),
            'gst_number' => $request->get('gst_number'),
            '10_school' => $request->get('10_school'),
            '10_year' => $request->get('10_year'),
            '10_board' => $request->get('10_board'),
            '12_school' => $request->get('12_school'),
            '12_year' => $request->get('12_year'),
            '12_board' => $request->get('12_board'),
            'ug_school' => $request->get('ug_school'),
            'ug_year' => $request->get('ug_year'),
            'ug_board' => $request->get('ug_board'),
            'g_school' => $request->get('g_school'),
            'g_year' => $request->get('g_year'),
            'g_board' => $request->get('g_board'),
            'pg_school' => $request->get('pg_school'),
            'pg_year' => $request->get('pg_year'),
            'pg_board' => $request->get('pg_board'),
            'stream' => $request->get('stream'),
            'music_bg_info' => $request->get('music_bg_info'),
            'plans' => $request->get('plans'),
            'health_problem' => $request->get('health_problem'),
            'parent_sign' => $request->get('parent_sign'),
            'student_sign' => $request->get('student_sign'),
            'status' => 0,
            'fees_status' => 0,
            'fees_mode_of_payment' => 0,
        ]);        
        $studentDetails->save();

        return redirect('/register')->with('success', 'Registration Successfull');
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
