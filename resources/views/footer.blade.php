@if(Session::has('msg'))
<script type="text/javascript">
    swal("Thank You", "Message Sent Successfully", "success");
</script>
@endif
<!--Model Popup ends-->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4 text-white"><a  href="tel:+2347068915796" class="text-white">+234 706 891 5796</a></p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4"> The Carpenter Plaza, Jikwoyi Road, Karu, Abuja, FCT, Nigeria</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">info@darlcloudsoft.com</p>
                    <p></p>
                </div>
                <div class="col-md-7">

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
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, Developed By Michael Gabriel <a href="tel:+2348137950284" target="_blank">. All rights reserved Darl Cloud-Soft & Engr.</a> </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>

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
<script src="assets/js/adminlte.min.js"></script>


</body>
</html>
