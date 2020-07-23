

<!----change it from here---->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




<!---start admin panel---->
<div class="container">

  <a href="{{ route('brands.show') }}" style="text-decoration:none;" class="btn btn-info">Go To Brand Section</a>
  <a href="{{ route('addcaroverview') }}" style="text-decoration:none;" class="btn btn-info">Overview Add Cars Brands</a>
  <a href="{{ route('allcaroverview') }}" style="text-decoration:none;" class="btn btn-info">All cars overviews</a>
  <a href="{{ route('logout') }}" style="text-decoration:none;" class="btn btn-danger">LogOut</a>

</div>






    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
