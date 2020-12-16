<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::resource('/', 'WelcomeController');
Route::resource('/welcome', 'WelcomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/crypto_celeb', 'ProController');
Route::resource('/download', 'DownloadController');
Route::resource('/newsroom', 'NewsController');
Route::resource('/engineering-course', 'EngineeringCourseController');
Route::resource('/contact_us', 'ContactController');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('manager','ManagerController');
    Route::resource('faculty','FacultyController');
    Route::resource('student','StudentController');
    Route::resource('download','DownloadController');
    Route::resource('newsroom','NewsroomController');
    Route::resource('menu','MenuController');
    Route::resource('submenu','SubmenuController');
    Route::resource('pros','ProController');
    Route::resource('engineeringCourse','EngineeringCourseController');
    Route::resource('engineeringCourseSound','EngineeringCourseSoundController');
    Route::resource('engineeringCourseSoftware','EngineeringCourseSoftwareController');
    Route::resource('engineeringCourseHardware','EngineeringCourseHardwareController');
    Route::resource('contact','ContactController');
});

Route::group(['as'=>'manager.','prefix'=>'manager','namespace'=>'Manager','middleware'=>['auth','manager']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'faculty.','prefix'=>'faculty','namespace'=>'Faculty','middleware'=>['auth','faculty']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'student.','prefix'=>'student','namespace'=>'Student','middleware'=>['auth','student']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});


// try
Route::get('/student_work', function () {
    return view('frontend.15');
});
// 14
Route::get('/gallery', function () {
    return view('frontend.14');
});
// 13
Route::get('/faculty', function () {
    return view('frontend.faculty');
});
// 12
Route::get('/about_us', function () {
    return view('frontend.12');
});
// 11
Route::get('/register', function () {
    return view('frontend.11');
});
Route::get('/exam_schedule', function () {
    return view('frontend.exam');
});
Route::get('/academy_courses', function () {
    return view('frontend.course');
});
Route::get('/faq', function () {
    return view('frontend.7');
});
// 4
Route::get('/music-production-course', function () {
    return view('frontend.logic');
});