@include ('header')

 <nav class="navbar border-dark custom-navbar navbar-expand-md navbar-dark bg-info fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="assets/imgs/logo.png" alt="Darl Cloud-Soft Logo" style="height: 80px; width: 80px;">
            </a>
            <button class="navbar-toggler ml-auto btn-info border border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-width:15px; background-color: skyblue;">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" href="{{url('student-dashboard')}}" >Home</a>
                    </li>                     

                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">Printable</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('print-cert')}}" class="dropdown-item">Print Certificates</a>
                            <hr class="dropdown-divider">
                            <a href="{{url('print-data')}}" class="dropdown-item">Print Bio Data</a>
                            <hr class="dropdown-divider">
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('application')}}" class="dropdown-item">Order New Course</a>
                            <hr class="dropdown-divider">
                            <a href="{{url('coursecompleted')}}" class="dropdown-item">Completed Courses</a>
                            <hr class="dropdown-divider">
                            <a href="{{url('coursecompleted')}}" class="dropdown-item">Current Courses</a>
                            <hr class="dropdown-divider">
                            <a  class="dropdown-item" href="{{url('certificate')}}" >Course Certificate</a>
                        </div>

                    </li>

                       <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">Payment</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('jobs')}}" class="dropdown-item">My Invoices</a>
                            <hr class="dropdown-divider">
                            <a  class="dropdown-item" href="{{url('blog')}}" >Course Fees</a>
                        </div>

                    </li>

                     <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">Student details</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('jobs')}}" class="dropdown-item">Profile</a>
                            <hr class="dropdown-divider">
                            <a  class="dropdown-item" href="{{url('blog')}}" >Edit Data</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="components.html" class="nav-link dropdown-toggle btn btn-light btn-sm rounded  text-info" data-toggle="dropdown">Security <i class="fa fa-key text-info"></i></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Change Password</a>
                            <hr class="dropdown-divider">
                            <a href="logout"  class="dropdown-item">Logout</a>
                        </div>

                    </li> 
                </ul> 
            </div>
  </div>
</nav>


  <!-- =========================================================== -->

        <!-- Small Box (Stat card) -->
<div class="section">
      <div class="container mt-5">
        <div class="row mb-2">
                    <a href="{{url('student-dashboard')}}" class="text-secondary font-weight-bold mb-4 btn btn-secondary text-white" style="font-size: 20px"><i class="fa fa-dashboard"></i> Dashboard</a>
        </div>

        
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="fa fa-cart-plus" style="font-size: 100px"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h6>Web Development<sup style="font-size: 13px"></sup></h6>
                <h6>HTML 5<sup style="font-size: 13px"></sup></h6>

                <p>Active</p>
              </div>
              <div class="icon">
                <i class="fa fa-play" style="font-size: 100px"></i>
              </div>
              <a href="#" class="small-box-footer">
                Continue Course <i class="fa fa-arrow-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Courses Completed</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart" style="font-size: 100px"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
           <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Certificate Achieved</p>
              </div>
              <div class="icon">
                <i class="fa fa-certificate" style="font-size: 100px"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- Service Section -->
     <section  id="service">
        <div class="container">

            <h1 class="text-center text-info font-weight-bold" style="font-family: Exotc350 Bd BT; font-size: 40px">Our Available {{session('id')}} Programmes </h1>
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
    <!-- End OF Service Section -->





    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

