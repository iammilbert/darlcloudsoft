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
                        <a class="nav-link font-weight-bold text-dark" href="{{url('/')}}" >Home</a>
                    </li>   
                    
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}" >About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('services')}}" >Our Service</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('portfolio')}}" >Portfolio</a>
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
                    
                     <!-- <li class="nav-item">
                        <a class="nav-link btn rounded btn-secondary" href="#" >E-Learning</a>
                    </li> -->
                    
   
                     <li class="nav-item dropdown">
                       <a href="#" class="nav-link dropdown-toggle btn btn-light btn-sm rounded  text-info" data-toggle="dropdown"> E-Learning </a>
                        <i class="fa fa-user text-info"></i>
                        <div class="dropdown-menu rounded-0 m-0">
                         <a href="{{url('login')}}" class="dropdown-item">Student Login</a>
                         <hr class="dropdown-divider">
                            <a href="{{url('staff_login')}}" class="dropdown-item">Staff Login</a>
                         <hr class="dropdown-divider">
                         <a href="{{url('register')}}"  class="dropdown-item">Register</a>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h6 style="font-size: 55px; font-family: Exotc350 Bd BT" class="font-weight-bold text-center">Welcome;</h6>
            <h5 class="font-weight-bold text-center" style="font-size: 40px; font-family: Gebriola">DARL <span class="text-info"> CLOUD-SOFT</span> & ENGR.</h5>
            <a href="" style="font-size: 20px; font-family: Bodoni Bk BT;" class="text-danger">Hardware and Software Company</a>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon bg-info"><div class="wheel font-weight-bold"></div></div>
    </header>
    <!-- End Of Page Header -->
<!-- Service Section -->
    <section  id="service">
        <div class="container">
            <h1 class="text-center text-info font-weight-bold" style="font-family: Exotc350 Bd BT; font-size: 40px">Our Services</h1>
            <h6 class="section-subtitle text-center mb-3 pb-3">Make a Good Choice.</h6>

          <div class="row">
             <div class=" card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-4.png" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                              <p style="font-family: Gebriola; font-weight: bolder;" class="text-info text-center">WEB DEVELOPMENT</p>
                            
                            <p class="mb-0" style="font-family: Gebriola;">
                                Become a Full-Stack Web Developer with just ONE course. HTML, CSS, Javascript, Node, React, MongoDB, Web3 and DApps
                                    <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Build 16 web development projects for your portfolio, ready to apply for junior developer jobs.</li>
                                    <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Learn the latest technologies.</li> 
                            
                            </p>
                              <div class="col">
                              <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>


                          </div>

                        </div>
                    </div>
                </div> 

                <div class="card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-3.jpg" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-info font-weight-bold text-center text-uppercase" style="font-family: Gebriola;">Mobile App Development<p>
                            <p class="mb-0" style="font-family: Gebriola;">Go from beginner to creating 3 Android Pie apps using Kotlin, Java and Android Studio. Your app in the Google Play Store 
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> The Fundamentals of the Kotlin Programming Language </li> 
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> A Thorough Walkthrough of Android Studio </li> 
                               
                            </p>
                                 <div class="col">
                             <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>
                        </div>
                    </div>
                </div> 
                <div class=" card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-10.jpg" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-uppercase text-info text-center font-weight-bold" style="font-family: Gebriola;"> Consultancy</p>
                            <p class="mb-0" style="font-family: Gebriola;">
                                The Complete A-Z Consulting Course for Everyone Who Wants to Become Location-Independent

                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Set up your own profitable consulting business and acquire high-paying clients globally </li> 
                                 <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Create consulting presentations & fact sheets as well as know how to present them </li>

                            </p>
                                 <div class="col">
                              <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>
                        </div>
                    </div>
                </div>              
            </div>


            <div class="row">
                <div class="card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-6.jpg" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-uppercase text-info text-center font-weight-bold" style="font-family: Gebriola;"> Logistics Training</p>
                            <p class="mb-0" style="font-family: Gebriola;">Logistics Supply Chain Management Basics - Transport / Import - Export your Freight / Inventory by Air, Sea or Land
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> How to Dispatch Drivers </li> 
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> How to Import / Export your first shipment (Air , Land & Sea) </li> 
                                  <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Overview of all the steps and timeline for a typical international freight transportation </li> 

                            </p>
                                 <div class="col">
                             <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>
                        </div>
                    </div>
                </div>
            
             <div class="card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-8.jpg" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-uppercase text-info text-center font-weight-bold" style="font-family: Gebriola;"> Software Development Training</p>

                            <p class="mb-0" style="font-family: Gebriola;">Learn about software development, OOP, UML, Agile, SCRUM, Python. 

                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i>  Understand what it takes to become a software developer</li> 
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Organize and optimize your work using Agile, Scrum and Kanban </li> 
                                  <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Study Computer Science fundamentals like data structures and algorithms </li> 

                           </p>
                                <div class="col">
                             <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>
                        </div>
                    </div>
                </div>
             <div class="card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-7.jpg" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                   <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-uppercase text-info text-center font-weight-bold" style="font-family: Gebriola;"> Marketing</p>

                            <p class="mb-0" style="font-family: Gebriola;">
                                 Discover the extra advantage of any Business. A practical step by step guide to Marketing Information and Research.
                                  <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Ten steps process to Market Research </li> 
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Learn to do a MR brief</li> 
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Design effective questionnaires</li> 
                            </p>
                                 <div class="col">
                              <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>
                        </div>
                    </div>
                </div>              
            </div>


            <div class="row">
                <div class="card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-2.png" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-uppercase text-info text-center font-weight-bold" style="font-family: Gebriola;"> UI/UX Design</p>
                            <p class="mb-0" style="font-family: Gebriola;">
                                 Get a job in UX and build your user research and UX design skills with this hands-on user experience training course.
                                     <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Bake UX into your workflow by following a proven, user centred design framework. </li>
                                    <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i>Plan field visits and user interviews to uncover user needs.</li>
                                    <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i>Moderate a usability test and prioritise the observations.</li>
                            </p>
                                 <div class="col">
                              <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>
                        </div>
                    </div>
                </div>
            
             <div class="card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-1.jpeg" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-uppercase text-info text-center font-weight-bold" style="font-family: Gebriola;"> E-Learning</p>
                             <h5 class="card-title mt-3 text-info font-weight-bold">E-Learning</h5>
                            <p class="mb-0" style="font-family: Gebriola;">E-learning has worked towards bringing learners, tutors, experts, practitioners, and other interest groups to one place. Thus, there is a good practice of knowledge sharing followed through different online platforms. This is important in current times as competition is rising and the world is also growing. Hence, quick information helps in the better growth of an individual..</p>
                                 <div class="col">
                              <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>
                        </div>
                    </div>
                </div>
             <div class="card col-md-4 mb-4">
                  <div class="row align-items-center text-center"> 
                    <div class="col text-center align-items-center rounded">
                        <img src="assets/imgs/services-9.jpg" alt="Darl Cloud-Soft Logo" class="text-center rounded" style="height: 170px; width: 100%;"> 
                    </div>
                    
                  </div>
                      
                    <div class="mb-4 mb-md-0 border-info border-left border-right">
                        <div class="card-body">
                            <p class="text-uppercase text-info text-center font-weight-bold" style="font-family: Gebriola;"> Graphics Design</p>
                            <p class="mb-0" style="font-family: Gebriola;">
                                Learn what you need to know to break into the world of graphic design.
                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> To learn what graphic design is and how to become a graphic designer</li>

                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Learn what a graphic designer does on the job</li>

                                <li style="list-style: none; font-family: Gebriola; font-size: 15px;" class="mb-1"><i class="fa fa-check"></i> Learn the principles of great graphic design</li>
                          </p> 
                          <div class="col">
                              <a class="btn btn-info rounded" href="{{url('register')}}" style="font-family: Gebriola; font-weight: bolder; color: yellow">Start Learning</a>
                          </div>                        
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <h6 class="section-title mb-0 text-info font-weight-bold" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 40px">ABOUT US</h6>
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
                    <div class="row">
                        <div class="col">
                             <div class="position-relative h-100">
                            <img src="assets/imgs/about-112.jpg" alt="" style="width: 100%; height: 80%;">
                        </div>
                        </div>
                    </div>

                    <div>
                        <div class="col">
                             <div class="position-relative h-100">
                                <img src="assets/imgs/about-111.jpg" alt="" style="width: 100%; height: 60%;">
                            </div>
                        </div>
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


@if(Session::has('submsg'))
<script type="text/javascript">
    swal("Thank You", "Subscribed Successfully", "success");
</script>
@endif
<!--Model Popup ends-->
        <!-- Quote Start -->
    <div class="container-xxl">
        <div class="container">
             <div class="text-center border-primary">
                    <h4 class="font-weight-bold text-info text-uppercase " id="about" style="font-family: Exotc350 Bd BT; font-size: 30px">Stay Connected</h4>
                    <p style="font-size: 20px; font-family: Gebriola" >Experience Our Services</p>
                </div>
            <div class="row g-5 align-items-center">

                <div class="col-md-5 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="font-weight-bold text-info" id="about" style="font-family: Exotc350 Bd BT; font-size: 40px">24/7 Live Chat</h5>

                     <a href="https://api.whatsapp.com/send?phone=2347068915796"  target="_blank" class="mb-2 btn btn-danger"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px;"></i></a>

                      <a href="https://api.whatsapp.com/send?phone=2347068915796"  target="_blank" class="mb-2 ml-2 btn btn-info"><i class="fa fa-facebook" aria-hidden="true" style="font-size: 40px;"></i></a>

                      <a href="https://api.whatsapp.com/send?phone=2347068915796"  target="_blank" class="mb-2 ml-2 btn btn-info"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 40px;"></i></a>

                      <a href="https://api.whatsapp.com/send?phone=2347068915796" target="_blank" class="mb-2 ml-2 btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 40px;"></i></a>

                      <a href="https://api.whatsapp.com/send?phone=2347068915796" target="_blank" class="mb-2 ml-2 btn btn-info"><i class="fa fa-linkedin" aria-hidden="true" style="font-size: 40px;"></i></a>
                    <div class="d-flex align-items-center text-center">
                        <div class="font-weight-bold py-2 text-center">
                            <h6>Call us <a class="mb-2 btn btn-success text-white ml-4"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 40px;"></i></a><br>

                            <a href="tel:+13473275398" style="font-weight: bolder;" class="text-secondary">+1 718 814 1725</a><br>
                             <a href="tel:+13473275398" style="font-weight: bolder;" class="text-secondary">+1 347 327 5398</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                      @if($errors->any())
                            @foreach ($errors->all() as $suberror)
                                <li style="color: red;" class="mb-2">{{$suberror}}</li>
                            @endforeach
                        @endif
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                         <form method="POST" action="user-newsletter">
                      @csrf
                        <h4 class="mb-4 text-info" style="font-family: Exotc350 Bd BT;">Subscribe our Newsletter</h4>
                        <div class="form-row">

                            <div class="form-group col-12">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Email">
                            </div>
        
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-info rounded w-md mt-3">Subscribe</button>
                            </div>                          
                        </div>                          
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

      <!-- register Section -->
    <section class="section" id="testmonial">
        <div class="container">
         <div class="row">
                <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h6 class="section-title text-center text-info font-weight-bold" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 40px">Get Your Career Upgraded</h6>
            <a class="btn btn-lg btn-primary btn-block" href="{{('login')}}"> START LEARNING  HERE</a>
            </div>

            <div class="col-md-4">
                
            </div>
         </div>
            
        </div>
    </section>
    <!-- End of Testmonial Section -->

@include('footer')