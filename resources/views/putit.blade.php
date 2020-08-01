<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font.css') }}" media="all" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />

    <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <title>Car Judge - Right Place To Find Cars</title>

    <script src="{{ asset('js/app.js') }}"></script>
    <!---font---->
    <script src="{{ asset('js/all.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini">



    <!---nav element---->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm sticky" style="background:#E3F2FD;">
        <div class="container">
            <img style="height:40px;weight:40px;" src="{{ URL::to('images/logo.png') }}">
            <a class="navbar-brand ml-2" href="{{ url('/') }}">CarJudge</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('brand_page') }}">brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('compare_page') }}">compare</a>
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
                <a href="{{ route('userloginpage') }}" class="nav-icon" title="login">
                    <i class="far fa-user-circle"></i></a>
                <span class="bar"> | </span>
                <a href="http://www.facebook.com" target="_blank" class="nav-icon">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="http://www.twitter.com" target="_blank" class="nav-icon">
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

                <a href="http://www.twitter.com" target="_blank" class="nav-icon">
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
                        <a href="#">About</a>
                    </p>
                    <p class="text-footer">
                        <a href="">Contact</a>
                    </p>
                    <p class="text-footer">
                        <a href="">Site Map</a>
                    </p>
                    <p class="text-footer">
                        <a href="#">Loan Calculator</a>
                    </p>
                    <p class="text-footer">
                        <a href="#">Fraud Awareness</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">

                    <!-- Links -->
                    <h6 class="text-capitalize font-weight-bold">Buying & Selling</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="text-footer">
                        <a href="#">Find a Car</a>
                    </p>
                    <p class="text-footer">
                        <a href="#">Sell Your Car</a>
                    </p>
                    <p class="text-footer">
                        <a href="#">Car Dealers</a>
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





    <!-- jQuery -->
    <script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="{{asset('backend')}}/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{asset('backend')}}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="{{asset('backend')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('backend')}}/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="{{asset('backend')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="{{asset('backend')}}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('backend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="{{asset('backend')}}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend')}}/dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: 'MM/DD/YYYY hh:mm A'
          }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
          {
            ranges   : {
              'Today'       : [moment(), moment()],
              'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month'  : [moment().startOf('month'), moment().endOf('month')],
              'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
          },
          function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
          }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
          format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
          $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
          $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

      })
    </script>
    </body>
    </html>
