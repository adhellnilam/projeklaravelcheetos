@extends('layouts/app')

@section('title','About')

@section('konten')
<div class="container-xxl py-6">
   <div class="container">
       <div class="row g-5">
           <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="row img-twice position-relative h-100">
                   <div class="col-6">
                       <img class="img-fluid rounded" src="https://img.freepik.com/premium-photo/corn-sticks-bacon-flavor-cheetos-fast-food-meal-snack-table-copy-space-food_88242-16617.jpg?w=360" alt="">
                   </div>
                   <div class="col-6 align-self-end">
                       <img class="img-fluid rounded" src="https://img.freepik.com/premium-photo/pizza-with-cheetos-chips-sauce-gray-background_212840-719.jpg?w=360" alt="">
                   </div>
               </div>
           </div>
           <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
               <div class="h-100">
                   <p class="text-primary text-uppercase mb-2">// About Us</p>
                   <h1 class="display-6 mb-4">We Make Every Item From The Core Of Our Hearts</h1>
                   <p>CHEETOS® snacks are the much-loved cheesy treats that are fun for everyone! You just can’t eat a CHEETOS® snack without licking the signature “cheetle” off your fingertips. And wherever the CHEETOS® brand and CHESTER CHEETAH® go, cheesy smiles are sure to follow.</p>
                   <div class="row g-2 mb-4">
                       <div class="col-sm-6">
                           <i class="fa fa-check text-primary me-2"></i>Quality Products
                       </div>
                       <div class="col-sm-6">
                           <i class="fa fa-check text-primary me-2"></i>Custom Products
                       </div>
                       <div class="col-sm-6">
                           <i class="fa fa-check text-primary me-2"></i>Online Order
                       </div>
                       <div class="col-sm-6">
                           <i class="fa fa-check text-primary me-2"></i>Home Delivery
                       </div>
                   </div>
                   <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
               </div>
           </div>
       </div>
   </div>
</div>

<div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Office Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Depok, West Java, INDONESIA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="/about">About Us</a>
                <a class="btn btn-link" href="/contact">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Copy Right</h4>
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    2023&copy; <a href="#">Cheetos</a>, All Right Reserved.
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Photo Gallery</h4>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="https://www.cheetos.com/sites/cheetos.com/files/2021-12/CHEETOS%20GINGERBREAD%20COOKIES-032_3x2%281%29.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="https://www.cheetos.com/sites/cheetos.com/files/2019-02/Elotes%20%281%29.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="https://www.cheetos.com/sites/cheetos.com/files/2021-12/CHEETOS%20BACON%20RANCH%20CHEESE%20BALL-020_3x2%281%29.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="https://www.cheetos.com/sites/cheetos.com/files/2021-10/Cheetos_2021_Color_Corrected_Still_1-edit2_0.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="https://www.cheetos.com/sites/cheetos.com/files/2021-11/Picture1%20copia.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="https://www.cheetos.com/sites/cheetos.com/files/2021-07/Cheetos_Thanksgiving_Beauty_Still02.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection