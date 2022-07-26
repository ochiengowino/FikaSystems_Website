@extends('layouts.app')

@section('content')

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">                
            <img class="w-100" src="img/dms1.jpg" alt="Image" >
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Document Management Systems</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Download Brochure</a>
                    <a href="/contact-us" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">                
            <img class="w-100" src="img/secure-print.png" alt="Image" >
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Secure Print Management</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Download Brochure</a>
                    <a href="/contact-us" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="img/crm1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Customisable & Streamlined</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Customer Relational Management</h1>
                    {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Download Brochure</a>
                    <a href="/contact-us" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> --}}
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="img/erp1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Modular & Dynamic</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Enterprise Resource Planning</h1>
                    {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Download Brochure</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> --}}
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="img/it-consulting1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Professional & Intuitive</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">IT Consulting</h1>
                    {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Download Brochure</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> --}}
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- Navbar & Carousel End -->


<!-- Facts Start -->
{{-- <div class="container-fluid facts py-5 pt-lg-0">
<div class="container py-5 pt-lg-0">
    <div class="row gx-0">
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
            <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                    <i class="fa fa-users text-primary"></i>
                </div>
                <div class="ps-4">
                    <h5 class="text-white mb-0">Happy Clients</h5>
                    <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
            <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                    <i class="fa fa-check text-white"></i>
                </div>
                <div class="ps-4">
                    <h5 class="text-primary mb-0">Projects Done</h5>
                    <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
            <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                    <i class="fa fa-award text-primary"></i>
                </div>
                <div class="ps-4">
                    <h5 class="text-white mb-0">Win Awards</h5>
                    <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}
<!-- Facts Start -->


<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h1 class="mb-0">The Best & Unique IT Solutions For Your Organization</h1>
                </div>
                <p class="mb-4">Fika Systems is a privately held software consulting company specializing in software application development, customer relationship management (CRM) solutions, Web design and  Entreprise solutions.<a href="/about-us"> Read More</a></p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Technology-Driven</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">+254 20 2495918</h4>
                    </div>
                </div>
                {{-- <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a> --}}
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/home1.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Best In Industry</h4>
                        <p class="mb-0">we ensure best desired output and maximum returns on investment irrespective of the size of project. By offshoring, Fika helps you dramatically reduce timelines and operating costs such that you can remain focused in your core areas.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Technology Driven</h4>
                        <p class="mb-0">Fika designs and develops technology-driven robust, reliable, user-friendly, secure, scalable and easily maintainable software applications by fine understanding of your organization's business needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/home2.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional Staff</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="mb-0">Our model of business ensures that a customer is able to get their issue resolved no matter what day or time it is.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->



{{-- style="background: #fbfefb;" --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f2f2f2;">
    <div class="container-fluid py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
            <h1 class="mb-0">Services Offered by Fika</h1>
        </div>
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/imaging-printing1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">                            
                                <h5 class="mb-3">Printing & Imaging Solutions</h5>
                                <p>Secure Printing has been a dream come true for Fika Systems and now we are unveiling a brand of printing & imaging solutions that ensures you print fast, effectively and have contol of print management hence saving money while increasing efficiency.</p>
                                <a class="text-uppercase" href="/printing-imaging">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/app-dev1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">                                
                                <h5 class="mb-3">Applications Development for Varied Business Needs</h5>
                                <p>Fika Systems is passionately involved in providing technology solutions and expertise. Our custom software development services include cost effective client/server applications, intranet, business process automation, database design & development and web applications by using latest technologies.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/sales1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <h5 class="mb-3">Sales & Marketing</h5>
                                <p>Fika CRM has been uniquely developed with modern cutting-edge technologies for small and medium enterprises. Fika CRM empowers these entreprises with industry-best current technology designed specifically to improve your bottom line. It has proven to be invaluable in several industries as measured by our client's increased profitability.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/webapplication1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <h5 class="mb-3">Web Application - Design Mix</h5>
                                <p>Fika is one point source for all website needs. We have designed and developed more than 100 websites worldwide. Our web consultancy is totally based on your target audience and organizational objectives. Apart from complete website designing solutions, we provide online brochure, corporate identity, logo, presentation and banner designing services under creative design services.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection