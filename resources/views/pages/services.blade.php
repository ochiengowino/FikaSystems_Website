@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header services-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Our Services</h1>
            <a href="/" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
            <a href="/services" class="h5 text-white">Our Services</a>
        </div>
    </div>
</div>

{{-- style="margin-bottom: 90px;" --}}
<!-- Features Start -->
<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">We Are Here to Grow Your Business Exponentially</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">                     
                        <h4>Exemplary Client-Centric Services</h4>
                        <p class="mb-0">FIKA Systems has committed as the mission states to partner with businesses to provide solutions and not just systems or services. We offer IT related and other consultancy services pertaining to the value of ICTs. Our goal is to focus on providing solutions that enable our clients to reduce the time, complexity and costs of enterprise management, document processing as well and imaging and printing requirements.</p>
                    </div>                
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/workplace.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">                 
                        <h5>FIKA is determined to be a leader in:</h5>
                        <div class="wow zoomIn" data-wow-delay="0.2s">
                            <p class="mb-3"><i class="fa fa-check text-primary me-3"></i>Delivery value-added IT business solutions</p>               
                            <p class="mb-3"><i class="fa fa-check text-primary me-3"></i>Empower clients with Skills and knowledge</p>
                            <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Continuing to enhance customer relationships</p>      
                        </div>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <p class="mb-0">IT/Software application development is one of the premium services of FIKA. Our chief expertise lying in detailed understanding of business requirements at every step of business projects. We determine to use the right technology ensuring maximum return on investment to clients irrespective of the project size.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- About Start -->
<div class="container-fluid py-0 mb-5 wow fadeInUp" data-wow-delay="0.1s"  style="background: #f8f9fa; ">
    <div class="container py-0">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/race-action.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <p class="mb-4">FIKA has been involved in a number of technology development projects focused ICT enabled solutions to the domestic as well as overseas markets. As the technological advancements that have revolutionized the world, FIKA assures out of the box solutions that are time specific and client-centric. Due to the richness in experience, providing flexible, reliable, scalable and cost-effective solutions, we are geared up and competent to execute software projects spanning a majority of industries. As experts in document management systems, loyalty solutions, digitization systems, distribution and implementation, we are involved in every stage upon selection of Electronic DMS from implementation to completion offering continual functional and technical support.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="background:#dee2e6">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-75 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us for an Immediate Feedback</h3>
                    <h2 class="text-white mb-0">+254 11 4518893</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="mb-5 wow fadeInUp h-75 p-5 rounded" data-wow-delay="0.1s" style="background: #091E3E;">
                    <div class="container py-5">
                        <div class="row">
                            <div class="pb-3 mb-3 mx-auto align-items-center justify-content-center text-center" style="max-width: 1000px;">
                                <h3 class="mb-0 text-light">Questions? We Can Help.</h3>
                            </div>                          
                            <a href="/inquiry" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Request for an Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection