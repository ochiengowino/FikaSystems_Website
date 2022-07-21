@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Kofax OmniPage</a>
        </div>
    </div>
</div>

{{-- style="margin-bottom: 90px;" --}}
<!-- Features Start -->
<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax OmniPage</h5>
            <h1 class="mb-0">Maximize Productivity with OCR Software</h1>
            <p>The industry’s leading optical character recognition (OCR) technology.</p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        
                        <h2>Empower Your Teams to Be More Productive with OCR</h2>
                        <p class="mb-3">Kofax OmniPage OCR software converts any document into the word processor format of your choice. Save, edit and search documents as you would a Word document.</p>

                    </div>
                 
                </div>
                
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/printing12.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Scalable</h4>
                        <p>Whether you’re converting a handful of paper documents or millions of pages, OmniPage solutions are perfect for a single user, small business or enterprise.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Accurate and effective</h4>
                        <p>Offers superior conversion accuracy, intelligent character recognition and zonal recognition, so you can quickly create editable documents.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Simple</h4>
                        <p>Fast document conversion times increase productivity and enable a greater focus on more strategic work.</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<br>


@endsection