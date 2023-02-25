@extends('layouts/app')

@section('title','Home')

@section('konten')
 <div class="container-xxl py-6">
     <div class="container">
         <div class="row g-4">
             <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                 <div class="fact-item bg-light rounded text-center h-100 p-5">
                     <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                     <p class="mb-2">Years Experience</p>
                     <h1 class="display-5 mb-0" data-toggle="counter-up">75</h1>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                 <div class="fact-item bg-light rounded text-center h-100 p-5">
                     <i class="fa fa-users fa-4x text-primary mb-4"></i>
                     <p class="mb-2">Skilled Professionals</p>
                     <h1 class="display-5 mb-0" data-toggle="counter-up">175</h1>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                 <div class="fact-item bg-light rounded text-center h-100 p-5">
                     <i class="bi bi-heart-fill fa-4x text-primary mb-4"></i>
                     <p class="mb-2">Total Products</p>
                     <h1 class="display-5 mb-0" data-toggle="counter-up">135</h1>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                 <div class="fact-item bg-light rounded text-center h-100 p-5">
                     <i class="fa fa-cart-plus fa-4x text-primary mb-4"></i>
                     <p class="mb-2">Order Everyday</p>
                     <h1 class="display-5 mb-0" data-toggle="counter-up">9357</h1>
                 </div>
             </div>
         </div>
     </div>
 </div>

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

 <!-- Product Start -->
 <div class="container-xxl bg-light my-6 py-6 pt-0">
     <div class="container">
         <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
             <div class="row g-4 align-items-center">
                 <div class="col-lg-6">
                     <h1 class="display-4 text-light mb-0">The Best Snack In Your City</h1>
                 </div>
                 <div class="col-lg-6 text-lg-end">
                     <div class="d-inline-flex align-items-center text-start">
                         <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                         <div class="ms-4">
                             <p class="fs-5 fw-bold mb-0">Call Us</p>
                             <p class="fs-1 fw-bold mb-0">+012 345 6789</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="container-xxl py-6">
             <div class="container">
                 <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                     <p class="text-primary text-uppercase mb-2">// Our Best Seller</p>
                 </div>
                 <div class="row g-4">
                     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                         <div class="team-item text-center rounded overflow-hidden">
                             <img class="img-fluid" src="https://www.cheetos.com/sites/cheetos.com/files/2020-12/crunchy-category.png" alt="">
                             <div class="team-text">
                                 <div class="team-title">
                                     <h5>Crunchy</h5>
                                 </div>
                                 <div class="team-social">
                                     <a class="btn btn-square btn-light rounded-circle" href="/transaction"><i class="bi bi-cart-fill"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                         <div class="team-item text-center rounded overflow-hidden">
                             <img class="img-fluid" src="https://www.cheetos.com/sites/cheetos.com/files/2020-12/puff-category.png" alt="">
                             <div class="team-text">
                                 <div class="team-title">
                                     <h5>Puffs</h5>
                                 </div>
                                 <div class="team-social">
                                     <a class="btn btn-square btn-light rounded-circle" href="/transaction"><i class="bi bi-cart-fill"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                         <div class="team-item text-center rounded overflow-hidden">
                             <img class="img-fluid" src="https://www.cheetos.com/sites/cheetos.com/files/2020-12/flamin-hot-category.png" alt="">
                             <div class="team-text">
                                 <div class="team-title">
                                     <h5>Flamin Hot</h5>
                                 </div>
                                 <div class="team-social">
                                     <a class="btn btn-square btn-light rounded-circle" href="/transaction"><i class="bi bi-cart-fill"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                         <div class="team-item text-center rounded overflow-hidden">
                             <img class="img-fluid" src="https://www.cheetos.com/sites/cheetos.com/files/2020-12/simply-category.png" alt="">
                             <div class="team-text">
                                 <div class="team-title">
                                     <h5>Simply</h5>
                                 </div>
                                 <div class="team-social">
                                     <a class="btn btn-square btn-light rounded-circle" href="/transaction"><i class="bi bi-cart-fill"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="bg-primary text-light rounded-top p-5 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
             <div class="row align-items-center">
                 <div class="col-md-6">
                     <h1 class="display-4 text-light mb-0">Subscribe Our Newsletter</h1>
                 </div>
                 <div class="col-md-6 text-md-end">
                     <div class="position-relative">
                         <input class="form-control bg-transparent border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                         <button type="button" class="btn btn-dark py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>

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