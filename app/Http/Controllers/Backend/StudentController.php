<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()
    {
        $students = Student::all();
        return view('backend.layout.academy.students',compact('students'));
    }


    public function studentcreate(Request $request)
    {
       Student::create([

        'fullname'=> $request -> student_name,
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
