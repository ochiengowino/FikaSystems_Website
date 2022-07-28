@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/services" class="h5 text-white">Printix</a>
        </div>
    </div>
</div>


<!-- Features Start -->
<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Printix</h5>
            <h1 class="mb-0">Secure Cloud Print Management SaaS</h1>
            <p>Serverless, simple, cloud service that saves you time and money</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">                     
                        <h4>Modern Cloud Printing</h4>
                        <p class="mb-3">Printix is a cloud print management SaaS that unleashes the benefits of modern workplace printing. It helps businesses of all sizes eliminate the need to install traditional on-premises print management software, with associated print servers.</p>
                    </div>                
                </div>
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/printix.png" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Flexible and scalable</h4>
                    <p class="m-0">Benefit from a better, easier, more robust and flexible way of printing.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Reduce complexity and cost</h4>
                    <p class="m-0">Dramatically reduce the cost of print operations and relieve IT burden with quick ROI.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Ease of use and administration</h4>
                    <p class="m-0">Improve employee productivity with simplified administration and an intuitive user experience.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Maximize value with expanded portfolio</h4>
                    <p class="m-0">Complementary to on-premises Kofax ControlSuite™ solution for cloud printing capabilities.</p>
                </div>
            </div>           
        </div>
    </div>
</div>


<!-- About Start -->
<div class="container-fluid py-0 wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-0">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">        
            <h2 class="mb-0">Why Customers Choose Printix</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-4" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.6s" src="img/dms18.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <h5>True cloud solution</h5>
                <p class="mb-3">Secure print services from a cloud platform unlike many other providers that only offer a hybrid cloud print solution, requiring additional services and/or significant on-premises infrastructure dependencies.</p>
            
                <h5>Reduce costs with simplified infrastructure</h5>
                <p class="mb-3">Replace print servers from your network with a cloud-managed print infrastructure. This significantly reduces the on-premises infrastructure costs, services, support and maintenance fees.</p>
            </div>
            <div class="col-lg-4">
                <h5>Improve employee productivity</h5>
                <p class="mb-3">Automatic discovery of print network with intelligent print driver selection and automatic print queue installation by location, group or self-service for increased efficiencies. Convenient, flexible access to print from any device to any printer.</p>           
                <h5>Quick time to benefit</h5>
                <p class="mb-3">SaaS model delivers quick provisioning and customer onboarding with no installation and configuration complexities. Always use the very latest software with new versions updated automatically.</p>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container py-0">
        <div class="row g-5">         
            <div class="col-lg-4">
                    <h5>Simplified, centralized administration</h5>
                    <p class="mb-3">Deploy printers with automatic updates from any location at any time. Always using the very latest software, update clients automatically, and update drivers from a central management location.</p>
            </div>
            <div class="col-lg-4">
                <h5>Third-party integrations</h5>
                <p class="mb-3">Tight integrations with Microsoft components and tools including Azure AD, Endpoint Manager, Azure Virtual Desktop, Universal Print and Power BI. Seamless integration with Google Workspace via single sign-on and Chromebook printing.</p>          
            </div>
            <div class="col-lg-4" style="min-height: 200px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/printix2.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- About End -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"  style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">         
            <h2 class="mb-0">How Printix Can Help</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Serverless Architecture</h4>
                    <p class="m-0">Eliminate print servers from your network infrastructure and create a secure, cloud-managed print infrastructure.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Simplified Print Management</h4>
                    <p class="m-0">Central management for printer deployment with automatic updates from any location at any time.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Print Anywhere/Print Later</h4>
                    <p class="m-0">Release documents from the Printix App when you arrive at the printer. Or with Print Later, release documents to a printer at anytime.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Automatic Printer Discovery</h4>
                    <p class="m-0">Automatically discover the print network and integrate printers and drivers. And automatically deploy and remove printers and printer queues when users move.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Single Sign-On Secure Access</h4>
                    <p class="m-0">Single sign-on and secure access to Printix using Microsoft Azure AD, Google Workspace, OKTA or OneLogin.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Central Management Console</h4>
                    <p class="m-0">Configure and centrally manage printers, print queues and drivers. Add new printers via phone, tablet and computer. Automatically add or remove print queues on users’ computers.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Supports All Network Printers</h4>
                    <p class="m-0">Independent and multi-vendor support for your mixed fleet with the ability to easily print to any printer from any device.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Trusted by Microsoft</h4>
                    <p class="m-0">Tightly integrated with Azure AD and Microsoft to easily manage printing and a trusted ISV and Microsoft co-sell ready partner.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Great with Google</h4>
                    <p class="m-0">Extend Google Workspace with a print-ready experience that’s quick and easy to use and Chrome OS secure.</p>
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