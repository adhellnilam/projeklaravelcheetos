@extends('layouts/web')

@section('title','Edit Data Transaction')

@section('content')
<div class="adminx-content">
   <div class="adminx-main-content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="card mb-grid" style="width: 1170px; margin-left: 30px; margin-top: 20px;">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Edit Data Transaction</div>
                  </div>
                  <div class="card-body collapse show" id="card1">
                    <form action="/dashboard/transaction/update_data/{{ $transaction->id }}" method="POST" enctype="multipart/form-data">
                      @method('put')
                     @csrf
                     <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" value="{{ $transaction->name }}" name="name" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Product</label>
                        <select class="form-control" name="product_id">
                           @foreach ($product as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                           @endforeach
                       </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control" value="{{ $transaction->address }}" name="address" placeholder="Enter Address">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Quantity</label>
                        <input type="text" class="form-control" value="{{ $transaction->quantity }}" name="quantity" placeholder="Enter Quantity">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Payment</label>
                        <select class="form-control" name="payment_id">
                           @foreach ($payment as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                           @endforeach
                       </select>
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