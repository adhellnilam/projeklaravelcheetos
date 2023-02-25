@extends('layouts/web')

@section('title','Cheetos | Dashboard | Details Contact')

@section('content')
<div class="adminx-content">
   <div class="adminx-main-content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-lg-8">
            <div class="card" style="width: 1200px;">
               <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="card-header-title">Details</div>

                  <nav class="card-header-actions">
                  <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                     <i data-feather="minus-circle"></i>
                  </a>
                  
                  <div class="dropdown">
                     <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="settings"></i>
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>

                  <a href="#" class="card-header-action">
                     <i data-feather="x-circle"></i>
                  </a>
                  </nav>
               </div>
               <div class="card-body collapse show" id="card1">
                  <p>Id : {{ $contact->id }}</p>
                  <p>name: {{ $contact->name }}</p>
                  <p>Email : {{ $contact->email }}</p>
                  <p>Subject : {{ $contact->subject  }}</p>
                  <p>Message : {{ $contact->message }}</p>
                  <a href="/dashboard/contact" class="btn btn-primary">Back</a>
               </div>
            </div>
            </div>
         </div>
     </div>
   </div>
</div>
@endsection