@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Industries</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/industries" class="h5 text-white">Industries</a>
        </div>
    </div>
</div>



<!-- About Start -->
<div class="container py-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-0">
        <div class="row g-5">
            
            {{-- <div class="col">
 
                <p class="mb-4">Fika is currently working with many industries and domains. Every new industry / vertical we enter with a great enthusiasm. Below are major industries we have created and continue to create a niche into.</p>

            </div> --}}
           
            {{-- <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div> --}}
        </div>

        
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/education.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small> --}}
                                </div>
                                <h4 class="mb-3">Education </h4>
                                <p>One of the fast growing industries of the world has redefined itself by inclusion of new technologies into it.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/telecoms1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small> --}}
                                </div>
                                <h4 class="mb-3">Telecoms</h4>
                                <p>Fika has thorough understanding of telecommunication services and manufacturing.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/finance1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small> --}}
                                </div>
                                <h4 class="mb-3">Finance</h4>
                                <p>Fika is currently engaging the financial institutions and carving a niche in financial domain.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/hospitality1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small> --}}
                                </div>
                                <h4 class="mb-3">Hospitality
                                </h4>
                                <p>Perhaps the serviced apartment is one of favourite choices between home and a hotel while you are out for a business trip...</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/retail1.jpg" alt="">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small> --}}
                                </div>
                                <h4 class="mb-3">Retail
                                </h4>
                                <p>Retail - sounds small but a massive industry connects nearly all. Fika understands the huge number of players an..
                                </p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->




@endsection