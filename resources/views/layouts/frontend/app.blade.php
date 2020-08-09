<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="all" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" media="all" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="all" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-fixed.css') }}" media="all" />
   <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font.css') }}" media="all" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('images/favicon.ico') }}"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}" media="all" />
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
   <!-- Latest compiled and minified JavaScript -->
   <!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" defer ></script>
 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js" defer ></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />



   <title>Car Judge - Right Place To Find Cars</title>

   <script src="{{ asset('js/app.js') }}"></script>
   <!---font---->
   <script src="{{ asset('js/all.js') }}"></script>

</style>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js”></script>



 </head>

 <body>


   <a id="button"></a>


   <!---preloader---->
       <div class="preloader d-flex justify-content-center align-items-center">
       <img src="{{asset('images/Gear.gif')}}" alt="preloader">
       </div>
       <!---end preloader--->




       <!---nav element---->
       <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top" style="opacity:0.9">
         <div class="container">
         <img style="height:40px;weight:40px;" src="{{ URL::to('images/logo.png') }}">
         <a class="navbar-brand ml-2"  href="{{ url('/') }}">CarJudge</a>
       <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"  aria-expanded="false" >
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

         <ul class="nav navbar-nav mx-auto">
           <li class="nav-item">
             <a class="nav-link text-capitalize" href="{{ route('brand_page') }}">brands</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-capitalize" href="{{ route('column-searching.index') }}">compare</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-capitalize" href="{{ route('service_page') }}">Service</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-capitalize" href="{{ route('review_page') }}">reviews</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-capitalize" href="{{ route('contact_page') }}">contact</a>
           </li>
         </ul>
       </div>

       <!--social icons-->
<div class="nav-icons d-none d-lg-block">

<!---user icon--->
        @guest()
       <a href="{{ route('userloginpage') }}" class="nav-icon"  title="login">
         <i class="far fa-user-circle"></i></a>
         <span class="bar"> | </span>
         <a href="http://www.facebook.com" target="_blank" class="nav-icon">
           <i class="fab fa-facebook"></i>
         </a>

         <a href="http://www.twitter.com"  target="_blank" class="nav-icon">
           <i class="fab fa-twitter"></i>
         </a>

         <a href="http://www.instagram.com" target="_blank" class="nav-icon">
           <i class="fab fa-instagram"></i>
         </a>

       @endguest
       @auth()
         <a href="" class="nav-icon">
          <i class="fas fa-user-circle"></i></a>
          <a href="http://www.facebook.com" target="_blank" class="nav-icon">
            <i class="fab fa-facebook"></i>
          </a>

          <a href="http://www.twitter.com"  target="_blank" class="nav-icon">
            <i class="fab fa-twitter"></i>
          </a>

          <a href="http://www.instagram.com" target="_blank" class="nav-icon">
            <i class="fab fa-instagram"></i>
          </a>
         <span class="bar"> | </span>
      <a class="btn btn-sm btn-danger" href="{{ url('/logout') }}">Logout</a>

       @endauth







   </div>

 </div>
 <!---check user login or not--->



</nav>

<!--- end nav element---->
<!---for bottom to top ---->






@yield('content')





<!-- Footer -->
<footer class="page-footer font-small">

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="font-weight-bold">CarJude</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="text-footer">
          <a  href="#">About</a>
        </p>
        <p class="text-footer">
          <a  href="">Contact</a>
        </p>
        <p class="text-footer">
          <a  href="">Site Map</a>
        </p>
        <p class="text-footer">
          <a  href="#">Loan Calculator</a>
        </p>
        <p class="text-footer">
          <a  href="#">Fraud Awareness</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mb-4">

        <!-- Links -->
        <h6 class="text-capitalize font-weight-bold">Buying & Selling</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="text-footer">
          <a  href="#">Find a Car</a>
        </p>
        <p class="text-footer">
          <a  href="#">Sell Your Car</a>
        </p>
        <p class="text-footer">
          <a  href="#">Car Dealers</a>
        </p>
        <p class="text-footer">
          <a href="#">Compare Car Prices</a>
        </p>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="col-md-6 col-lg-6 col-xl-6 mb-4 mt-5 text-center">
          <img class=" footer-image-box image-fluid" src="{{asset('images/carfooter.png')}}" alt="footer image">
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
<div class="footer">
  <div class="footer-icons d-flex justify-content-around">
    <a href="" class="footer-icon">
      <i class="fab fa-facebook"></i>
    </a>
    <a href="" class="footer-icon">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="" class="footer-icon">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="" class="footer-icon">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="" class="footer-icon">
      <i class="fab fa-google-plus"></i>
    </a>
  </div>
</div>
  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright
    <a href="index.html"> CarJudge</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>


      <!---jquery---->
      <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <!----script js---->
      <script src="{{ asset('js/script.js') }}"></script>
      <!----bootstrap js---->
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

      <script src="{{asset('backend')}}/dist/js/adminlte.js"></script>




      <script src="{{ asset('js/select2.full.min') }}"></script>


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
  @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type) {
        case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;
        case 'success':
             toastr.success("{{ Session::get('message') }}");
             break;
        case 'warning':
             toastr.warning("{{ Session::get('message') }}");
             break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
             break;
      }
      @endif
</script>




        </body>
      </html>
