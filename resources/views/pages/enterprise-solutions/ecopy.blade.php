@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax eCopy</a>
        </div>
    </div>
</div>

<div class="container-fluid wow fadeInUp mb-5" data-wow-delay="0.1s" >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Kofax eCopy</h5>
            <h1 class="mb-0">Empower Productivity With Smart Document Capture</h1>
            <p>Capture and process documents seamlessly so you can digitally transform workflows and increase productivity.</p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        
                        <h2>Mobile Workforces Require Smart Document Capture</h2>
                        <p class="mb-3">As digitization becomes more critical, the document lifecycle can create operational inefficiencies when distributed employees need to securely capture, share and edit documents. Now, your organization can automate internal and external workflows to drive seamless, electronic transactions and eliminate bottlenecks with Kofax eCopy®.</p>

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
                        <h4 class="mb-3">Capture documents faster and easier</h4>
                        <p>Use your phone or any multifunctional device (MFD) to get fast, error-free documents scanned and converted to formats that help your business run smoothly.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Empower your mobile workforce with a multifunctional app</h4>
                        <p>Employees can quickly upload documents to the destinations they require with the push of a button.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="blog-item bg-light rounded overflow-hidden">
                    
                    <div class="p-4">
                        <div class="d-flex mb-3">
                       
                        </div>
                        <h4 class="mb-3">Streamline and secure document-centric business processes</h4>
                        <p>Enhance, extract, batch convert, recognize or export documents as Microsoft Word or Excel files.</p>
                      
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
            <h2 class="mb-0">Why Customers Choose eCopy</h2>
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
                                <h4 class="mb-3">Converts documents to any format</h4>
                                <p>Features the highest accuracy possible when converting documents to Microsoft Word, Excel and PowerPoint.</p>
                              
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
                                <h4 class="mb-3">Personalizes workflows</h4>
                                <p>Create personalized workflows for scanning to specific folders as they're created, in real time, with no need to involve IT or network administrators.</p>
                                
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
                                <h4 class="mb-3">Improves collaboration</h4>
                                <p>Upload, save or send files that work with virtually any backend system.</p>
                               
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
            <h2 class="mb-0">How eCopy Can Help</h2>
            {{-- <p>Modernize slow, manual, error-prone or expensive processes related to processing documents and electronic data.</p> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">MFD Client/User Interface</h4>
                    <p class="m-0">Employ an embedded MFD interface with a full-size keyboard and interactive touch screen.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  
                    <h4 class="mb-3">Security and Compliance</h4>
                    <p class="m-0">Secure documents with Microsoft Active Directory authentication, SSO support with file encryption, tracking, audit trails and reporting.</p>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Integration With Microsoft Office 365</h4>
                    <p class="m-0">Integrated for secure login, converting scanned documents into Microsoft Office formats and connecting directly to Outlook, OneDrive and SharePoint.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Document Processing</h4>
                    <p class="m-0">Scalable server-based file conversion, searchable PDF, JPEG, TIFF, enhanced image processing, highlighting, redaction and support for SmartForms.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Collaboration Tools</h4>
                    <p class="m-0">Integrate to Microsoft Exchange Email or SMTP with LDAP and support almost any fax solution. Route to a desktop, network folder, or WebDav and print to and from any device or capture point.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Customizable Workflows</h4>
                    <p class="m-0">Ensure documents are moved into electronic workflows instantly on platforms such as HPWorkSite, EMC Documentum, SharePoint, OpenText, Salesforce, DocuShare, ACT!, Sage 50 or HP Trim.</p>
                    
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



<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f6f6;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
            <h2 class="mb-0">eCopy Suite of Solutions</h2>
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
                                <h4 class="mb-3">Kofax eCopy ShareScan</h4>
                                <p>The modular and scalable platform architecture gives you the freedom to build the right solution. Select components or choose from packaged solutions—all of which can be managed within one integrated system.</p>
                              
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
                                <h4 class="mb-3">Kofax eCopy Email and Folder Watching Service</h4>
                                <p>Through monitoring of network folders and email addresses, you can extend eCopy capture workflows to electronic documents, files and images from virtually any source.</p>
                                
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
                                <h4 class="mb-3">Kofax eCopy Connectors and Extenders</h4>
                                <p>By adding connectors, you can store and organize documents in external repositories. Extenders transform documents and integrate external data.</p>
                               
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
                                <h4 class="mb-3">Kofax eCopy ScanStation</h4>
                                <p>A secure kiosk for network scanning applications that demand high security, accelerated index-data entry and enhanced connectivity to copiers, MFDs and scanners that don't support embedded applications.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection