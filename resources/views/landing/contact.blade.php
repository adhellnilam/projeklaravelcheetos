@extends('layouts/app')

@section('title','Contact')

@section('konten')
<div class="container-xxl py-6">
   <div class="container">
       <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
           <p class="text-primary text-uppercase mb-2">// Contact Us</p>
           <h1 class="display-6 mb-4">If You Have Any Query, Please Contact Us</h1>
       </div>
       <div class="row g-0 justify-content-center">
           <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
               <form action="/dashboard/contact/add_data" method="POST">
                   @csrf
                   <div class="row g-3">
                       <div class="col-md-6">
                           <div class="form-floating">
                               <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                               <label for="name">Your Name</label>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-floating">
                               <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                               <label for="email">Your Email</label>
                           </div>
                       </div>
                       <div class="col-12">
                           <div class="form-floating">
                               <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                               <label for="subject">Subject</label>
                           </div>
                       </div>
                       <div class="col-12">
                           <div class="form-floating">
                               <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                               <label for="message">Message</label>
                           </div>
                       </div>
                       <div class="col-12 text-center">
                           <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                       </div>
                   </div>
               </form>
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