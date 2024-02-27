@include ('header');



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
                        <a class="nav-link" href="{{url('contact')}}" >Contact</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle font-weight-bold text-dark" data-toggle="dropdown">Career</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('#')}}" class="dropdown-item">Jobs Vacancy</a>
                            <hr class="dropdown-divider">
                            <a  class="dropdown-item font-weight-bold text-dark" href="{{url('blog')}}" >Blog</a>
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
    <header class="header">
        <div class="overlay">
            <h5 class="font-weight-bold text-center" style="font-size: 30px; font-family: Gebriola"> DARL <i></i><span class="text-info"> BLOG</span></h5>
            <h5 style="font-size: 60px; font-family: Exotc350 Bd BT" class="font-weight-bold text-center">COMMING SOON..</h5>
            <a href="" style="font-size: 20px; font-family: Bodoni Bk BT;" class="text-danger">Stay Tune, for the Best</a>  
        </div>  
<!--         <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  --> 
        </div>
    </header>
    <!-- End Of Page Header -->
   
    <script src="https://formspree.io/js/formbutton-v1.min.js" defer></script>
    <script>
      window.formbutton =
        window.formbutton ||
        function() {
          (formbutton.q = formbutton.q || []).push(arguments);
        };
      formbutton("create", {
        action:"https://formspree.io/f/xeqwgkvr",
        title: "Contact Us",
        fields: [
          {
            type: "text",
            label: "Name:",
            name: "name",
          },
          {
            type: "email",
            label: "Email:",
            name: "email",
          },
          {
            type: "text",
            label: "Address:",
            name: "address1",
          },
          {
            type: "text",
            label: "&nbsp;",
            name: "address2",
          },
          {
            type: "textarea",
            label: "Message:",
            name: "message",
          },
          {
            type: "checkbox",
            label: "Please send me your monthly newsletter",
            name: "_optin",
          },
          { type: "submit", value: "Send" }
        ],
        styles: {
          fontFamily: "Montserrat",
          modal: {
            border: "1px solid #6D6875",
            boxShadow: "6px 6px 0 #6D6875",
            borderRadius: "0",
          },
          title: {
            padding: "24px 24px 0px 24px",
            background: "rgba(0,0,0,0)",
            color: "#2e2a37",
            fontFamily: "Marcellus SC",
            fontSize: "2em",
          },
          body: {
              padding: "16px 24px 24px",
          },
          field: {
            display: "flex",
          },
          submitField: {
            justifyContent: "flex-end",            
          },
          label: {
            width: "40%",
          },
          checkboxLabel: {
            width: "auto",
          },
          input: {
            borderRight: "1px solid rgba(0,0,0,0.1)",
            borderBottom: "1px solid rgba(0,0,0,0.1)",
            borderRadius: "0px"
          },
          button: {
            background: "text-primary",
            fill: "skyblue",
            border: "1px solid #6D6875",
            boxShadow: "3px 3px 0px #6D6875"
          },
          closeButton: {
            textShadow: "0 0 0 #2e2a37",
          }
        },
        initiallyVisible: false
      });
    </script>

    <!-- Back to Top -->
   <!--  <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a> -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>