@extends('layouts/frontend/app')

@section('content')


<!---- services part start--->
<div id="services">

   <section class="service py-5" id="service">
    <div class="container">
      <!---section title--->
          <div class="row mb-5">
            <div class="col d-flex flex-wrap text-capitalize justify-content-center">
              <h1 class="font-weight-bold align-self-center mx-1">Car Judge</h1>
              <h1 class="section-title-special mx-1">Services</h1>
            </div>
          </div>

<!----heading part--->


    <div class="row">

            <!---first content--->
            <div class="col-sm-12 col-lg-4 my-3">

              <!---heading--->
                <h6 class="font-weight-bold mx-2 my-4">OUR SERVICES INCLUDE</h6>
              <ul class="car-service-content">

                <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;General Automotive Repair</li>
                <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Preventative Car Maintenance</li>
                <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Synthetic Motor Oil Replacement</li>
                <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Cooling System and Radiator Repair</li>
                <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Air Conditioning and Heater Service</li>
              </ul>
          </div>
          <!---end first content--->
          <!---start second content--->
        <div class="car-service-content col-sm-12 col-lg-4">
          <br><br><br>
          <ul class="car-service-content">
            <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Transmission Services</li>
            <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Oil Filter Replacement</li>
            <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Brake Repair</li>
            <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Engine Diagnostic</li>
            <li><i class="fas fa-check-circle service-font-color"></i>&nbsp;Belts, Hoses, Fluids</li>
          </ul>
        </div>
          <!---end second content--->

<!---image content--->
      <div class="col-sm-12 col-lg-4 my-3 text-center">
        <img class="car-service-image" src="{{ asset('images/service.jpg')}}" alt="service center">
      </div>
<!---end image content--->

    </div>
<!----end heading part--->

<!---midlle service part--->
<div class="row">
 <div class="col-10 mx-auto my-5 col-md-6 col-lg-4">
   <div class="card service-car-card">
    <a href="{{ URL::to('/contacts') }}"><i class="fas fa-cogs font-size"></i><h6 class="font-weight-bold text-uppercase">vehicle repair</h6></a>


  </div>
</div>

<div class="col-10 mx-auto my-5 col-md-6 col-lg-4">
  <div class="card service-car-card">
    <a href="{{ URL::to('/contacts') }}"><i class="fas fa-car-battery font-size"></i><h6 class="font-weight-bold text-uppercase">battery Replacement</h6></a>


  </div>
</div>

<div class="col-10 mx-auto my-5 col-md-6 col-lg-4">
  <div class="card service-car-card">
    <a href="{{ URL::to('/contacts') }}"><i class="fas fa-car-crash font-size"></i><h6 class="font-weight-bold text-uppercase">roadside assistance</h6></a>


   </div>
 </div>

</div>
<!---end midlle service part--->


   </div>
 </section>
</div>
<!---- services part end-->



@endsection
