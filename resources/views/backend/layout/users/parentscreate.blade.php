@extends('backend.home')

@section('page')


<div class="">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Parents register form</h5>
        </div>
        <div class="modal-body">
          
      <form action="{{ route('parents.create') }}" method="post" enctype="multipart/form-data" >

    @csrf
  
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
           </div>
          <input required type="text" name="parent_name" class="form-control" placeholder="Full name" type="text">
      </div> 



      {{-- <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
           </div>
          <input required type="text" name="designation" class="form-control" placeholder="Designation" type="text">
      </div> --}}
  
      <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-heartbeat"></i> </span>
         </div>
        <input required type="text" name="blood_group" class="form-control" placeholder="Blood group" type="text">
    </div>


      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
           </div>
          <input required type="date" name="dob" class="form-control" placeholder="" type="date">
      </div>
  
       <div class="form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-mars-double"></i> </span>

            <select name="gender" class="form-select" aria-label="Default select example">
                <option selected>Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
         </div>                
     </div>

      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
           </div>
          <input required type="text" name="email" class="form-control" placeholder="Email address" type="email">
      </div> 
      
      

      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
          </div>
          <div>
          <select class="custom-select" style="max-width: 120px;">
              <option selected="">+88</option>
          </select>
          </div> 
      <input name="cell_no" class="form-control" placeholder="Phone number" type="text">
      </div>

      
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input name="password" class="form-control" placeholder="Create password" type="password">
      </div> 
          <div class="form-group input-group">
              
          </div>  
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
  
  
  




    
@endsection