<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sparent;
use Illuminate\Http\Request;


class ParentController extends Controller
{
   public function parentsList()
   {   
       $title = "Parents List";
       $parents = Sparent::all();
       return view('backend.layout.users.parents',compact('title','parents'));
   }

   public function parentsForm()
   {
       $title = "Parents form";
       return view('backend.layout.users.parentscreate',compact('title'));
   }


   public function parentsCreate(Request $request)

   {
    Sparent::create ([
        'fullname'=> $request ->parent_name,
          'bloodgroup'=>$request->blood_group,
           'DOB'=>$request->dob,
            'gender'=>$request->gender,
             'email'=>$request->email,
              'phoneno'=>$request->cell_no,
               'password'=>$request->password,
                'image'=>$request->image
 

      ]);
      return redirect()->route('parents.list');
   }
}
