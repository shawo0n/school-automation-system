<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\StudentController;
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
    return view('backend.home');
});

Route::get('/profile', function () {
    return view('backend.layout.profile');
});

Route::get('/students', [StudentController::class,'students'])->name('academy.students');
Route::post('/student/create', [StudentController::class, 'studentcreate'])->name('student.create');
