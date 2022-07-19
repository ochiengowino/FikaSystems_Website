@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Printing & Imaging</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Printing & Imaging Solutions</h5>
               
                    <h1 class="mb-0">Discover a Smarter Way to Process Any Document</h1>
                </div>
                <p class="mb-4">Organizations that work like tomorrow employ cognitive capture to intelligently automate the acquisition, understanding and integration of all types of information across an organization, including unstructured data in business documents and emails. Through intelligent document processing, which combines multichannel document capture and intelligent OCR, users have the power to quickly and accurately process any document.</p>
                
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/printing1.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Printing & Imaging</h5> --}}
            <h1 class="mb-0">Capture & Print Solutions</h1>
            <p>Modernize slow, manual, error-prone or expensive processes related to processing documents and electronic data.</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Control Suite</h4>
                    <p class="m-0">Transform your document capture, print management and mobile workflows in a single fully integrated suite, extending the value of your MFD investment</p>
                    <a class="btn btn-lg btn-primary rounded" href="/control-suite">
                         <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Printix</h4>
                    <p class="m-0">Printix is cloud print management SaaS that unleashes the benefits of modern and secure workplace printing. Eliminate print servers from your network and create a secure, efficient and cloud-managed print infrastructure.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/printix">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax AutoStore</h4>
                    <p class="m-0">AutoStore offers a way to centrally manage all document and data capture activities across any enterprise IT environment.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/auto-store">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Business Connect</h4>
                    <p class="m-0">Business Connect extends business processes, enabling distributed employees to work securely and efficiently through a single productivity solution.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/business-connect">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Capture</h4>
                    <p class="m-0">Kofax Capture processes and integrates content capture directly into your critical business workflows and systems from any location. Scan, capture and index structured and unstructured documents to achieve faster ROI.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/kofax-capture">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Copitrak</h4>
                    <p class="m-0">With Copitrak, your organization can work more efficiently with greater accessibility and cost visibility, while mitigating any risks to sensitive data.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/kofax-copitrak">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Equitrac</h4>
                    <p class="m-0">Equitrac intelligent print management software prints simply, securely and with maximum savings.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/equitrac">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Express</h4>
                    <p class="m-0">Express is a robust all-in-one document application capable of high-speed scanning with real-time image display, indexing and bar code detection.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/express">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax OmniPage</h4>
                    <p class="m-0">Turn paper, PDFs and images into valuable digital files to maximize productivity with OmniPage, our OCR software solution.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/omnipage">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Output Manager</h4>
                    <p class="m-0">Output Manager enables you to boost productivity and business outcomes with an intelligent print ecosystem.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/output-manager">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax SafeCom</h4>
                    <p class="m-0">SafeCom streamlines print management to reduce costs and enable safe control printing operations.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/safecom">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">PSIcapture</h4>
                    <p class="m-0">Kofax PSIcapture's advanced, automated document capture and data extraction turns documents, databases and email data into actionable information.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/psicapture">
                        <i class="bi bi-arrow-right"></i>
                    </a>
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

    {{-- style="background: #fbfefb;" --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
                <h1 class="mb-0">Use AI to Turn Documents and Data Into Savings and Simplicity</h1>
            </div>
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/p&i.jpg" alt="" style="width: 100%; height: 200px">
                                    {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                   
                                    </div>
                                    <h4 class="mb-3">A single platform for your print and capture needs</h4>
                                    <p>A fully-integrated suite for capturing and processing structured, semi-structured and unstructured documents, helping you realize a new level of efficiency in your document capture processes and avoid costly integrations.</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/p&i2.jpg" alt="" style="width: 100%; height: 200px">
                                    {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                   
                                    </div>
                                    <h4 class="mb-3">Scale information capture</h4>
                                    <p>Automate and accelerate business processes with a powerful, flexible platform that provides a standard and consistent process for securely capturing all types of information and is scalable across the organization.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/webapplication1.jpg" alt="" style="width: 100%; height: 200px">
                                    {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        
                                    </div>
                                    <h4 class="mb-3">Maximize security​</h4>
                                    <p>Ensure compliance and information governance in your data workflows. Ensure communication protocols, use advanced information protection such as watermarking and maintain a chain of custody.</p>
                                   
                                </div>
                            </div>
                        </div>
            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection