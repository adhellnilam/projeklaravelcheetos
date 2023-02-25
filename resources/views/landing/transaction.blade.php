@extends('layouts/app')

@section('title','Transaction')

@section('konten')
<div class="container-xxl py-6">
   <div class="container">
       <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
           <p class="text-primary text-uppercase mb-2">// Transaction</p>
       </div>
       <div class="row g-0 justify-content-center">
           <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
               <form action="/transaction" method="POST">
                   @csrf
                   <div class="row g-3">
                     <div class="col-12">
                        <div class="form-floating">
                           <input type="text" class="form-control" name="name" id="subject" placeholder="Enter Name">
                            <label for="message">Name</label>
                        </div>
                     </div>
                       <div class="col-md-6">
                           <div class="form-floating">
                              <select class="form-control" name="product_id">
                                 @foreach ($product as $item)
                                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                                 @endforeach
                              </select>
                               <label for="name">Product</label>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-floating">
                              <input type="text" class="form-control" name="quantity" id="subject" placeholder="Enter Quantity">
                              <label for="message">Quantity</label>
                           </div>
                       </div>
                       <div class="col-12">
                        <div class="form-floating">
                           <input type="text" class="form-control" name="address" id="subject" placeholder="Enter Address">
                           <label for="subject">Address</label>
                        </div>
                    </div>
                       <div class="col-12">
                        <div class="form-floating">
                           <select class="form-control" name="payment_id">
                              @foreach ($payment as $item)
                                   <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                          </select>
                           <label for="message">Payment</label>
                        </div>
                    </div>
                       <div class="col-12 text-center">
                           <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
@endsection