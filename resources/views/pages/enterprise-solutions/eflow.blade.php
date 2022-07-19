@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax eFlow</a>
        </div>
    </div>
</div>

<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax eFlow</h5>
            <h1 class="mb-0">Automate Document-Heavy Processes and Lower Costs</h1>
            <p>Collect content from any document and turn it into actionable information to simplify and digitally transform your workflows.</p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        
                        <h2>Capture Data 80% Faster and Reduce Manual Tasks</h2>
                        <p class="mb-3">Kofax eFlow™ takes a holistic view of an enterprise’s document-driven business processes and provides a solution powerful enough to address them all intelligently. Stay competitive with an integrated workflow engine that automates business applications end-to-end.</p>

                    </div>
                 
                </div>
                
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 200px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/workplace.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Improve agility and innovation</h4>
                        <p>Adapt quickly and easily to any changes without draining existing resource. By removing manual tasks, staff have time to help keep your company ahead of the competition.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Level up communications</h4>
                        <p>Through web-based archive and workflow functionality, employees can easily collaborate and better communicate with customers, partners and suppliers.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Minimize risk</h4>
                        <p>Rapid data archiving and retrieval gives you superior transparency, accountability and control of information through its entire lifecycle, so that nothing gets lost.</p>
                      
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
            <h2 class="mb-0">Why Customers Choose eFlow</h2>
        </div>
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/app-dev1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4 align-items-center justify-content-center text-center">
                               
                                <h4 class="mb-3">Increases efficiency</h4>
                                <p>Capture data up to 80% faster, cutting your operating costs and making it easier to manage information.</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/sales1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4 align-items-center justify-content-center text-center">
                               
                                <h4 class="mb-3">Maintains compliance</h4>
                                <p>Data is managed and stored to facilitate compliance with internal policies, industry regulations and legal requirements.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/webapplication1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4 align-items-center justify-content-center text-center">
                                
                                <h4 class="mb-3">Empowers employees</h4>
                                <p>With workflow and process improvements, employees are more efficient and focused on valuable tasks.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/webapplication1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4 align-items-center justify-content-center text-center">
                                
                                <h4 class="mb-3">Empowers employees</h4>
                                <p>With workflow and process improvements, employees are more efficient and focused on valuable tasks.</p>
                               
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
            <h2 class="mb-0">How eFlow Can Help</h2>
            {{-- <p>Modernize slow, manual, error-prone or expensive processes related to processing documents and electronic data.</p> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Open, Scalable Architecture</h4>
                    <p class="m-0">Develop stand-alone desktop applications or high-volume, network-based, remote and local systems.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  
                    <h4 class="mb-3">Broad Enterprise Integration</h4>
                    <p class="m-0">Easily transfer documents between all major content management, ERP, CRM and workflow systems as well as MFDs and scanners.</p>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Process Monitoring</h4>
                    <p class="m-0">Measure and improve operations with easy-to-use process management monitoring and supervision tools.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Cloud Architecture and Interfaces</h4>
                    <p class="m-0">Supports stateless, interchangeable servers for load-balancing.</p>
                    
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