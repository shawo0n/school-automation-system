@extends('backend.home')

@section('page')




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Admit student
</button>



<div class="div" style="margin-top:30px; ">

  <table class="table table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Full name</th>
        <th scope="col">Student ID</th>
        <th scope="col">Date of birth</th>
        <th scope="col">parent</th>
        <th scope="col">email</th>
        <th scope="col">Phone no</th>
        <th scope="col">image</th>
        <th scope="col">Actioon</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($students as $data)  
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->fullname}}</td>
        <td>{{$data->studentID}}</td>
        <td>{{$data->DOB}}</td>
        <td>{{$data->parent_name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phoneno}}</td>
        <td><img style="width: 100px;" src="{{url('/images/students/'.$data->image)}}" alt="image"></td>
        
         <td>
            <a class="btn btn-success" href="">View</a>
            <a class="btn btn-danger" href="">Delete</a>
        </td>
        
    </tr>
    @endforeach

    </tbody>
</table>
    

</div>

      





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student registration form</h5>
      </div>


      <div class="modal-body">
        
	<form action="{{route('student.create')}}" method="post" enctype="multipart/form-data" >
  @csrf

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
		 </div>
        <input required type="text" name="student_name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input required type="number" name="student_id" class="form-control" placeholder="student ID" type="number">
    </div>

    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		 </div>
        <input name="dob" class="form-control" placeholder="" type="date">
    </div>

    <div class="form-group">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-mars-double"></i> </span>

          <select name="parent_name" class="form-select" aria-label="Default select example">
              <option selected>Select parent</option>
              @foreach ($guardian as $data)
              <option value="{{$data->fullname}}">{{$data->fullname}}</option>
              @endforeach
        
            </select>
       </div>                
   </div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>

        <input required type="text" name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+88</option>
		</select>
    	<input name="cell_no" class="form-control" placeholder="Phone number" type="text">
        
    </div> <!-- form-group// -->
    
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>

        <input name="password" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
        <div class="form-group input-group">
            
        </div> <!-- form-group// --> 
        <input name="image" type="file" class="form-control" id="customFile" /> 
        </div>
        
          <div class="modal-footer">

        
      
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
      </div>
                                                                                                
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->




      








@stop