<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherslist()
    {   
        $title = "Teachers List";
        $teachers=Teacher::all();
        return view('backend.layout.users.teachers',compact('title','teachers'));
    }

    public function teachersform()
    {   

        $title = "Create Teacher";
        return view('backend.layout.users.teacherscreate',compact('title'));
    }

    public function teacherscreate(Request $request)
    {
       Teacher::create ([
         'fullname'=> $request ->teacher_name,
          'designation'=>$request->designation,
           'bloodgroup'=>$request->blood_group,
            'DOB'=>$request->dob,
             'gender'=>$request->gender,
              'email'=>$request->email,
               'phoneno'=>$request->cell_no,
                'password'=>$request->password,
                 'image'=>$request->image
  

       ]);

       return redirect()->route('users.teachers');
    }
}