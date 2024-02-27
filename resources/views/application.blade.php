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
                        <a class="nav-link" href="{{url('student-dashboard')}}" >Home</a>
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
                        <a href="#" class="nav-link dropdown-toggle text-dark font-weight-bold" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('application')}}" class="dropdown-item text-dark font-weight-bold">Order New Course</a>
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



 @if(Session::has('success'))
<script type="text/javascript">
    swal("GREAT", "Application submitted Successfully", "success");
</script>
@endif

 @if(Session::has('fail'))
<script type="text/javascript">
    swal("FAILED", "Something went Wrong!", "warning");
</script>
@endif

 <!-- Service Section -->
    <section  id="service" class="section mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-8 mt-3">
                    <div class="card mb-4 mb-md-0 border pt-2 border-white">
                        <div class="card-body">
                              <h5 class="text-info" style="font-family: Exotc350 Bd BT; font-size: 30px">Application Form</h5>
                                 <small>Fill the Form below</small>s

                           <form class="form mt-4" method="POST" action="application-form">
                            @csrf
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="category">Categroy</label>
                                  <select id="category" name="categories" class="form-control">
                                    <option selected></option>
                                    <option value="Website">Website</option>
                                    <option value="MobileApp">Mobile App</option>
                                    <option value="Design">Dessign</option>
                                    
                                    <option value="Logistics">Logistics</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Networking">Networking</option>
                                    <option value="Hacking">Ethical Hacking</option>
                                    <option value="AI">Artificial Intelligency (AI)</option>
                                  
                                    <option value="Microsoft">Microsoft</option>
                        
                                  </select>
                                  <span class="text-danger" style="font-size: 11px;">@error('categories') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="programme">Preferred Programme</label>
                                  <select name="courseId" id="programme" class="form-control">
                                    <option selected></option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="Graphics Design">Graphics Design</option>
                                    <option value="Logistics Training">Logistics Training</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Networking">Networking</option>
                                    <option value="Ethical Hacking">Ethical Hacking</option>
                                    <option value="Artificial Intelligency (AI)">Artificial Intelligency (AI)</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                    <option value="Microsoft Word">Microsoft Word</option>
                                    <option value="Corel Draw">Corel Draw</option>
                                    <option value="PhotoShop">PhotoShop</option>
                                    <option value="Flutter">Flutter</option>
                                    <option value="Kotlin for Mobile App">Kotlin for Mobile App</option>
                                  </select>
                                   <span class="text-danger" style="font-size: 11px;">@error('courseId') {{$message}} @enderror</span>
                                </div>


                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="aboutus">Additional Information</label>
                                  <textarea placeholder="more info..." class="form-control" name="additionalInfo"></textarea>
                                   <span class="text-danger" style="font-size: 11px;">@error('additionalInfo') {{$message}} @enderror</span>
                                </div>

                                 <div class="form-group col-md-6">
                                  <label for="session">Session</label>
                                  <select name="session" id="session" class="form-control">
                                    <option selected></option>
                                    <option value="Morning">Morning</option>
                                    <option value="Afternon">Afternon</option>
                                    <option value="Evening">Evening</option>
                                    <option value="Night">Night</option>
                                  </select>
                                   <span class="text-danger" style="font-size: 11px;">@error('session') {{$message}} @enderror</span>
                                </div>
                              </div>
                              <button type="submit" name="submit" class="btn btn-info rounded">Submit Data</button>
                               <a href="{{('student-dashboard')}}" type="submit" class="btn btn-danger rounded">Back Home</a>
                            </form>
                        </div>
                    </div>
                </div>              
            </div>

               <div class="col-md-2">
                    
                </div>
        </div>
    </section>
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

