<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---bootstrap css--->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <!---main css--->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font.css') }}" media="all" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon"  href="{{ url('images/favicon.ico') }}"/>


    <title>Car Judge - Right Place To Find Cars</title>

    <!---font---->
    <script src="{{ asset('js/all.js') }}"></script>
    <style>

    </style>
  </head>






  <body class="hold-transition lockscreen">


<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <!-- Error message -->
  @if ($errors->any())
  <div class="alert alert-danger">
  <ul>
  @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
  @endif




  <!--  message -->
       @if(session()->has('message'))
           <div class="alert alert-{{ session('type') }}">
               {{ session('message') }}
           </div>
       @endif

  <div class="lockscreen-logo">
      <a href="{{ URL::to('/') }}" class="display-3"><b>Car</b>Judge</a>
    <p>Admin Panel</p>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Musfiq Raihan</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="{{ asset('images/admin1.jpg') }}" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form action="{{ URL::to('/admin') }}" class="lockscreen-credentials" method="post">
      @csrf
      <div class="input-group">
        <input name="password" type="password" class="form-control" placeholder="password">

        <div class="input-group-append">
          <button type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="{{ route('userloginpage') }}">Or sign in as a different user</a>
  </div>

</div>
<!-- /.cente-->







<script src="{{ asset('backend')  }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

   <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('js/bs-custom-file-input.min.js') }}"></script>

  <script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend') }}/dist/js/demo.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
     </script>
     </body>
     </html>
