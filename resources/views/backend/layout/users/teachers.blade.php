@extends('backend.home')

@section('page')
   

<a href="{{ route('teacher.form') }}"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
    Create teacher
  </button>
</a>

<div class="div" style="margin-top:30px; ">

    <table class="table table table-bordered" style="font-size: 12px;">
      <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Full name</th>
          <th scope="col">Designation</th>
          <th scope="col">BG</th>
          <th scope="col">Date of birth</th>
          <th scope="col">Gender</th>
          <th scope="col">Email</th>
          <th scope="col">Phone no</th>
          <th scope="col">image</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($teachers as $data)  
      <tr>
          <th scope="row">{{$data->id}}</th>
          <td>{{$data->fullname}}</td>
          <td>{{$data->designation}}</td>
          <td>{{$data->bloodgroup}}</td>
          <td>{{$data->DOB}}</td>
          <td>{{$data->gender}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phoneno}}</td>
          <td>{{$data->image}}</td>

              {{-- <a class="btn btn-success" href="">View</a>
              <a class="btn btn-danger" href="">Delete</a> --}}
        
          
      </tr>
      @endforeach
  
      </tbody>
  </table>
      
  
  </div>
  











@endsection