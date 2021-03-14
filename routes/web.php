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

Auth::routes();

Route::resource('/', 'WelcomeController');
Route::resource('/welcome', 'WelcomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/crypto_celeb', 'ProController');
Route::resource('/download', 'DownloadController');
Route::resource('/newsroom', 'NewsController');
Route::resource('/engineering-course', 'EngineeringCourseController');//left
Route::resource('/contact_us', 'ContactController');
Route::resource('/gallery', 'GalleryController');
Route::resource('/music-production-course', 'ProductionCourseController');
Route::resource('/academy_courses', 'AcademyCourseController');
Route::resource('/jobs', 'VacancyController');
Route::resource('/faq', 'FaqController');
Route::resource('/faculty', 'TeamController');
Route::resource('/register', 'RegisterController');
Route::resource('/about_us', 'AboutUsController');
Route::resource('/student_work', 'StudentWorkController');
Route::resource('/exam_schedule', 'ExamStructureController');

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
    Route::resource('engineeringCourseModule','EngineeringCourseModuleController');
    Route::resource('engineeringCourseOverview','EngineeringCourseOverviewController');
    Route::resource('engineeringCourseLogicAbleton','EngineeringCourseLogicAlbetonController');
    Route::resource('contact','ContactController');
    Route::resource('productionCourse','ProductionCourseController');
    Route::resource('productionCourseQuick','ProductionCourseQuicksController');
    Route::resource('productionCourseLogic','ProductionCourseLogicController');
    Route::resource('productionCoursePro','ProductionCourseProController');
    Route::resource('gallery','GalleryController');
    Route::resource('studioEquipmentHardwareImage','StudioEquipmentHardwareImageController');
    Route::resource('studioEquipmentSoftwareImage','StudioEquipmentSoftwareImageController');
    Route::resource('studioEquipmentHardware','StudioEquipmentHardwareController');
    Route::resource('studioEquipmentSoftware','StudioEquipmentSoftwareController');
    Route::resource('academyCourse','AcademyCourseController');
    Route::resource('vacancy','VacancyController');
    Route::resource('faq','FaqController');
    Route::resource('faqCareer','FaqCareerController');
    Route::resource('faqCourse','FaqCourseController');
    Route::resource('faqGeneral','FaqGeneralController');
    Route::resource('faqHostel','FaqHostelController');
    Route::resource('team','TeamController');
    Route::resource('teamProduction','TeamProductionController');
    Route::resource('banner','BannerController');
    Route::resource('homeContent','HomeContentController');
    Route::resource('aboutUs','AboutUsController');
    Route::resource('aboutUsLibrary','AboutUsLibraryController');
    Route::resource('aboutUsLibraryImage','AboutUsLibraryImageController');
    Route::resource('aboutUsTechnology','AboutUsTechnologyController');
    Route::resource('aboutUsTechnologyImage','AboutUsTechnologyImageController');
    Route::resource('aboutUsPromotion','AboutUsPromotionController');
    Route::resource('aboutUsPromotionImage','AboutUsPromotionImageController');
    Route::resource('homeNotification','HomeNotificationController');
    Route::post('/studentsWork/{id}/enable','StudentWorkController@enable')->name('studentsWork.enable');
    Route::post('/studentsWork/{id}/disable','StudentWorkController@disable')->name('studentsWork.disable');
    Route::resource('studentsWork','StudentWorkController');
    Route::resource('exam','ExamController');
    Route::resource('modules','ModuleController');
    Route::resource('videos','VideoController');
});

Route::group(['as'=>'manager.','prefix'=>'manager','namespace'=>'Manager','middleware'=>['auth','manager']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'faculty.','prefix'=>'faculty','namespace'=>'Faculty','middleware'=>['auth','faculty']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'student.','prefix'=>'student','namespace'=>'Student','middleware'=>['auth','student']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('profile','ProfileController');
    Route::resource('modules','ModuleController');
});