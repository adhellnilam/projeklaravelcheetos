@extends('layouts/web')

@section('title','Cheetos | Dashboard | Contact')

@section('content')
<!-- Main Content -->
<div class="adminx-content">
   <div class="adminx-main-content">
     <div class="container-fluid">
       <!-- BreadCrumb -->
       <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb adminx-page-breadcrumb">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item"><a href="#">Tables</a></li>
           <li class="breadcrumb-item active"  aria-current="page">Contact Tables</li>
         </ol>
       </nav>

       <div class="pb-3">
         <h1>Contact Tables</h1>
       </div>
       @if ($message = Session::get('success'))
            <div class="alert alert-info alert-dismissible show fade">
                <p>{{ $message }}</p>
            </div>
        @endif
        <a href="/contact/export_excel" class="btn btn-success">Export</a><br><br>
        <div class="row">
          <div class="col">
            <div class="card mb-grid">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                     <th scope="col">Id</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Subject</th>
                     <th scope="col">Message</th>
                     <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contact as $item)
                    <tr>
                     <td>{{ $item->id }}</td>
                     <td>{{ $item->name }}</td>
                     <td>{{ $item->email }}</td>
                     <td>{{ $item->subject }}</td>
                     <td>{{ $item->message }}</td>
                     <td style="display: flex; column-gap: 7px;">
                         <form action="/dashboard/contact/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                             @csrf
                             @method('DELETE')
                         <button type="submit" class="btn icon btn-danger"><span class="oi oi-trash"></span></button>
                         </form>

                         <a href="/dashboard/contact/detail/{{ $item->id }}" class="btn icon btn-info"><span class="oi oi-zoom-in"></span></a>
                     </td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
     </div>
   </div>
 </div>
 <!-- // Main Content -->
@endsection