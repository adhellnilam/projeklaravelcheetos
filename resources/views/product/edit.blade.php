@extends('layouts/web')

@section('title','Edit Data Product')

@section('content')
<div class="adminx-content">
   <div class="adminx-main-content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="card mb-grid" style="width: 1170px; margin-left: 30px; margin-top: 20px;">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Edit Data Product</div>
                  </div>
                  <div class="card-body collapse show" id="card1">
                    <form action="/dashboard/product/update_data/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                      @method('put')
                     @csrf
                     <div class="form-group">
                      <label class="form-label">Image</label>
                      <input type="file" class="form-control @error('image') is-invalid @enderror" name="img">
                      @error('image')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                      @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" value="{{ $product->name }}" name="name" aria-describedby="emailHelp" placeholder="Enter Product Name">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" value="{{ $product->description }}" name="description"  placeholder="Enter Description">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Category</label><br>
                        <select class="form-control" name="category_id">
                           @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                           @endforeach
                       </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Stock</label>
                        <input type="text" class="form-control" value="{{ $product->stock }}" name="stock" placeholder="Enter Stock">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Price</label>
                        <input type="text" class="form-control" value="{{ $product->price }}" name="price" placeholder="Enter Price">
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