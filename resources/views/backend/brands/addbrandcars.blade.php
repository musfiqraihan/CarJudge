@extends('layouts/backend/app')


@section('content')


  <div class="float-right">


<br><br>
  <!-- Success message -->
       @if(Session::has('success'))
           <div class="alert alert-success">
               {{Session::get('success')}}
           </div>
       @endif
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

</div>




      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 mx-auto py-5">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ADD CAR BRAND SECTION</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Brand Name</label><small>(Maximum 15 characters) </small>
                      <input type="name" class="form-control" placeholder="Enter Brand Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Add Brand Image</label> <small>(Only .png file required maximum 1mb)</small>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg mr-2">SUBMIT</button>
                    <a href="{{ route('brands.show') }}" class="btn btn-danger btn-lg">CANCEL</a>
                  </div>
                  <!-- /.card-body -->




                </form>
              </div>
              <!-- /.card -->

        </div>
      </div>
</div>
</section>


@endsection
