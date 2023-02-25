@extends('layouts/web')

@section('title','Product')

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
           <li class="breadcrumb-item active"  aria-current="page">Product Tables</li>
         </ol>
       </nav>

       <div class="pb-3">
         <h1>Product Tables</h1>
       </div>
       @if ($message = Session::get('success'))
            <div class="alert alert-info alert-dismissible show fade">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="export">
          <a href="/dashboard/product/add_data" class="btn btn-primary">+ Add</a>
          <a href="/product/export_excel" class="btn btn-success">Export</a>
        </div><br>
        <div class="row">
          <div class="col">
            <div class="card mb-grid">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Image</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Category</th>
                      <th scope="col">Stock</th>
                      <th scope="col">Price</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($produk as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><img src="../blogs/{{ $item->img }}" alt="image" width="50px"/></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->kategori->name }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->price }}</td>
                        <td style="display: flex; column-gap: 7px;">
                            <a href="/dashboard/product/update_data/{{ $item->id }}" class="btn icon btn-primary"><span class="oi oi-pencil"></span></a>

                            <form action="/dashboard/product/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn icon btn-danger"><span class="oi oi-trash"></span></button>
                            </form>

                            <a href="/dashboard/product/detail/{{ $item->id }}" class="btn icon btn-info"><span class="oi oi-zoom-in"></span></a>
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