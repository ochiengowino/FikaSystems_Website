<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fika Systems Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Tebere Crescent, Kileleshwa, Nairobi</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+254 11 4518893</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@fikasystems.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                {{-- <img class="logo" src="/img/login.png" alt="" style="width:140px; height:80px;"> --}}
                {{-- <i class="fa fa-user-tie me-2"></i> --}}
                <h1 class="m-0">Fika Systems</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                    
                    <div class="nav-item dropdown">
                        <a href="/about-us" class="nav-link dropdown-toggle {{ (request()->is('about-us')) ? 'active' : '' }}" data-bs-toggle="dropdown">About Fika</a>
                        <div class="dropdown-menu m-0">
                            <a href="/about-us" class="dropdown-item">Overview</a>
                            <a href="/mission-vision" class="dropdown-item">Mission & Vision</a>
                            <a href="#" class="dropdown-item">Corporate Brochure</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="/services" class="nav-link dropdown-toggle {{ (request()->is('services')) ? 'active' : '' }}" data-bs-toggle="dropdown">Our Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="/services" class="dropdown-item">Overview</a>
                            <a href="#" class="dropdown-item">General IT Consulting</a>
                            <a href="#" class="dropdown-item">Networking and Network Services</a>
                            <a href="#" class="dropdown-item">Security</a>
                            <a href="#" class="dropdown-item">Systems Support & Maintenance</a>
                            <a href="#" class="dropdown-item">Web Design & Hosting</a>
                            <a href="#" class="dropdown-item">Hardware Repairs</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="/enterprise-solutions" class="nav-link dropdown-toggle {{ (request()->is('enterprise-solutions')) ? 'active' : '' }}" data-bs-toggle="dropdown">Enterprise Solutions</a>
                        <div class="dropdown-menu m-0">
                            <a href="/enterprise-solutions" class="dropdown-item">Overview</a>
                            <a href="/document-management" class="dropdown-item">Productivity Solutions</a>
                            <a href="/printing-imaging" class="dropdown-item">Printing & Imaging</a>
                            <a href="/elo" class="dropdown-item">Document Management Solutions</a>
                            <a href="#" class="dropdown-item">Customer Relation Management</a>                      
                            <a href="#" class="dropdown-item">Enterprise Security</a>
                            <a href="#" class="dropdown-item">Video Intelligence</a>
                            <a href="#" class="dropdown-item">Emergency Response Solution</a>
                            <a href="#" class="dropdown-item">Request for Proposal</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="/software-applications" class="nav-link dropdown-toggle {{ (request()->is('software-applications')) ? 'active' : '' }}" data-bs-toggle="dropdown">Software Applications Devt.</a>
                        <div class="dropdown-menu m-0">
                            <a href="/software-applications" class="dropdown-item">Overview</a>
                            <a href="#" class="dropdown-item">Industries</a>
                            <a href="#" class="dropdown-item">Process</a>
                            <a href="#" class="dropdown-item">Skill Set</a>
                            <a href="#" class="dropdown-item">Case Studies</a>
                            <a href="#" class="dropdown-item">Request for Proposal</a>
                        </div>
                    </div>
                    
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('er-solutions')) ? 'active' : '' }}" data-bs-toggle="dropdown">Fika ER Solutions</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Customer Relation Management</a>
                            <a href="#" class="dropdown-item">Document Management</a>
                            <a href="#" class="dropdown-item">Printing & Imaging</a>
                            <a href="#" class="dropdown-item">Content Management</a>
                            <a href="#" class="dropdown-item">Point of Sale</a>
                            <a href="#" class="dropdown-item">Request for Proposal</a>
                        </div>
                    </div> --}}

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('industries')) ? 'active' : '' }}" data-bs-toggle="dropdown">Industries</a>
                        <div class="dropdown-menu m-0">
                            <a href="/industries" class="dropdown-item">Overview</a>
                            <a href="#" class="dropdown-item">Agriculture</a>
                            <a href="#" class="dropdown-item">Education</a>
                            <a href="#" class="dropdown-item">Telecoms</a>
                            <a href="#" class="dropdown-item">Health</a>
                            <a href="#" class="dropdown-item">Finance</a>
                            <a href="#" class="dropdown-item">Hospitality</a>
                            <a href="#" class="dropdown-item">Retail</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('careers')) ? 'active' : '' }}" data-bs-toggle="dropdown">Careers</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Careers at Fika</a>
                            <a href="#" class="dropdown-item">Latest Openings</a>
                            <a href="#" class="dropdown-item">Employee Speak</a>
                        </div>
                    </div>

                    <a href="/contact-us" class="nav-item nav-link {{ (request()->is('contact-us')) ? 'active' : '' }}">Contact Us</a>
                </div>
                {{-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> --}}
            </div>
        </nav>


        @yield('content')
    

        <!-- Vendor Start -->
        {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel">
                        <img src="img/vendor-1.jpg" alt="">
                        <img src="img/vendor-2.jpg" alt="">
                        <img src="img/vendor-3.jpg" alt="">
                        <img src="img/vendor-4.jpg" alt="">
                        <img src="img/vendor-5.jpg" alt="">
                        <img src="img/vendor-6.jpg" alt="">
                        <img src="img/vendor-7.jpg" alt="">
                        <img src="img/vendor-8.jpg" alt="">
                        <img src="img/vendor-9.jpg" alt="">
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Vendor End -->
    </div>

    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">Copyright &copy; <a class="text-white border-bottom" href="/">Fika Systems Ltd</a>. All Rights Reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>

</html>


