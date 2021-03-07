<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\GradepointController;

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

Route::get('/', function () {

    return view('admin/auth/login');
    
});

Auth::routes();

//  Auth Route
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/registrationview', [StudentController::class,'index'])->name('student-registration');
Route::post('/registration',[StudentController::class,'store']);

// Subject Route
Route::get('/subject',[TopicController::class,'show'])->name('subject');
Route::post('add',[SubjectController::class,'store'])->name('subjectselect');
Route::get('subject_show',[SubjectController::class,'show'])->name('selected_subject');
Route::get('MarkingandGrading',[GradepointController::class,'index'])->name('grading');
Route::post('/subjectname', [GradepointController::class,'subject_check'])->name('subjectname');
Route::post('/markadd', [GradepointController::class,'store'])->name('markadd');
Route::post('/studentresult',[GradepointController::class,'show'])->name('studentresult');
Route::get('/studentclass',[GradepointController::class,'indexOne'])->name('selectstudentclass');




Route::get('Profile',[StudentController::class,'studentProfile'])->name('profile');
Route::get('Edit',[StudentController::class,'Profileedit'])->name('profileedit');
Route::post('/update/{id}',[StudentController::class,'update']);
Route::get('/studentList',[StudentController::class,'show'])->name('allstudent');
Route::get('active/{{id}}',[StudentController::class,'status']);
Route::post('/email_available/check', [StudentController::class,'check'])->name('email_available.check');
Route::post('/phone_available/phnchk', [StudentController::class,'phnchk'])->name('phone_available.phnchk');
