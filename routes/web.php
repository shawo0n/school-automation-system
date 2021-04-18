<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\backend\TeacherController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ParentController;
use App\Http\Controllers\Backend\ClassController;
use App\Http\Controllers\Backend\LoginController;
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
//     return view('backend.home');
// });

// Route::get('/profile', function () {
//     return view('backend.layout.profile');
// });


Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/dologin',[LoginController::class,'dologin'])->name('dologin');


Route::prefix('admin')->group(function () {
    
    Route::get('/home', [DashboardController::class, 'home'])->name('home');
    //students
    Route::get('/students', [StudentController::class,'students'])->name('users.students');
    Route::post('/student/create', [StudentController::class, 'studentcreate'])->name('student.create');
    Route::get('/student/delete/{id}',[StudentController::class, 'studentDelete'])->name('delete.student');
    
    //teachers
    Route::get('/teacher', [TeacherController::class, 'teacherslist'])->name('users.teachers');
    Route::get('/teacher/form',[TeacherController::class,'teachersform'])->name('teacher.form');
    Route::post('/teacher/create',[TeacherController::class,'teacherscreate'])->name('teacher.create');
    
    //parents
    Route::get('/parent/list',[ParentController::class,'parentsList'])->name('parents.list');
    Route::get('/parent/form',[ParentController::class,'parentsForm'])->name('parents.form');
    Route::post('/parent/create',[ParentController::class,'parentsCreate'])->name('parents.create');
    
    
    //class
    
    Route::get('/class',[ClassController::class,'classList'])->name('class.list');




});


