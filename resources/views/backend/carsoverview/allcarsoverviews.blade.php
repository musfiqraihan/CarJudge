@extends('layouts/backend/app')

@section('content')

  <div class="float-right">
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

  </div>


  <div class="container">
    <div class="row my-3">


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <a href="{{ route('addcaroverview') }}" style="text-decoration:none;" class="btn btn-info">ADD Car overviews</a>
    <a href="{{ route('dashboard') }}" class="btn btn-info">Admin Panel</a>
  <br><br><br>
  <!-- Success message -->
       @if(Session::has('success'))
           <div class="alert alert-success">
               {{Session::get('success')}}
           </div>
       @endif

      <table class="table table-responsive">

        <tr>
          <th>SL</th>
          <th>Car Brand</th>
          <th>Car Model</th>
          <th>Car Price</th>
          <th>Body Type</th>
          <th>Transmission</th>
          <th>Fuel</th>
          <th>Year</th>
          <th>Engine cc</th>
          <th>Seat no</th>
          <th>Car Image</th>
          <th>Action</th>
        </tr>

    @foreach ($boverviews as $row)
        <tr>
          <td>{{ $row->id }}</td>
          <td>{{ $row->name }}</td>
          <td>{{ $row->car_model }}</td>
          <td>{{ $row->car_price }}</td>
          <td>{{ $row->body_type }}</td>
          <td>{{ $row->transmission }}</td>
          <td>{{ $row->fuel }}</td>
          <td>{{ $row->year }}</td>
          <td>{{ $row->engine }}</td>
          <td>{{ $row->seat }}</td>
          <td><img src="{{ URL::to($row->car_image) }}" style="width:70px; height:60px;" alt=""></td>
          <td>
            <a href="{{ URL::to('/admin/brands/overview/allcars/edit/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
            <a href="" class="btn btn-sm btn-success">View</a>
            <a href="{{ URL::to('/admin/brands/overview/allcars/delete/'.$row->id) }}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>

        @endforeach

      </table>




       </div>
     </div>
  </div>

@endsection
