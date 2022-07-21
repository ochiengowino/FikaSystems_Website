@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax PaperPort</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Kofax PaperPort</h5>
                    <h1 class="mb-0">The Ultimate Digital Filing Cabinet</h1>
                </div>
                <p class="mb-4">Kofax PaperPort™ enables individuals and organizations to scan, share, search and organize documents in a simple, integrated solution. With PaperPort, you can take individual or enterprise information management to new levels of productivity and security.</p>
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="p-4">
                                <p>Combine fast, easy scanning with PDF creation to simplify document management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="p-4">
                                <p>Store, share and find documents on the network.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="p-4">
                                <p>Capture information on-the-go from any device.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="p-4">
                                <p>Transform paper documents into actionable digital information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/dms6.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection