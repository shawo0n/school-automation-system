<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()
    {
        return view('backend.layout.academy.students');
    }
}
