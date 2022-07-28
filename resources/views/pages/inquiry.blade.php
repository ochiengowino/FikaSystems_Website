@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header contact-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Inquiry</h1>
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
            <h1 class="mb-0">Feel Free To Request for an Inquiry</h1>
        </div>
        
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-primary rounded d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form method="post" action="inquiry">
                        {{csrf_field()}}

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control @error('name') is-invalid @enderror bg-light border-0" name="name" placeholder="Your Name" style="height: 55px;">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control @error('email') is-invalid @enderror bg-light border-0" name="email" placeholder="Your Email" style="height: 55px;">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input type="phone" class="form-control  @error('phone') is-invalid @enderror bg-light border-0" name="phone" placeholder="Your Phone No." style="height: 55px;">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea class="form-control @error('message') is-invalid @enderror bg-light border-0" rows="3" name="message" placeholder="Message"></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Contact Us for Inquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s">
                {{-- <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/contact3.jpg" style="object-fit: cover;">
                </div> --}}
                <h3>Talk with a sales expert.</h3>
                <p>Complete this form to request information or schedule a demo. A member of our sales team will be in contact shortly. </p>

                <div class="position-relative bg-primary rounded d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">For immediate assistance, call to our office</h3>
                    <h2 class="text-white mb-0">+254 11 4518893</h2>
                </div>
            </div>
            {{-- <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <img src="img/contact3.jpg" style="height: 400px;" alt="">
                <img class="position-absolute h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/contact-us.jpg" style="object-fit: cover; min-height: 350px;">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div> --}}
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection