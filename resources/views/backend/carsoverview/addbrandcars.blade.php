@extends('layouts/backend/app')

@section('content')


  <div class="float-right">
    <a href="{{ route('brands.add') }}" style="text-decoration:none;" class="btn btn-primary">Add Brand</a>
    <a href="{{ route('dashboard') }}" class="btn btn-info">Admin Panel</a>

  </div>
  <br><br><br>

  <form action="{{ route('caroverviewstore') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">ADD cars overview info.</h3>
                </div>
      <div class="card-body">
            <div class="row">
                    <div class="col-md-8">


                      <div class="row">

                        <div class="col-md-4 mr-3 my-2">
                          <div class="floating-label-form-group">
                      <label>Choose Car Brand</label>
                      <br>
                      <select class="form-control text-size" name="brands_id">
                        <option>Select</option>
                        @foreach ($brands as $row)
                          <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                        </select>
                    </div>
                        </div>
                        <div class="col-md-4 my-2">
                          <div class="floating-label-form-group">
                            <label>Car Model</label> <small>(must be unique)</small>
                      <br>
                        <input type="text" value="{{ old('car_model') }}" class="form-control text-size" name="car_model">
                    </div>
                          </div>
                      </div>




                            <div class="row">
                               <div class="col-md-4 ml-1 mr-3 my-2">
                                 <div class="floating-label-form-group">
                                   <label>Car Price</label> <small>(5-8 figure)</small>
                                   <br>
                                     <input type="text" class="form-control text-size" value="{{ old('car_price') }}" name="car_price">
                                 </div>
                                    </div>

                              <div class="col-md-4 my-2">
                                <div class="floating-label-form-group">
                                  <label>Body Type</label>
                                      <br>
                                        <input type="text" class="form-control text-size" value="{{ old('body_type') }}" name="body_type">
                                    </div>
                                   </div>
                            </div>

                            <div class="row">
                               <div class="col-md-4 ml-1 mr-3 my-2">
                                 <div class="floating-label-form-group">
                                   <label>Transmission</label>
                                      <br>
                                        <input type="text" class="form-control text-size" value="{{ old('transmission') }}" name="transmission">
                                    </div>
                                    </div>

                              <div class="col-md-4 my-2">
                                <div class="floating-label-form-group">
                                  <label>Fuel</label>
                                      <br>
                                        <input type="text" class="form-control text-size" value="{{ old('fuel') }}" name="fuel">
                                    </div>
                                   </div>
                            </div>

                            <div class="row">
                               <div class="col-md-4 ml-1 mr-3 my-2">
                                 <div class="floating-label-form-group">
                                   <label>Year</label>
                                      <br>
                                        <input type="text" class="form-control text-size" value="{{ old('year') }}" name="year">
                                    </div>
                                    </div>
                              <div class="col-md-4 my-2">
                                <div class="floating-label-form-group">
                                  <label>Engine cc</label>
                                      <br>
                                        <input type="text" class="form-control text-size" value="{{ old('engine') }}" name="engine">
                                    </div>
                                   </div>
                            </div>

                            <div class="row">
                               <div class="col-md-4 ml-1 mr-3 my-2">
                                 <div class="floating-label-form-group">
                                   <label>Seat no</label>
                                    <br>
                                      <input type="text" class="form-control text-size" value="{{ old('seat') }}" name="seat">
                                  </div>
                                    </div>
                              <div class="col-md-4" style="margin-top:8px;">
                                <div class="floating-label-form-group">
                                <label>Car Image</label>
                                      <br>
                                <input type="file" class="form-control" name="car_image">
                                        </div>

                                   </div>
                            </div>



                    <div class="row">
                      <div class="col-md-8 pt-3 ml-auto">
                            <button type="submit" class="btn btn-success btn-lg mr-3">SUBMIT</button>
                            <a  href="{{ route('dashboard') }}" class="btn btn-danger btn-lg">CANCEL</a>
                      </div>
                    </div>





          </form>

     </div>

                    <div class="col-md-3">
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


   </div>


</div>





@endsection
