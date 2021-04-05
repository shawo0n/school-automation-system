<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\backend\TeacherController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ParentController;
use App\Http\Controllers\Backend\ClassController;
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


Route::get('/', [DashboardController::class, 'home'])->name('home');
//students
Route::get('/students', [StudentController::class,'students'])->name('users.students');
Route::post('/student/create', [StudentController::class, 'studentcreate'])->name('student.create');

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