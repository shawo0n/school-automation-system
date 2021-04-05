@extends('backend.home')


@section('page')


<a href="{{ route('parents.form') }}"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
    Create parent
  </button>
</a>

<div class="div" style="margin-top:30px; ">

    <table class="table table table-bordered table-dark" style="font-size:15px;border: 1px solid;
  
    box-shadow: 5px 5px #888888;">
      <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Full name</th>
          <th scope="col">BG</th>
          <th scope="col">Date of birth</th>
          <th scope="col">Gender</th>
          <th scope="col">Email</th>
          <th scope="col">Phone no</th>
          <th scope="col">image</th>
          <th scope="col">Action</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($parents as $data)  
      <tr>
          <th scope="row">{{$data->id}}</th>
          <td>{{$data->fullname}}</td>
          <td>{{$data->bloodgroup}}</td>
          <td>{{$data->DOB}}</td>
          <td>{{$data->gender}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phoneno}}</td>
          <td>{{$data->image}}</td>
          <td><a class="btn btn-success btn-sm" href="">View</a>
          <a class="btn btn-danger btn-sm" href="">Delete</a></td>
              
              
        
          
      </tr>
      @endforeach
  
      </tbody>
  </table>
      
  
  </div>
  








    
@endsection