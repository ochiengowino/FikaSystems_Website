@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax Copitrak</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #fcfcfc;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative text-center pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Kofax Copitrak</h5>
               
                    <h1 class="mb-0">Protect Your Documents and Costs</h1>
                    
                </div>

                <p class="mb-4">Kofax Copitrak® is a single, integrated solution that seamlessly tracks and recovers costs, automates the document lifecycle and breaks down scanning workflow bottlenecks. It offers the accessibility end users demand, while providing insight into expenses, profitability and cost recovery.</p>

            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/workplace.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container py-5">
   
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Security and compliance</h4>
                                <p>Only authorized staff can access specific devices, applications and resources.</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Cost visibility and control</h4>
                                <p>Cut costs, measure cost expenditure and track and control usage.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                           
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    
                                </div>
                                <h4 class="mb-3">Information availability</h4>
                                <p>Track, control and find documents easily, securely and efficiently using Kofax OCR capabilities.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                           
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    
                                </div>
                                <h4 class="mb-3">System interoperability</h4>
                                <p>Email, line of business (LOB) applications, databases and connectivity are intuitive, secure and customizable with Copitrak.</p>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f6f6;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
            <h2 class="mb-0">Why Customers Choose Copitrak</h2>
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
                                <h4 class="mb-3">Cost of ownership</h4>
                                <p>Achieves a lower total cost of ownership with a single, integrated platform.</p>
                              
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
                                <h4 class="mb-3">Productivity</h4>
                                <p>Increases efficiency with seamless access across smartphones, tablets, terminals and more.</p>
                                
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
                                <h4 class="mb-3">Visibility</h4>
                                <p>Enhances transparency into cost recovery, hard-copy expenses and waste reduction.</p>
                               
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
                                <h4 class="mb-3">Flexibility</h4>
                                <p>Enables agility with a state-of-the-art solution built on an open system using modern industry standards.</p>
                               
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
                                <h4 class="mb-3">Usability</h4>
                                <p>Converts, edits and shares PDF files with one click from any print application.</p>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>



    


@endsection