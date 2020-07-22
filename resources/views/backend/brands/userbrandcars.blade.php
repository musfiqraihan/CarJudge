@extends('layouts/backend/app')


@section('content')


    <!---inventory sction--->
    <section class="inventory py-5" id="inventory">
      <div class="container">
        <!---section title--->
            <div class="row mb-5">
              <div class="col d-flex flex-wrap text-uppercase justify-content-center">
                <h1 class="font-weight-bold align-self-center mx-1">Our</h1>
                <h1 class="section-title-special mx-1">Inventory</h1>
              </div>
            </div>
        <!---end section title--->
        <div class="row mb-5">
          <div class="col-10 mx-auto col-md-12 d-flex justify-content-end">
            <button class="btn btn-outline-secondary text-sm text-capitalize mx-1" type="button" name="button">all</button>
            <button class="btn btn-outline-secondary text-sm text-capitalize mx-1" type="button" name="button">american</button>
            <button class="btn btn-outline-secondary text-sm text-capitalize mx-1" type="button" name="button">german</button>
            <button class="btn btn-outline-secondary text-sm text-capitalize mx-1" type="button" name="button">japanese</button>
            <button class="btn btn-outline-secondary text-sm text-capitalize mx-1" type="button" name="button">korean</button>
            <button class="btn btn-outline-secondary text-sm  mx-1" type="button" name="button">UK</button>
            <button class="btn btn-outline-secondary text-sm text-capitalize mx-1" type="button" name="button">french</button>
            <button class="btn btn-outline-secondary text-sm text-capitalize mx-1" type="button" name="button">indian</button>
          </div>
        </div>
    <!---brands---->
    <div class="row">
    @foreach ($brands as $row)
      <!--single brand--->
      <div class="col-sm-4 col-md-3 col-lg-1 mx-1">
        <div class="brand-list">
          <a href="#">
            <img data-placement="bottom" data-toggle="tooltip" title="{{ $row->name }}" src="{{ URL::to($row->image) }}" class="card-img-top car-img-in" alt="{{ $row->name }}">
          </a>
        </div>
      </div>
    @endforeach



      </div>
    </div>

      </div>
     </section>


     <div class="container">
       <a  href="{{ route('brands.show') }}" type="submit" class="btn btn-info btn-sm my-3">Back</a>
     </div>
    <!----end inventory sction--->


  <!--- brands part end-->







@endsection
