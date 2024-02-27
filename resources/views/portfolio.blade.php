@include('header')

            <nav class="navbar custom-navbar border border-danger navbar-expand-md navbar-dark bg-info fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="assets/imgs/logo.png" alt="Darl Cloud-Soft Logo" style="height: 80px; width: 80px;">
            </a>
            <button class="navbar-toggler ml-auto btn-info border border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-width:15px; background-color: skyblue;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-danger" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}" >Home</a>
                    </li>   
                    
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}" >About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('services')}}" >Our Service</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="{{url('portfolio')}}" >Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}" >Contact</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Career</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('#')}}" class="dropdown-item">Jobs Vacancy</a>
                            <hr class="dropdown-divider">
                            <a  class="dropdown-item" href="{{url('blog')}}" >Blog</a>
                        </div>

                    </li>
   
                        <li class="nav-item">
                        <a class="nav-link btn rounded btn-secondary" href="#" >E-Learning</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h5 style="font-size: 55px; font-family: Exotc350 Bd BT" class="font-weight-bold text-center">Our</h5>
            <h5 class="font-weight-bold text-center text-uppercase" style="font-size: 40px; font-family: Gebriola"><span class="text-info"> Projects</span> Portfolio</h5>
            <a href="" style="font-size: 20px; font-family: Bodoni Bk BT;" class="text-danger">Hardware and Software Company</a>  
        </div>  
    <!--     <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div> -->  
        <div class="mouse-icon bg-success"><div class="wheel font-weight-bold"></div></div>
    </header>
    <!-- End Of Page Header -->
   
      <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center text-info font-weight-bold" style="font-family: Exotc350 Bd BT; font-size: 40px">Our Portfolio</h6>
            <h6 class="section-subtitle mb-5 text-center font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 18px;">New stunning projects for our amazing clients</h6>
            <div class="filters">
                <a href="#" data-filter=".new" class="active">
                    All
                </a>
                <a href="#" data-filter=".marketing">
                    Marketing
                </a>
                <a href="#" data-filter=".design">
                    Mobile
                </a>
         <!--        <a href="#" data-filter=".mobile">
                    Mobile
                </a> -->
                <a href="#" data-filter=".web">
                    Website.
                </a>
            </div>
            <div class="portfolio-container"> 
                <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-01.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-01.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">PROFILE AND INVENTORY SYSTEM</h6>
                                <p class="subtitle">Captures Company profile and inventory System</p>
                                 <a class="btn btn-info rounded" href="http://www.nieveslogistics.com/" target="_blank">Visit Site</a>
                            </div>
                        </div>   
                    </div>             
                </div>
                <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-02.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-02.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">COMPANY PROFILE AND AN E-LEARNING</h6>
                                <p class="subtitle">Company Profile and an E-learning System</p>
                                 <a class="btn btn-info rounded" href="{{url('about')}}" target="_blank">Visit Site</a>
                            </div>
                        </div> 
                    </div>                         
                </div>

             <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-1.jpeg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    
                    </div>              
                </div> 

                   <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-2.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div> 

                   <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-3.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div> 

                  <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-4.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div>

                      <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-6.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div> 

                      <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-7.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div>

                      <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-8.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div>

                      <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-9.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div>

                      <div class="col-md-6 col-lg-4 marketing new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mark-10.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">    </div>              
                </div>


              <div class="col-md-6 col-lg-4 design new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mobile-6.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/mobile-6.jpg"></a>
                            <div class="text-holder">
                            </div>
                        </div>    
                    </div>              
                </div> 
     <div class="col-md-6 col-lg-4 design new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mobile-5.png" class="img-fluid" alt="Darl Cloudsoft Portfolios">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/mobile-5.png"></a>
                            <div class="text-holder">
                            </div>
                        </div>    
                    </div>              
                </div>
 
                       <div class="col-md-6 col-lg-4 design new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mobile-4.png" class="img-fluid" alt="Darl Cloudsoft Portfolios">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/mobile-4.png"></a>
                            <div class="text-holder">
                            </div>
                        </div>    
                    </div>              
                </div> 
              <div class="col-md-6 col-lg-4 design new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mobile-3.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/mobile-3.jpg"></a>
                            <div class="text-holder">
                            </div>
                        </div>    
                    </div>              
                </div>

                     <div class="col-md-6 col-lg-4 design new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mobile-2.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/mobile-2.jpg"></a>
                            <div class="text-holder">
                                
                            </div>
                        </div>    
                    </div>              
                </div>
 
                     <div class="col-md-6 col-lg-4 design new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/mobile-1.png" class="img-fluid" alt="Darl Cloudsoft Portfolios">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/mobile-1.png"></a>
                            <div class="text-holder">
                                                
                            </div>
                        </div>    
                    </div>              
                </div> 
                <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-03.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">
                        <div class="content-holder">
                            <a href="http://www.nieveslogistics.com/" class="img-popup" href="assets/imgs/web-03.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">LOGISTICS INVENTORY SYSTEM</h6>
                                <p class="subtitle">Captures Company profile, an inventory System and DOT Compliance</p>
                                <a class="btn btn-info rounded" href="http://www.darltransport.com/" target="_blank">Visit Site</a>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-07.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-07.jpg"></a>
                            <div class="text-holder">
                                <h5 class="title">AN INVENTORY MANAGEMENT SYSTEM</h5>
                                <p class="subtitle">Capture; Staff Record, Sales, Purchases and Profits, Expenses, and Report Generating</p>
                                 <a class="btn btn-info rounded" href="http://www.nieveslogistics.com/" target="_blank">Visit Site</a>
                            </div>
                        </div>
                    </div>                                                     
                </div>


                <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-04.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-04.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">AN INVENTORY SYSTEM FOR DISPATCH COMPANY</h6>
                                <p class="subtitle">Covers logistics activities, Repairs, Purchase, Loads, Drivers Recors, Dispatchers Records and Company Profile</p>
                                  <a class="btn btn-info rounded" href="http://www.darltransport.com/" target="_blank">Visit Site</a>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                 <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-05.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-05.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">STUDIO MANAGEMENT SYSTEM</h6>
                                <p class="subtitle">Record Keeping Software and Company Profile</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                          <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-06.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-06.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">FOOD VENDOR WEBSITE</h6>
                                <p class="subtitle">Company Profile, Receive of Order, Food Delivery and Record Keeping</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>


                   <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-09.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-09.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Performance Appraisal System</h6>
                                <p class="subtitle">An Appraisal System to evaluate the inputs of each and every Lecturers in an institution to reduce bias to the minimal</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                    <div class="col-md-6 col-lg-4 web new mb-2">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-10.jpg" class="img-fluid" alt="Darl Cloudsoft Portfolios">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-10.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">DARLTV SOFTWARE</h6>
                                <p class="subtitle">Advertising, News Broadcasting, Event, Entertainment.</p>
                                 <a class="btn btn-info rounded" href="http://www.darltv.com/" target="_blank">Visit Site</a>
                            </div>
                        </div>
                    </div>                                                     
                </div>  
 
            </div>   
        </div>            
    </section>
    <!-- End of portfolio section -->


    <!-- Testmonial Section -->
    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center text-info font-weight-bold" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 40px">TESTIMONIALS</h6>
             <h6 class="section-subtitle text-center mb-4 font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">What Our Clients Says</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/test-1.png" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">The Tavern</h6>
                                    <small class="text-muted mb-0">Liquor and Winery Spot</small>     
                                </div>
                            </div>
                            <p class="mb-0">Darl Cloud-Soft was referred to us by one of our employees because they had been so incredibly professional. They have proven to be extremely trustworthy, valued partners who make good recommendations and deliver consistently.  We have been working together for almost 2 years and they have always been excellent, both on the account management side and the deliverables.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/test-2.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Darl Transport and Dispatch</h6>
                                    <small class="text-muted mb-0">Dispatch Company</small>      
                                </div>
                            </div>
                            <p class="mb-0">Darl Cloud-Soft has been supporting our business for the past 9 months in both the creation and implementation of new and tailored software. We have worked with several of their developers and cannot speak highly enough of the team. They are reliable, thorough, smart, available, extremely good communicators and very friendly!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/test-3.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Nieves Logistics</h6>
                                    <small class="text-muted mb-0">Transport And Logistics Company</small>        
                                </div>
                            </div>
                            <p class="mb-0">We have always looked for external resources that matched our core values and with Darl Cloud-Soft we finally found a smart and conscientious team. I have personally referred Darl Cloud-Soft and highly recommend. The process of building NIEVES Mobile App and Website was handled with complete professionalism and went smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->


      <!-- Application Section -->
    <section class="section" id="testmonial">
        <div class="container">
         <div class="row">
                <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h6 class="section-title text-center text-info font-weight-bold" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 40px">Get Your Career Upgraded</h6>
            <a class="btn btn-lg btn-primary btn-block" href="{{('login')}}"> APPLY  HERE</a>
            </div>

            <div class="col-md-4">
                
            </div>
         </div>
            
        </div>
    </section>
    <!-- End of Testmonial Section -->

@include('footer')