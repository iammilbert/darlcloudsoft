@include ('header')

 
  @if(Session::has('fail'))
<script type="text/javascript">
    swal("FAILED", "This Email is not registered!", "warning");
</script>
@endif


  @if(Session::has('errm'))
<script type="text/javascript">
    swal("FAILED", "Password Incorrect, try again.", "warning");
</script>
@endif

@if(Session::has('msgerr'))
<script type="text/javascript">
    swal("FAILED", "You have to login first", "error");
</script>
@endif

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
                <div class="col-md-5 pt-3">
                     <p style="font-family: Exotc350 Bd BT; font-size: 18px;" class="text-center">A winning mindset is positively focused, determined, and resilient. Success is the sole aim for such a person.</p>
                </div>
                 <div class="col-md-7 mb-4">
                    <form method="POST" action="{{route('login-user')}}">
                      @csrf
                        <h5 class="text-uppercase text-center text-info mb-5" style="list-style: none; font-family: Exotc350 Bd BT; font-size: 35px;">Login Account</h5>
                        <div class="form-group mb-5">
                            <div class="form-group mb-5">
                                 <input type="text" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Email" value="{{old('email')}}">
                                 <span class="text-danger" style="font-size: 11px;">@error('email') {{$message}} @enderror</span>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control text-white rounded-0 bg-transparent" name="password" placeholder="Password" value="{{old('password')}}">
                                 <span class="text-danger" style="font-size: 11px;">@error('password') {{$message}} @enderror</span>
                            </div>
                            </div>

                            <div class="form-group col-12 mt-5">
                                <button type="submit" class="btn btn-info rounded w-md mt-2">Login</button>

                                 <a href="{{('/')}}" class="btn btn-primary rounded w-md mt-2">  Back Home</a>

                            </div> 
                            <a href="{{('register')}}" class="text-center"><span class="text-white">Not registered yet ?</span>  Create Account</a>                        
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

  

