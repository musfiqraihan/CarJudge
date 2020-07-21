@extends('layouts/frontend/app')

@section('content')


<!--- brands part start--->


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
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">all</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">american</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">german</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">japanese</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">korean</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">uk</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">french</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1" type="button" name="button">indian</button>
        </div>
      </div>
  <!---brands---->
  <div class="row">

    
    <!--single brand--->
    <div class="col-sm-4 col-md-3 col-lg-2">
      <div class="brand-list">
        <a href="#">
          <img src="{{asset('images/brand/toyota.png')}}" class="card-img-top car-img-in" title="variable" alt="japanese">
        </a>
      </div>
    </div>





    </div>
  </div>

  </section>
  <!----end inventory sction--->







@endsection
