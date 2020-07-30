@extends('layouts/frontend/app')
@section('content')



<!--header image-->
<div class="container-fluid coverpage">
    <div class="row height-max align-items-center">
        <!---start search--->
        <div class="container-fluid">
            <div class="modal-dialog modal-lg" style="opacity:0.9;">
                <div class="modal-content bg-light">

                    <div class="modal-body">
                          <form action="{{ url('/car/search') }}" method="get">

                             <div class="row">

                                        <div class="col-md-4">
                                            <div class="floating-label-form-group">
                                                <label>Choose Brand</label>
                                                <br>
                                                <select class="form-control text-size" name="brands_id">
                                                    <option valuedisabled="disabled">Select</option>
                                                    @foreach ($brands as $row)
                                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="floating-label-form-group">
                                                <label>Choose Car Model</label>
                                                <br>
                                                <select class="form-control text-size" name="carsearch">
                                                    <option valuedisabled="disabled">Select</option>
                                                    @foreach ($singlecar as $row)
                                                    <option value="{{ $row->id }}">{{ $row->car_model }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="floating-label-form-group">
                                                <label>Choose Year</label>
                                                <br>
                                                <select class="form-control text-size" name="carsearch">
                                                    <option valuedisabled="disabled">Select</option>
                                                    @foreach ($singlecar as $row)
                                                    <option>{{ $row->year }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                             </div>







                     <br>
                        <div class="row">
                            <div class="col-md-7">

                                <label>Price</label>
                                <div class="d-flex justify-content-left">
                                  <p class="font-weight-bold text-black mr-2">50000</p>
                                    <div class="w-75">
                                        <input type="range" class="custom-range" id="customRange11" min="50000" max="30000000">
                                    </div>
                                    <p class="font-weight-bold text-black ml-2 valueSpan2"></p>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function() {

                                        const $valueSpan = $('.valueSpan2');
                                        const $value = $('#customRange11');
                                        $valueSpan.html($value.val());
                                        $value.on('input change', () => {

                                            $valueSpan.html($value.val());
                                        });
                                    });
                                </script>



                            </div>
                            <div class="col-md-2 justify-content-left" style="margin-top:15px;">
                                <button type="submit" class="btn btn-success" style="padding:8px 30px;font-size:20px;">Search</button>
                            </div>

                            <div class="col-md-3" style="margin-top:10px;">

                              <small>Not found yet then go for</small>
                              <span class="adv-search"><a href="#">Advance Search?</a></span>

                        </div>




                        </form>
                    </div>
                </div>
            </div>
            <!---end search-->

            <h2 class="text-capitalize text-center display-3">Find Your Next Car</h2>
            <h2 class="text capitalize text-center">Right place to find Cars</h2>

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
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class=" text-capitalize">all brands</h5>

                        <p class="card-text">Most of the brands that appear in this country are here. We will ensure that you can get your ideal car here.</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="text-info text-capitalize">compare cars</h5>
                        <p class="card-text">You can easily compare cars between different cars which car is affordable or proper for you.</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="text-capitalize">review</h5>

                        <p class="card-text">Examine the reviews and choose a rated car. Company owner, car expert and also users can post a review.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="text-info text-capitalize">user friendly</h5>

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







<!---question sction--->
<div class="section question py-5" id="question">
    <div class="container">
        <div class="row">
            <!---single question first--->
            <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-grey p-4">
                <!---first flexbox child--->
                <a href="" class="question-icon mr-3">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!---second flexbox child---->
                <div class="question-text w-75">
                    <h4 class="question-title text-capitalize font-weight-bold">
                        are you looking for a car?
                    </h4>
                    <p class="question-info">Answer some questions as data for suggesting the best option for your prefered car.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!---end question sction--->







<!--- featured part start--->

<!---featured sction--->
<section class="feature py-5" id="inventory">
    <div class="container">
        <!---section title--->
        <div class="row mb-5">
            <div class="col d-flex flex-wrap text-uppercase justify-content-center">
                <h1 class="font-weight-bold align-self-center mx-1">Featured</h1>
                <h1 class="section-title-special mx-1">Cars</h1>
            </div>
        </div>
        <!---end section title--->
        <div class="row mb-5">
            <div class="col-10 mx-auto col-md-12 d-flex justify-content-center">
                <button class="btn btn-outline-secondary text-uppercase mx-2 btn-sm" type="button" name="button">Popular cars</button>
                <button class="btn btn-outline-secondary text-uppercase mx-2 btn-sm" type="button" name="button">Recently launched</button>
                <button class="btn btn-outline-secondary text-uppercase mx-2 btn-sm" type="button" name="button">upcoming cars</button>
            </div>
        </div>
        <!---cars---->
        <div class="row">

            @foreach ($singlecar as $row)

            <!--single car--->
            <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
                <div class="card car-card">
                    <img src="{{ URL::to($row->single_car_image) }}" style="height:200px;" class="card-img-top car-img" alt="">
                    <!--card body-->
                    <div class="card-body">
                        <div class="car-info d-flex justify-content-between">
                            <!---first flex child--->
                            <div class="car-text text-uppercase">
                                <h6 class="font-weight-bold">{{ $row->name }}</h6>
                                <a href="{{ url('/brands/cardetails/'.$row->id) }}" style="text-decoration:none;">{{ $row->car_model }}</a>
                            </div>
                            <!---second flex child---->
                            <h5 class="car-value align-self-centr py-2 px-3">
                                <span class="car-price">৳{{ $row->car_price }}</span>
                            </h5>
                        </div>
                    </div>
                    <!---end of card--->
                    <div class="card-footer text-capitalize justify-content-between">
                        <table class="table">
                            <tr>
                                <td><span><i class="fas fa-car"></i></span><br>{{ $row->body_type }}</td>
                                <td><span><i class="fas fa-cogs"></i></span><br>{{ $row->transmission }}</td>
                                <td><span><i class="fas fa-gas-pump"></i></span><br>{{ $row->fuel_type }}</td>
                            </tr>
                            <tr>
                                <td><span><i class="fas fa-check"></i>&nbsp;</span>{{ $row->year }}</td>
                                <td><span><i class="fas fa-tachometer-alt"></i>&nbsp;</span>{{ $row->engine }}</td>
                                <td><img src="{{ asset('images/car-seat.jpg')}}" alt="car-seat"> <span>&nbsp;</span> {{ $row->seat }}</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
            <!--end single car--->

            @endforeach

        </div>
    </div>
</section>

<!--- featured part end-->







<!---Email subscribe-->



<div class="section email-image py-5">
    <div class="container ">

        <form action="{{ url('/home/subscribe') }}" method="post">
          @csrf
            <div class="form-row align-items-center">
                <!--single question first--->
                <div class="col-sm-3 my-5 mr-4 ml-4">

                    <label class="sr-only" for="inlineFormInput">Name</label>
                    <input type="text" class="form-control mb-2" id="inlineFormInput" name="name" placeholder="Enter name">
                </div>

                <div class="col-sm-3 my-5">
                    <label class="sr-only" for="inlineFormInput">Email</label>
                    <input type="email" class="form-control mb-2" id="inlineFormInput" name="email" placeholder="Enter mail">
                </div>

                <div class="col-auto my-5 mr-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                            Send me further info
                        </label>
                    </div>
                </div>
                <div class="col-auto my-5 ml-4">
                    <button type="submit" class="btn btn-success email-button">SUBSCRIBE!</button>
                </div>
            </div>

        </form>
    </div>
</div>


<!---end Email subscribe--->
@endsection
