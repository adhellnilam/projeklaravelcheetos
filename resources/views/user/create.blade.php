@extends('layouts/web')

@section('title','Add Data User')

@section('content')
<div class="adminx-content">
   <div class="adminx-main-content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="card mb-grid" style="width: 1170px; margin-left: 30px; margin-top: 20px;">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Add Data User</div>
                  </div>
                  <div class="card-body collapse show" id="card1">
                    <form action="/dashboard/useradmin/add_data" method="POST">
                     @csrf
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone Number">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
            </div>
         </div>
     </div>
   </div>
</div>
@endsection