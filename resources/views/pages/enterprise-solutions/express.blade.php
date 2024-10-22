@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/services" class="h5 text-white">Kofax Express</a>
        </div>
    </div>
</div>


<!-- Features Start -->
<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax Express</h5>
            <h1 class="mb-0">All-in-One, Intelligent Document Scan Application</h1>
            <p>High-speed scanning with real-time image display, indexing and bar code detection.</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">                        
                        <h2>Convert Stacks of Paper Into Actionable, Digital Content</h2>
                        <p class="mb-3">Improve business processes, reduce costs and reliance on paper, improve records management and compliance with Kofax Express™.  Anyone can quickly scan, index and export documents for fast retrieval.</p>
                    </div>                 
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="blog-item bg-light rounded overflow-hidden">                           
                            <div class="p-4">
                                <h4 class="mb-3">Intuitive and user-friendly interface</h4>
                                <p>Execute commands with a single click for faster adoption and greater productivity</p>                             
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="blog-item bg-light rounded overflow-hidden">                           
                            <div class="p-4">
                                <h4 class="mb-3">Scale to support additional functions</h4>
                                <p>Easily scale to support additional functions
                                    Scale to support additional functions                                   
                                    Multiple scan and image processing functions can run simultaneously to provide the highest throughput possible.
                                </p>                             
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.6s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/printing9.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- About Start -->
<div class="container-fluid py-0 wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-0">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">        
            <h2 class="mb-0">Why Customers Choose Express</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-4" style="min-height: 200px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/office49.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <h5>Direct integrations</h5>
                <p class="mb-3">Index, classify and deliver documents and data into more than 100 different back-end systems for easy and fast retrieval. Express supports direct integration with Kofax Capture™ and provides an API for advanced exports.</p>
            </div>
            <div class="col-lg-4">
                <h5>Easy adoption</h5>
                <p class="mb-3">Utilize the same familiar interface as Microsoft Office applications with commonly used commands. Access numerous Express features with a single click.</p>
            </div>        
        </div>
    </div>
</div>


<div class="container-fluid py-0 mb-5 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container py-0">
        <div class="row g-5">
            <div class="col-lg-4">
                <h5>High-quality image editing</h5>
                <p class="mb-3">Utilize SmoothView™ technology to manipulate document images. Integrated Kofax VirtualReScan® (VRS) technology ensures images will look better than their paper originals without pre-scan document preparation.</p>
            </div>
            <div class="col-lg-4">
                <h5>Fast document processing</h5>
                <p class="mb-3">Train Express to locate key index information in a document, automatically remember that location, then extract the data from future documents.</p>            
            </div>
            <div class="col-lg-4" style="min-height: 200px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/office47.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- About End -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">         
            <h2 class="mb-0">How Express Can Help</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Point and Click Rescan</h4>
                    <p class="m-0">When a page is scanned with a folded corner, a forgotten sticky note still affixed, or a double-feed escapes detection, Express inserts the rescanned document without rescanning the entire batch.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Flexible Document Separation</h4>
                    <p class="m-0">Fill the auto document feeder and divide the batch into individual groups automatically based on patch codes, bar codes or inserted blank pages, eliminating the need to scan documents one at a time.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">VRS Corrections</h4>
                    <p class="m-0">If Express encounters a poor quality document it can't convert into a legible image, the VRS Corrections feature reserves the image for later inspection and correction without needing to rescan the document.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Enhanced Bar Code Capabilities</h4>
                    <p class="m-0">Read most commonly used 1D and 2D bar codes, even those obscured with stamps, handwriting or coffee cup stains. Scanning in color improves accuracy, allowing flawless decoding of bar codes at low resolutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Single Sign-On Secure Access</h4>
                    <p class="m-0">Single sign-on and secure access to Printix using Microsoft Azure AD, Google Workspace, OKTA or OneLogin.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Visual Undo History</h4>
                    <p class="m-0">Ensure you don’t lose track of modifications. This feature shows the sequence of processes that were done—or undone—on any document image.</p>
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