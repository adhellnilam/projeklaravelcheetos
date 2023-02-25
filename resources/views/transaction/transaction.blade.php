@extends('layouts/web')

@section('title','Transaction')

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
           <li class="breadcrumb-item active"  aria-current="page">Transaction Tables</li>
         </ol>
       </nav>

       <div class="pb-3">
         <h1>Transaction Tables</h1>
       </div>
       @if ($message = Session::get('success'))
            <div class="alert alert-info alert-dismissible show fade">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="export">
          <a href="/dashboard/transaction/add_data" class="btn btn-primary">+ Add</a>
          <a href="/transaction/export_excel" class="btn btn-success">Export</a>
        </div><br>
        <div class="row">
          <div class="col">
            <div class="card mb-grid">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Product</th>
                      <th scope="col">Address</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Payment</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($transaction as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->payment->name }}</td>
                        <td style="display: flex; column-gap: 7px;">
                            <a href="/dashboard/transaction/update_data/{{ $item->id }}" class="btn icon btn-primary"><span class="oi oi-pencil"></span></a>

                            <form action="/dashboard/transaction/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn icon btn-danger"><span class="oi oi-trash"></span></button>
                            </form>

                            <a href="/dashboard/transaction/detail/{{ $item->id }}" class="btn icon btn-info"><span class="oi oi-zoom-in"></span></a>
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