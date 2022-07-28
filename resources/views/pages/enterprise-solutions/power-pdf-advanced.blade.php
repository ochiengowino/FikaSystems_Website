@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax Power PDF Advanced</a>
        </div>
    </div>
</div>


<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax Power PDF Advanced</h5>
            <h1 class="mb-0">A PDF Software Solution Built for Business Users</h1>
            <p>A reliable PDF editor for your business with no monthly fees.</p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">                       
                        <h2>An Intuitive, Secure PDF Software Solution</h2>
                        <p class="mb-3">Streamline document workflows and increase productivity with Kofax Power PDF™ Advanced. Built for business users, Power PDF Advanced includes robust functionality like search, redaction and integration with platforms such as Box, Microsoft OneDrive and Evernote. And with a Microsoft Office-style interface, it's easy to learn and use.</p>
                    </div>                 
                </div>               
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 200px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/dms9.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">                   
                    <div class="p-4">                        
                        <p>Protect your business with redaction, document-access restrictions and centrally-managed security features.</p>                      
                    </div>
                </div>
            </div>
            <div class="col-3 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">                   
                    <div class="p-4">                      
                        <p>Go paperless and seamlessly manage e-signatures in PDF files with Kofax SignDoc integration.</p>                     
                    </div>
                </div>
            </div>
            <div class="col-3 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">                   
                    <div class="p-4">                     
                        <p>Create, edit, comment, markup and collaborate on PDF files in real-time with other users in your business or worldwide in a secure environment.</p>                     
                    </div>
                </div>
            </div>
            <div class="col-3 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">                  
                    <div class="p-4">
                        <p>Power PDF supports both macOS 12.0 Monterey and Windows 11.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="background:#dee2e6">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="mb-5 wow fadeInUp h-75 p-5 rounded" data-wow-delay="0.1s" style="background: #091E3E;">
                    <div class="container py-5">
                        <div class="row">
                            <div class="pb-3 mb-3 mx-auto align-items-center justify-content-center text-center" style="max-width: 1000px;">
                                <h3 class="mb-0 text-light">All Information at a Glance can be Found Here.</h3>
                            </div>                          
                            <a href="/download-file" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Product Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
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