@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header enterprise-header ">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Document Management</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Document Management Solutions</h5>
               
                    <h1 class="mb-0">Save Time With Digital Document Management</h1>
                </div>
                <p class="mb-4">Organizations often rely on costly manual paper processes that lack document security, are time-consuming and error-prone. Save time, increase productivity and protect your confidential information with our market-leading PDF, OCR and document conversion solutions.</p>
                
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/dms7.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
          
            <h1 class="mb-0">Desktop Productivity Solutions</h1>
            <p>Market-Leading PDF, OCR and document conversion solutions.</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Power PDF</h4>
                    <p class="m-0">Kofax Power PDF (formerly Nuance) solutions provide everything you need to create, covert, edit, share and e-sign PDF files.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/power-pdf-standard">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Power PDF Advanced Volume (for Enterprise)</h4>
                    <p class="m-0">Power PDF Advanced Volume (for Enterprise) empowers your organization with advanced security, OCR technology, seamless integrations and scalability.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/power-pdf-advanced">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax PaperPort</h4>
                    <p class="m-0">PaperPort gives you options beyond the desktop to take control of your paper documents in one place.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/paperport">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Communication Server</h4>
                    <p class="m-0">Communication Server automates the exchange of information by integrating your inbound and outbound communication channels.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/communication-server">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Power PDF Advanced</h4>
                    <p class="m-0">An intuitive, secure and more advanced PDF generator. Kofax Power PDF software is built for business users with no monthly fees.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/power-pdf-advanced">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax Power PDF Mobile</h4>
                    <p class="m-0">There's no telling when—or where—your employees may need to sign a document, offer feedback on a critical report, or review an important document. With Power PDF Mobile, the functionality you need is right at your fingertips.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/power-pdf-mobile">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax eCopy</h4>
                    <p class="m-0">eCopy enables mobile workforces to capture and process documents seamlessly so you can digitally transform workflows and increase productivity.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/ecopy">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Kofax eFlow</h4>
                    <p class="m-0">eFlow collects content from any document and turns it into actionable information delivered downstream to simplify and digitally transform your workflows.</p>
                    <a class="btn btn-lg btn-primary rounded" href="/eflow">
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


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
            <h2 class="mb-0">Desktop Document Management Solutions to Simplify Your Work and Save You Time</h2>
        </div>
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/dms5.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small> --}}
                                </div>
                                <h5 class="mb-3">Accelerate work and drive productivity</h5>
                                <p>Enable your users to easily and quickly create, convert, edit, share and e-sign PDF files, driving significant efficiencies and providing advanced document security.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/dms4.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small> --}}
                                </div>
                                <h5 class="mb-3">Automate today, scale tomorrow</h5>
                                <p>Transform paper documents into actionable digital information to help solve your current challenges and meet your future business requirements.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

@endsection