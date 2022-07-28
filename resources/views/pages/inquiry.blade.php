@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header contact-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Inquiry</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Inquiry</a>
        </div>
    </div>
</div>


<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Inquiry</h5>
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
                <h3>Talk with a sales expert.</h3>
                <p>Complete this form to request information or schedule a demo. A member from our sales team will be in contact shortly. </p>
                <div class="position-relative bg-primary rounded d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">For immediate assistance, place a call to our office</h3>
                    <h2 class="text-white mb-0">+254 11 4518893</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection