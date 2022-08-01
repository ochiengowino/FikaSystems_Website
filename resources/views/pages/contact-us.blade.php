@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header contact-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="contact-us" class="h5 text-white">Contact</a>
        </div>
    </div>
</div>



<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
            <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">+254 11 4518893</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email to get free quote</h5>
                        <h4 class="text-primary mb-0">info@fikasystems.com</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Visit our office</h5>
                        <h4 class="text-primary mb-0">Tebere Crescent, Kileleshwa, Nairobi</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="post" class="contact-form" id="send-contact-form">
                    {{csrf_field()}}

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror border-0 bg-light px-4" name="name" id="name" placeholder="Name" style="height: 55px;">
                            <span class="text-danger" id="name-error"></span>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror border-0 bg-light px-4" name="email" id="email" placeholder="Email" style="height: 55px;">
                            <span class="text-danger" id="email-error"></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror border-0 bg-light px-4" name="phone" id="phone" placeholder="Phone Number" style="height: 55px;">
                            <span class="text-danger" id="mobile-number-error"></span>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror border-0 bg-light px-4" name="subject" id="subject" placeholder="Subject" style="height: 55px;">
                            <span class="text-danger" id="subject-error"></span>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <textarea class="form-control @error('message') is-invalid @enderror border-0 bg-light px-4 py-3" name="message" id="message" rows="4" placeholder="Message"></textarea>
                            <span class="text-danger" id="message-error"></span>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="loading">Sending...</div>
                            <div class="error-message text-center">Please fill out all the fields</div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="col-12">
                            <input type="submit" id="sendContactBtn" value="Send Message" class="btn btn-primary btn-lg btn-block w-100 py-3 myBtn">
                            {{-- <button class="btn btn-primary w-100 py-3" type="submit" id="sendContactBtn">Send Message</button> --}}
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/contact3.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection