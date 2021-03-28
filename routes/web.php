<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\backend\TeacherController;
use App\Http\Controllers\backend\DashboardController;
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
Route::get('/students', [StudentController::class,'students'])->name('users.students');
Route::post('/student/create', [StudentController::class, 'studentcreate'])->name('student.create');
Route::get('/teacher', [TeacherController::class, 'teacherslist'])->name('users.teachers');
Route::get('/teacher/form',[TeacherController::class,'teachersform'])->name('teacher.form');
Route::post('/teacher/create',[TeacherController::class,'teacherscreate'])->name('teacher.create');