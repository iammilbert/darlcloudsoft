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
                        <a class="nav-link font-weight-bold text-dark" href="{{url('about')}}" >About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('services')}}" >Our Service</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('portfolio')}}" >Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact" >Contact</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a href="components.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Career</a>
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
            <h5 style="font-size: 55px; font-family: Exotc350 Bd BT" class="font-weight-bold text-center">WHO WE ARE</h5>
            <h5 class="font-weight-bold text-center" style="font-size: 35px; font-family: Gebriola">Our<span class="text-info"> Company </span> Profile</h5>
            <a href="" style="font-size: 20px; font-family: Bodoni Bk BT;" class="text-danger">Hardware and Software Tech Grus</a>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon bg-success"><div class="wheel font-weight-bold"></div></div>
    </header>
    <!-- End Of Page Header -->
  

    <!-- About Section -->
    <section  id="about">
        <h6 class="text-info font-weight-bold text-center mb-2" style="font-family: Exotc350 Bd BT; font-size: 40px">ABOUT US</h6>
        <div class="container">
            
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    
                    <h6 class="section-subtitle mb-4 font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">Who We Are</h6>
                    <p style="font-family: Gebriola; font-size: 15px;">Over the year we have lots of experience in our field. We are number one customer-centric company in the world, where people can get value for all IT services.</p>
                    <img src="assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row"> 
                        <h6 class="section-subtitle font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">Darl <span class="text-info">Cloud-Soft</span> & Engr.</h6>
                        <div class="col-12 mt-4">
                            <p style="font-family: Gebriola; font-size: 15px;">We are a leading information technology solutions provider in the world with extensive experience in virtually all sectors of the economy. Our aim to all clients we partner with is using cutting edge technology to provide solutions that meet their business objectives and challenges.</p>
                        </div>
                    </div>

                <div class="row"> 
                            <h6 class="section-subtitle font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">What We Do</h6>
                        <div class="col-12 mt-4">
                            <p style="font-family: Gebriola; font-size: 15px;">We Specialized in; • Hardware • Software • Networks and Communications • Security and Surveillance • Energy (Solar Solutions) • Web Development and Software • Marketing • Consultancy • E-Learning • Designs • Mobile App Development • UI/UX Design.</p>
                        </div>
                    </div>


                      <div class="row"> 
                            <h6 class="section-subtitle font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">24/7 Customer's Support</h6>
                        <div class="col-12 mt-4">
                            <p style="font-family: Gebriola; font-size: 15px;">We give timely support and advice to our clients. When you do business with us, we keep you as family</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->




    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    
                    <h6 class="section-subtitle mb-4 font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">Our Mission</h6>
                    <p style="font-family: Gebriola; font-size: 15px;">Our mission is to offer innovative services and products, exploiting modern technological infrastructures and competent professionals to guarantee high quality services with respect to customer needs. We considers each project as a challenging collaboration, regardless of the size of the project.</p>
                    <img src="assets/imgs/mission.png" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row"> 
                        <h6 class="section-subtitle font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">Our <span class="text-info">Developers</span></h6>
                        <div class="col-12 mt-4">
                            <p style="font-family: Gebriola; font-size: 15px;">“Our Developers are dedicated to serving our clients with excellence, committed to working together as a team for the success of our company and the business of our clients, we shall take responsibility for our performance, withholding our core values and commitment while being accountable for each and every task upheld.”</p>
                        </div>
                    </div>

                <div class="row"> 
                            <h6 class="section-subtitle font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">Vission</h6>
                        <div class="col-12 mt-4">
                            <p style="font-family: Gebriola; font-size: 15px;">To be a successful global information technology company trusted by its customers for service excellence, caring for its employees and collaborating with our customers to deliver innovative and value driven ICT products and services.”</p>
                        </div>
                    </div>


                      <div class="row"> 
                            <h6 class="section-subtitle font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">OUR CORE VALUES</h6>
                        <div class="col-12 mt-2">
                            <p>
                                <ol style="font-family: Gebriola; font-size: 15px;">
                                     <li style="font-family: Gebriola; font-size: 15px;">Be Passionate and Determined</li>
                                     <li style="font-family: Gebriola; font-size: 15px;">Embrace and Drive Change</li>
                                     <li style="font-family: Gebriola; font-size: 15px;">Take Ownership and Accountability</li>
                                     <li style="font-family: Gebriola; font-size: 15px;">Think and Act as a Professional</li>
                                    <li style="font-family: Gebriola; font-size: 15px;"> Establish Trust with Communication</li>
                                     <li style="font-family: Gebriola; font-size: 15px;">Revitalize through Learning and Growth</li>
                                </ol>
                             </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

        <!-- Feature Start -->
    <div class="container-fluid overflow-hidden px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title mb-2 text-info font-weight-bold" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 40px">Our Features</h6>
                    <h6 class="mb-5" style="font-family: Gebriola">We Serve both Locally and Internationally</h6>
                    <div class="d-flex mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-globe text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola"> Worldwide Service</h5>
                           
                        </div>
                    </div>
                    <div class="d-flex mb-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola"> Professionals Trainners</h5>
                          
                        </div>
                    </div>
                    <div class="d-flex mb-4 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-headphones text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola">24/7 Customer Support</h5>
                         
                        </div>
                    </div>

                 <div class="d-flex mb-4 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-desktop text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola"> RealTime Senior Developers</h5>
                         
                        </div>
                    </div>

                     <div class="d-flex mb-4 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-desktop text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola"> 100% Functioning Inventory System</h5>
                         
                        </div>
                    </div>
                    <div class="d-flex mb-4 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-desktop text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola"> 100% Functioning E-Commerce</h5>
                         
                        </div>
                    </div>

                     <div class="d-flex mb-4 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-desktop text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola"> E-Learning Platform</h5>
                         
                        </div>
                    </div>

                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-desktop text-info fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 style="font-family: Gebriola"> 24/7 <a href="http://www.darltv.com" target="_blank">DarlTV</a> Entertainment</h5>
                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
        
                    <h6 class="section-title mb-2 text-info font-weight-bold" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 40px">Our Map <i class="fa fa-arrow-down text-primary" ></i></h6>
                    <div class="position-relative h-100">
                       <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=NO.1 CARPENTER PLAZA, JIKWOYI ROAD,  Abuja&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:80%;width:90%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

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