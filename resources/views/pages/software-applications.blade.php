@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header" >
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Software Applications Development</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/software-applications" class="h5 text-white">Software Applications Devt.</a>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp mb-4" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/software.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-3">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h3 class="mb-0">Software Applications</h3>
                </div>
                <p class="mb-4">Fika designs and develops technology-driven robust, reliable, user-friendly, secure, scalable and easily maintainable software applications by fine understanding of your organization's business needs. With the help of right technology - people mix and domain-centric approach, we ensure best desired output and maximum returns on investment irrespective of the size of project. By offshoring, Fika helps you dramatically reduce timelines and operating costs such that you can remain focused in your core areas. We synergize with your team to further help you to build a support centre for your applications. Depending upon client's requirement, we work onsite too.</p>
                
                <h4>Our capability lies in the following areas:</h4>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Internet / Intranet Development</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>E-Commerce Development</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Re-engineering and Migration</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Web application development</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Application Support & Maintenance</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Product Development Support</h5>                     
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Client / Server Applications Development</h5>
                    </div>
                    <p class="">We strictly follow a rigorous project life cycle for every awarded software development assignment and no any aspect is left unanalyzed. Our consultants are involved with you as a partner with their expert advice which helps you explore the new functionalities development with latest technologies advancements.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f5f5f7; ">
    <div class="container" >
        <div class="row g-3">
            <h4 class="text-center">Business Process Automation</h4>
            <div class="col-6">
                <p >Every organization is individual and so the needs. Different domains and verticals need different processes. No matter the size of your organization, whether it is SME or large corporation - you have to automate your processes and face new challenges. The automation could be web based or stand alone depending upon your requirement.</p>
                <p>A canned solution from a vendor might provide you temporary respite. You need to look to an understanding partner for a long term comprehensive solution. Fika is a partner, as well as vendor.</p>
            </div>
            <div class="col-6">
                <p>You can start off with automating one department and then implement it enterprise-wise.</p>
                <p>Fika's expertise lies in automating various departments like sales, marketing, HR, administration, Documentation etc.</p>
            </div>
        </div>
    </div>
</div>

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