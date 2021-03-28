<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()    //show from database
    {   $title = "Students List";
        $students = Student::all();
        return view('backend.layout.users.students',compact('students','title'));
    }


    public function studentcreate(Request $request)  //send to database
    {
       Student::create([

        'fullname'=> $request -> student_name,   // 'fullname = database column name , student_name = form name
        'studentID' => $request -> student_id,
        'DOB' => $request -> dob,
        'email' => $request -> email,
        'phoneno' => $request -> cell_no,
        'password' => $request -> password,
        'image' => $request -> image



       ]);

       return redirect()->back();
    }
}
