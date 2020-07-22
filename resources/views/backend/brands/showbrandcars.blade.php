@extends('layouts/backend/app')


@section('content')



    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ml-auto">
      <a href="{{ route('brands.add') }}" class="btn btn-danger btn-sm">ADD Brands</a>
      <a href="{{ route('dashboard') }}" class="btn btn-danger btn-sm">Got To Admin Panel</a>
      <a href="{{ route('brands.user') }}" class="btn btn-danger btn-sm">Brands User view panel</a>


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
              <th>Brand name</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
            @foreach ($brands as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td><img src="{{ URL::to($row->image) }}" style="width:70px; height:60px;"></td>
                <td>
                  <a href="{{ URL::to('/admin/brandslist/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ URL::to('/admin/brandslist/'.$row->id) }}" class="btn  btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach

          </table>




           </div>
         </div>
      </div>


@endsection
