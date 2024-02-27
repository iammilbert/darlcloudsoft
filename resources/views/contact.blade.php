@include ('header');


   <!-- page Navigation -->
  
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
                        <a class="nav-link" href="{{url('portfolio')}}" >Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="{{url('contact')}}" >Contact</a>
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
    <!-- End Of Second Navigation -->
 <!-- Page Header -->
    <header class="header mb-5">
        <div class="overlay">
         <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4 text-white"><a  href="tel:+2347068915796" class="text-white">+234 706 891 5796</a></p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">991 Burke ave, Bronx, NY. 10469.</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">info@darlcloudsoft.com</p>
                    <p></p>
                </div>
                <div class="col-md-7 mt-5">

                       @if($errors->any())
                            @foreach ($errors->all() as $err)
                                <li style="color: red;" class="mb-2">{{$err}}</li>
                            @endforeach
                        @endif
                    <form method="POST" action="user-contact">
                      @csrf
                        <h4 class="mb-4">Drop Us A Message</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Email">

                                 <input type="hidden" class="form-control form-control-lg" name="timeContact" value="<?php echo date('H:i:s'); ?>">

                                  <input type="hidden" class="form-control form-control-lg" name="dateContact" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Message"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-info rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            </div> 
        </div>  
<!--         <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  --> 
       <!--  <div class="mouse-icon bg-info"><div class="wheel font-weight-bold"></div></div> -->
    </header>


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
                            <h5 style="font-family: Gebriola"> 100% Functioning Inventory Systenm</h5>
                         
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
                     <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=991%20Burke%20ave,%20Bronx,%20NY.%2010469.+(DARL%20CLOUD%20SOFT)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->



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
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                         <form method="POST" action="user-contact">
                      @csrf
                        <h4 class="mb-4 text-info" style="font-family: Exotc350 Bd BT;">Subscribe our Newsletter</h4>
                        <div class="form-row">

                            <div class="form-group col-12">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Email">

                                 <input type="hidden" class="form-control form-control-lg" name="timeContact" value="<?php echo date('H:i:s'); ?>">

                                  <input type="hidden" class="form-control form-control-lg" name="dateContact" value="<?php echo date('Y-m-d'); ?>">
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


@include ('footer')

