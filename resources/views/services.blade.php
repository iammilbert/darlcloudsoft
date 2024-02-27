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
                        <a class="nav-link font-weight-bold text-dark" href="{{url('services')}}" >Our Service</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('portfolio')}}" >Portfolio</a>
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
            <h5 style="font-size: 55px; font-family: Exotc350 Bd BT" class="font-weight-bold text-center">SERVICES;</h5>
            <h5 class="font-weight-bold text-center" style="font-size: 40px; font-family: Gebriola"><span class="text-info"> PROFESSIONAL </span>  OFFERS</h5>
            <a href="" style="font-size: 20px; font-family: Bodoni Bk BT;" class="text-danger">Hardware and Software Company</a>  
        </div>  
        <!--<div class="shape">-->
        <!--    <svg viewBox="0 0 1500 200">-->
        <!--        <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>-->
        <!--    </svg>-->
        <!--</div>  -->
        <div class="mouse-icon bg-danger"><div class="wheel font-weight-bold"></div></div>
    </header>
    <!-- End Of Page Header -->
   <!-- Service Section -->
    <section  id="service">
        <div class="container">
            <h1 class="text-center text-info font-weight-bold" style="font-family: Exotc350 Bd BT; font-size: 40px">Our Available Programmes</h1>
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



  <!-- TEAM Section -->
   <!--  <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center text-info font-weight-bold" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 40px">Our Developers</h6>
             <h6 class="section-subtitle text-center mb-4 font-weight-bold" style="list-style: none; font-family: Bodoni Bk BT; font-size: 25px">Addicted to Professionalism</h6>
            <div class="row align-items-center">
            <div class="col-md-4 my-3 my-md-0 align-items-center">
                    <div class="position-relative overflow-hidden mb-3" style="height: 250px;">
                        <div class="media">
                            <img class="img-fluid w-100 h-100" src="assets/imgs/team-4.JPG" style="object-fit: cover;">
                        </div>
                    </div>
                        

                        <div class="overlay text-center">
                                <div class="mb-2">
                                    <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="" style="list-style: none; font-family: Gebriola;">FullStack Developer</a>
                                        <a href="tel:+2348137950284" class="btn btn-sm" href=""><i class="fa fa-mobile" style="font-size: 30px;"></i></a>
                                </div>
                                <a class="text-center text-uppercase font-weight-bold" style="list-style: none; font-family: Gebriola;">Michael Gabriel .</a>      
                        </div> 
                    </div>

                <div class="col-md-4 my-3 my-md-0 align-items-center">
                    <div class="position-relative overflow-hidden mb-3" style="height: 250px;">
                        <div class="media">
                            <img class="img-fluid w-100 h-100" src="assets/imgs/team-2.JPG" style="object-fit: cover;">
                        </div>
                    </div>
                        <div class="overlay text-center">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="" style="list-style: none; font-family: Gebriola;">MOBILE DEVELOPER</a>
                                        <a href="tel:+2348176093120" class="btn btn-sm" href=""><i class="fa fa-mobile" style="font-size: 30px;"></i></a>
                                </div>
                                <a class="text-center text-uppercase font-weight-bold" style="list-style: none; font-family: Gebriola;">Mr. Joshua .</a>      
                        </div> 
                 </div>


                    <div class="col-md-4 my-3 my-md-0 align-items-center">
                    <div class="position-relative overflow-hidden mb-3" style="height: 250px;">
                        <div class="media">
                            <img class="img-fluid w-100 h-100" src="assets/imgs/team-3.JPG" style="object-fit: cover; width: 100px">
                        </div>
                    </div>
                        

                        <div class="overlay text-center">
                                <div class="mb-2">
                                    <a class="badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="" style="list-style: none; font-family: Gebriola;">UX/UI DESIGNER</a>
                                        <a href="tel:+2348137950284" class="btn btn-sm" href=""><i class="fa fa-mobile" style="font-size: 30px;"></i></a>
                                </div>
                                <a class="text-center text-uppercase font-weight-bold" style="list-style: none; font-family: Gebriola;">Joseph S .</a>      
                        </div> 
                    </div>
            </div>
        </div>
    </section> -->
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