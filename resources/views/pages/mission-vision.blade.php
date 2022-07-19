@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Mission & Vision</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/mission-vision" class="h5 text-white">Mission & Vision</a>
        </div>
    </div>
</div>




<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-3">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h3 class="mb-0">Mission</h3>
                </div>
                <p class="mb-4">We are equipped with all the latest cutting-edge technologies. Each application is developed as per our rigorous project life cycle and management, thus ensuring on time delivery. To maximize the client’s return on investments, we consider the scalability issues and concerns well in advance, before we start the development of any product/application. We work with all the domains that require enhanced technology-driven automated business processes.</p>
                
       
                    <h3 class="mb-0">Vision</h3>
                    <div class="section-title position-relative pb-3 mb-3"> </div>
                    <p>Located at Libra House, Nairobi, Fika is equipped with all the modern facilities in-house. We have all the required latest hardware and software, advanced web conference tools that help us interact with clients all over the globe from our desktop. We have continuous, power backup and the required Infrastructure to run our organization 24*7, across all time zones.</p>
               
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->




@endsection