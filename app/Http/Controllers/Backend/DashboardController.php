<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function home()
        {
           $title = "School automation system";
           return view('backend.home',compact('title'));
        }
}
