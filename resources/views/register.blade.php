@include ('header')

 
 @if(Session::has('success'))
<script type="text/javascript">
    swal("GREAT", "Account Created Successfully", "success");
</script>
@endif

 @if(Session::has('fail'))
<script type="text/javascript">
    swal("FAILED", "Something went Wrong!", "warning");
</script>
@endif
<!--Model Popup ends-->
 <!-- Page Header -->
    <header class="header">
        <div class="overlay">
         <div class="container">
            <div class="row align-items-center">
                <section>
                    <div>
                        <p></p>
                    </div>
                </section>
                <div class="col-md-5 mt-2">
                    <p style="font-family: Exotc350 Bd BT; font-size: 18px;" class="text-center">
                        eLearning inspires community engagement and inclusive learning environments through the use of emerging technologies. </p>
                        
                </div>
                <div class="col-md-7 mb-4">
               
                    <form method="POST" action="user-signup">
                      @csrf
                        <h5 class="text-uppercase text-info mt-2 text-center" style="font-family: Exotc350 Bd BT; font-size: 30px;">Create Account</h5>

                            <div class="form-row mb-4">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Full name" value="{{old('name')}}">
                                    <span class="text-danger" style="font-size: 11px;">@error('name') {{$message}} @enderror</span>
                                </div>
                            </div>

                        <div class="form-row mb-2">
                            <div class="form-group col-sm-4 col-md-6">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="tel" placeholder="Phone number" value="{{old('tel')}}">
                                <span class="text-danger" style="font-size: 11px;">@error('tel') {{$message}} @enderror</span>
                            </div>

                            <div class="form-group col-sm-4 col-md-6">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Email" value="{{old('email')}}">
                                <span class="text-danger" style="font-size: 11px;">@error('email') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="form-row mb-2">
                             <div class="form-group col-sm-4 col-md-6">
                                <input type="password" class="form-control text-white rounded-0 bg-transparent" name="password" placeholder="Password" value="{{old('password')}}">
                                <span class="text-danger" style="font-size: 11px;">@error('password') {{$message}} @enderror</span>
                            </div>

                             <div class="form-group col-sm-4 col-md-6">
                                <input type="password" class="form-control text-white rounded-0 bg-transparent" name="cpassword" placeholder="Confirm Password" required="cpassword" value="{{old('cpassword')}}">
                            </div>
                        </div>

                        <div class="form-row">
                             <div class="form-group col-12">
                                <textarea name="address" id="" class="form-control text-white rounded-0 bg-transparent" placeholder="Address">{{old('address')}}</textarea>
                                <span class="text-danger" style="font-size: 11px;">@error('address') {{$message}} @enderror</span>
                            </div> 
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-info rounded w-md mt-2">Save</button>

                                 <a href="{{('/')}}" class="btn btn-primary rounded w-md mt-2">  Back Home</a>
                             </div>

                        </div> 
                            <a href="{{('login')}}"><span class="text-white">Have Account already ?</span>  Login</a>                        
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            </div> 
        </div>  

          <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>
    </header>

  

