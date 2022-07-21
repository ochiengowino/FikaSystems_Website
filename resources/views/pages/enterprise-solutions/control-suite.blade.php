@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solution</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/services" class="h5 text-white">Kofax Control Suite</a>
        </div>
    </div>
</div>


<!-- Features Start -->
<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" style="background: #f5f5f7; ">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax
                Control Suite</h5>
            <h1 class="mb-0">Transform your document capture, print and mobile workflows with content-aware process intelligence in a single fully integrated suite.</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <h4>Extend the value of your Multi-Function Device (MFD) investments with Multi-Channel Document Workflow Automation</h4>
                        <p class="mb-3">Kofax ControlSuite™ is an on-ramp for your digital transformation initiatives. By augmenting MFDs with intelligent automation capabilities and by connecting to business systems, ControlSuite delivers increased efficiencies and productivity while maximizing document security and ensuring compliance.</p>

                        <p class="mb-3">Work with information regardless of the channel – might it be paper or electronic. Transform all your data into actionable information and deliver it directly into your core business applications and processes.</p>

                        <h4>How Does Kofax ControlSuite Work?</h4>
                        <p class="mb-3">Kofax ControlSuite is an integrated solution that can be configured to automate a wide range of document- dependent tasks. Kofax ControlSuite core business functions include:</p>
                    </div>                
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/printing3.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-1"><i class="fa fa-check text-primary me-3"></i>Automated Content-Based Workflows</h5>
                            <p class="mb-3">Advanced capture and print capabilities digitally transform workflows, driving efficiency and productivity while enabling security.</p>               
                            
                            <h5 class="mb-1"><i class="fa fa-check text-primary me-3"></i>Integrated, Flexible, Scalable</h5> 
                            <p class="mb-3">For businesses of all sizes with flexible packages, ControlSuite delivers value aligned with your immediate and long-term needs, empowering growth from print through capture.</p>
                            
                            <h5 class="mb-1"><i class="fa fa-check text-primary me-3"></i>A Unified User Experience</h5> 
                            <p class="mb-3">A seamless and consistent user experience with a unified client for print, capture and mobile across all devices. Experience maximum convenience, ease of use and output security.</p>
    
                            <h5 class="mb-1"><i class="fa fa-check text-primary me-3"></i>Predictive Analytics Dashboards</h5> 
                            <p class="mb-3">Visualization of print and capture workflows across your multi-fleet environment delivers insights to drive decisions and manage costs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- About Start -->
<div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container py-0">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/printing21.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <h4>Kofax ControlSuite Core Services</h4>
                <p>Kofax ControlSuite combines advanced document capture, print and output management, and mobile capabilities to apply security controls, track and monitor compliance policies, and automate document collection, processing, routing and storage tasks.</p>
                <h5>Capture Services</h5>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Multichannel capture integration</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>OCR conversion</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Business application connectors</p>

                <h5>Print Management Services</h5>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Unified authentication (MFD and mobile)</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Secure print release</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Usage tracking and auditing</p>

                <h5>Output Management Services</h5>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Information monitoring & redaction</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Advanced business rules</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Print Stream Capture, Modification and Transformation</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Non-Windows print stream processing</p>
                <p class="mb-1"><i class="fa fa-check text-primary me-3"></i>Secure document quarantine and release</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<br>


@endsection