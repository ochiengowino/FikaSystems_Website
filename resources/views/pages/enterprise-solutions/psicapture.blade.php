@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax PSIcapture</a>
        </div>
    </div>
</div>

<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax PSIcapture</h5>
            <h1 class="mb-0">Smart Data Capture and Extraction</h1>
            <p>Kofax PSIcapture's advanced, automated capture and data extraction turns documents and data into actionable information. </p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        
                        <h2>Work the Way You Want with PSIcapture</h2>
                        <p class="mb-3">Competitively priced and uniquely versatile, PSIcapture is a single platform designed to meet your capture needs, including document scanning and import, forms processing, OCR/ICR data extraction and the ability to migrate the information into a document repository. No matter the size and scope of an organization, PSIcapture makes document processes easy.</p>

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
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">         
                    <h4>Capture</h4>
                    <p class="m-0">High-speed, high-accuracy capture ingests virtually any document from many different sources, including MFDs and watched folders.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Extract and Classify</h4>
                    <p class="m-0">Extract and identify documents by type, using powerful automation tools that accelerate productivity.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Publish</h4>
                    <p class="m-0">Migrate your data to Document Management, Line of Business and ECM Systems through either load files or direct connection.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid py-0 wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-0">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
          
            <h1 class="mb-0">Why Customers Choose PSIcapture</h1>
            {{-- <p>Market-Leading PDF, OCR and document conversion solutions.</p> --}}
        </div>
        <div class="row g-5">
            {{-- <h4 class="text-center">Why Customers Choose Printix</h4> --}}
            <div class="col-lg-4" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/printing70.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">

                {{-- <p>Kofax ControlSuite combines advanced document capture, print and output management, and mobile capabilities to apply security controls, track and monitor compliance policies, and automate document collection, processing, routing and storage tasks.</p> --}}
                    <h5>Proprietary n+1 Processor Balancing for OCR</h5>
                    <p class="mb-3">PSIcapture can utilize four, eight, 12 or 16 core processors to increase power. OCR processing increases depending on how many processors are being used.</p>
                
                    <h5>Accelerated Classification Engine (ACE) </h5>
                    <p class="mb-3">ACE allows users to build classification rules in the middle of a workflow. Import documents and verify the automatic classification it’s completed during the workflow, rather than configuring rules prior.</p>
            </div>
            <div class="col-lg-4">
                <h5>Increased Productivity and Reduced Cost</h5>
                <p class="mb-3">ACE accesses existing sets of indexed information, finds their location on the form and extracts the data, reducing a process that once took hours to under a minute. Time saved becomes money saved, and productivity is enhanced significantly.</p>
            
                <h5>Easy Integration</h5>
                <p class="mb-3">With over 60+ ECM and file/folder types to choose from, PSIcapture integrates easily into your organization's ecosystem. Move files to ECMs like Microsoft SharePoint, DocuWare and OnBase or into a folder on your company server.</p>
            </div>
        
        </div>

        
    </div>
</div>



<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Printing & Imaging</h5> --}}
            <h2 class="mb-0">How PSIcapture Can Help</h2>
            {{-- <p>Modernize slow, manual, error-prone or expensive processes related to processing documents and electronic data.</p> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Multi-Core OCR</h4>
                    <p class="m-0">With High-Performance OCR, PSIcapture uses up to 16 cores to read and recognize printed text at blinding speeds. High-volume users can realize text reading boosts up to 12X normal when OCR is utilized in a workflow.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  
                    <h4 class="mb-3">Classification</h4>
                    <p class="m-0">PSIcapture can be trained to automatically identify and separate documents, eliminating the need for pre-scan separation and saving you precious time. This in-demand capability for Advanced Capture products is built in to PSIcapture.</p>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">eMail Capture</h4>
                    <p class="m-0">Effortlessly and automatically ingest, process and migrate emails and their attachments to any number of final destinations. Easy set up for administrators with no end-user training required.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Table Extraction</h4>
                    <p class="m-0">PSIcapture extracts each row as an individual record and posts it anywhere, including a database or an accounting system for easier, faster processing. Simultaniously push the individual index fields and images to other destinations as well. </p>
                    
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


<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">PSICAPTURE FUSION</h5>
            <h2 class="mb-0">Take The Pain Out of Indexing and Validating</h2>
        </div>
    
        <p>Ideal for teams that are spread out in several or many locations, PSIcapture Fusion utilizes a team-level organization with designated supervisors to maintain security and compliance, making the process of managing document queues simple. With a built-in barcode generator and seamless integration with PSIcapture, Fusion’s true integration allows you to leverage all the complex capture functionality of PSIcapture in front-end processing and provides a simple, seamless route to PSIcapture Fusion export.</p>
        
        <div class="row g-5 mb-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">                  
                    <h4 class="mb-3">Queue</h4>
                    <p class="m-0">Automatically queues documents that have been captured by PSIcapture.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">                  
                    <h4 class="mb-3">Index & Validate</h4>
                    <p class="m-0">Authorized users are able to perform manual indexing or validate automatically extracted data.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">                  
                    <h4 class="mb-3">Route</h4>
                    <p class="m-0">Processed documents are routed to the organization’s ECM system.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection