<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function classList()
    {
        $title = "Class List";
        return view('backend.layout.users.class', compact('title'));
    }
}
