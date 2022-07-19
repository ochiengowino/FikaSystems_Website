@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax SafeCom</a>
        </div>
    </div>
</div>

<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax SafeCom</h5>
            <h1 class="mb-0">Optimized Print Management Processes</h1>
            <p>Streamline print management to reduce costs and enable safe control printing operations</p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        
                        <h2>Safe Printing for MFDs</h2>
                        <p class="mb-3">In a distributed environment, organizations need to simplify document workflows and reduce print operations costs, while mitigating security and compliance risks. With Kofax SafeCom®, your mobile workforce can print more efficiently and securely manage sensitive data.</p>

                    </div>
                 
                </div>
                
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/workplace.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Save money and reduce waste</h4>
                    <p class="m-0">Reduce print related costs by up to 40% with secure pull print and efficient print rules and remove the need for print servers through client-based printing.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Deploy simply and quickly</h4>
                    <p class="m-0">Enterprise ready, but can be easily deployed and configured on a single server in less than 30 minutes.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Print from any mobile device</h4>
                    <p class="m-0">Gives users different methods of submitting jobs through a mobile solution—including a mobile app, e-mail or web submission.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f6f6;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
            <h2 class="mb-0">Why Customers Choose SafeCom</h2>
        </div>
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/app-dev1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Scales to your growing organization</h4>
                                <p>Built with scalability and high availability, each component can connect to one of multiple SafeCom servers to automatically failover if a server can’t be reached. </p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/sales1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Creates a secure print server</h4>
                                <p>Secure pull print increases security, ensuring users pick up the correct documents they send to the printers. The solution can be configured for an end-to-end encrypted workflow, allowing complete security of documents during the print lifecycle.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/webapplication1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    
                                </div>
                                <h4 class="mb-3">Deploys to fit your organization</h4>
                                <p>The multi-vendor solution supports multiple MFD platforms and is an embedded solution for both MFD and select single-function printers. A wide range of deployment options such as mobile, server- and client-based printing.</p>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Printing & Imaging</h5> --}}
            <h2 class="mb-0">How SafeCom Can Help</h2>
            {{-- <p>Modernize slow, manual, error-prone or expensive processes related to processing documents and electronic data.</p> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Authentication</h4>
                    <p class="m-0">Protect against unauthorized use of company MFDs and printers by requiring users to authenticate when they log in at the device.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  
                    <h4 class="mb-3">Analytics</h4>
                    <p class="m-0">Gain a clear overview of print, copy, scan, fax and email activities, usage behavior and costs.</p>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Simple Deployment</h4>
                    <p class="m-0">Enjoy the benefits of an enterprise-ready solution that offers the convenience and ease of a small business solution.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Secure Pull Print</h4>
                    <p class="m-0">Send documents to the SafeCom printer server and securely pick up documents from any device at any time.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">High Flexibility</h4>
                    <p class="m-0">Realize a high degree of flexibility with support for 10 different MFD platforms.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Document Encryption</h4>
                    <p class="m-0">Protect your documents and data from being intercepted over the network.</p>
                    
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us for Inquiry</h3>
                    {{-- <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p> --}}
                    <h2 class="text-white mb-0">+254 20 2495918</h2>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection