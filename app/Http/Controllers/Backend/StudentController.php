<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Sparent;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()    //show from database
    {   $title = "Students List";
        $students = Student::all();
        $students = Student::paginate(3);
        $guardian = Sparent::all();
        return view('backend.layout.users.students',compact('students','title','guardian'));
    }


    public function studentcreate(Request $request)  //send to database
    {


        $file_name='';
        //step 1 check if request has file
        if($request->hasFile('image'))
        {
            //file valid or not
            $file=$request->file('image');
            if($file->isValid())
            {
                //generate file name
                $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                //store into local directory
                $file->storeAs('students',$file_name);
            }
        }






       Student::create([

        'fullname'=> $request -> student_name,   // 'fullname = database column name , student_name = form name
        'studentID' => $request -> student_id,
        'DOB' => $request -> dob,
        'parent_name'=>$request->parent_name,
        'email' => $request -> email,
        'phoneno' => $request -> cell_no,
        'password' => $request -> password,
        'image' => $file_name



       ]);

       return redirect()->back();
    }


    
}
