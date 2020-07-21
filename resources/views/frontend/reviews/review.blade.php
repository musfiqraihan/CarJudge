@extends('layouts/frontend/app')

@section('content')

{{--- review heading--}}
<div class="container py-4">
  <div class="row">
    <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 mr-auto">
      <h1>Write a Review for a 2021 BMW 750</h1>
      <h6>Your review could help car shoppers who are looking for the right car. </h6>
      <br><br>
      <hr class=ghap-review>
      <br>
      <form class="" action="" method="post">
        <div class="form-group">
    <label for="exampleFormControlSelect1">Type of Review</label>
    <br>
    <select class="form-control text-size">
      <option>Chose One</option>
      <option>After examination drove</option>
      <option>I currently purchase it</option>
      <option>I still enjoy this car</option>
     </select>
     <small>Reviews can be from current or previous owners and test drives</small>
  </div>

      </form>

{{--overall rating---}}
<div class="rating-overall">
  <p class="rating-head">Overall</p>



{{--rating starts part--}}



{{--rating end part--}}



</div>

<hr class=ghap-review>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="rating-comfort">
      <p class="rating-head">Comfort</p>
    </div>

  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <div class="rating-interior">
    <p class="rating-head">Interior Design</p>
  </div>
</div>
</div>


<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="rating-performance">
      <p class="rating-head">Performance</p>
    </div>
  </div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <div class="rating-money">
    <p class="rating-head">Value for the Money</p>
  </div>
</div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="rating-styling">
      <p class="rating-head">Exterior Styling</p>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="rating-reliability">
      <p class="rating-head">Reliability</p>
    </div>
  </div>
</div>


<hr class=ghap-review>


{{--heading and text part---}}
<div class="row">

<form class="" method="post">
{{--submiting area--}}
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-auto py-3">
    <label>Heading</label> <small>(From 5 to 50 characters)</small>
      <input type="name" class="form-control text-size"  placeholder="Exp:'This is most reliable car to me.'">
  </div>


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-auto py-3">
    <label>What do you think of this vehicle?</label> <small>(25 word minimum)</small>
        <textarea name="message" id="message" rows="3" class="form-control text-size" placeholder="Exp:The ride is great compared to others cars."></textarea>
  </div>

</form>
</div>

<hr class=ghap-review>


<div class="row">

<form class="" method="post">
{{--submiting area--}}
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-auto py-3">
    <label>Screen Name</label>
      <input type="name" class="form-control text-size"  placeholder="Exp:'KamalAZ';'AbirSh'..">
      <small>This shows the review has an author.</small>
  </div>


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-auto py-3">
    <label>City,State</label>
      <input type="text" class="form-control text-size" placeholder="Exp:'Dhaka';'Gazipur'..">
      <small>Know where you run the car perspective.</small>
  </div>


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3" >
    <label>Email</label>
      <input type="email" class="form-control text-size">
      <small>Your email will NOT appear in the review.</small>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3" >
        <input type="submit" value="Sumbit Your Review" name="send" class="btn btn-primary">
        <small>We will save your valuable review</small>
      </div>


</div>

    </form>

</div>
    </div>

  </div>





@endsection
