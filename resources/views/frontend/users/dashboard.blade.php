@extends('layouts/frontend/app')

@section('content')


  <!--header image-->
  <div class="container-fluid coverpage">
    <div class="row height-max align-items-center">
      <div class="col mx-auto text-center text-place">
        <h2 class="text-capitalize display-3 text-color">Find Your Next Car</h2>
        <h2 class="text capitalize text-color">Right place to find Cars</h2>
      </div>

    </div>
  </div>




  <!---skills sction--->
  <section class="skills py-5 text-center" id=skills>
    <div class="container">
  <!---section title--->
      <div class="row mb-5">
        <div class="col d-flex flex-wrap justify-content-center">
          <h1 class="font-weight-bold text-capitalize align-self-center mx-1">why choose</h1>
          <h1 class="section-title-special mx-1">CarJudge</h1>
        </div>
      </div>
  <!---end section title--->




  <!---skill boxes--->
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                     <h5 class="card-title text-capitalize">all brands</h5>
                     <div class="skills-underline-white"></div>
                      <p class="card-text">Most of the brands that appear in this country are here. We will ensure that you can get your ideal car here.</p>
                 </div>
              </div>
          </div>



          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                     <h5 class="card-title text-info text-capitalize">compare cars</h5>
                     <div class="skills-underline-blue"></div>
                      <p class="card-text">You can easily compare cars between different cars which car is affordable or proper for you.</p>
                 </div>
              </div>
          </div>



          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                     <h5 class="card-title text-capitalize">review</h5>
                     <div class="skills-underline-white"></div>
                      <p class="card-text">Examine the reviews and choose a rated car. Company owner, car expert and also users can post a review.</p>
                 </div>
              </div>
          </div>


          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                     <h5 class="card-title text-info text-capitalize">user friendly</h5>
                     <div class="skills-underline-blue"></div>
                      <p class="card-text">Our site is much user friendly, answer some questions you will get your prefered car in a moment.</p>
                 </div>
              </div>
          </div>


        </div>
      </div>
  </section>




  </div>
    </div>

  </section>
  <!--end skills sction--->




@endsection
