@extends('layouts/backend/app')


@section('content')






<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-12">


<!---adding image---->
<div class="row py-5">
  <div class="col-md-5">
    <img src="{{ asset('images/toyota_noah.jpg') }}" style="height:300px;width:400px;" alt="">
  </div>
  <div class="col-md-4">
          <h3>Car Model Name</h3>
          <h4>User rating</h4>
          <h2>৳{{04455425}}</h2>
          <button type="button" class="btn btn-success btn-lg" name="button">Post Review</button>
  </div>
</div>









                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">OVERVIEW</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">

                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Car Brand</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Car Model</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Fuel Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Engine Displacement <small>cc</small></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Car Price <small>(5-8 figure)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Body Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Transmission</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Seating Capacity</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Year</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Max Power (bpm@rpm)</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Boot Space (litres)</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Fuel Tank Capacity</td>
                                        <td></td>
                                    </tr>

                                </tbody>



                            </table>
                        </div>

                    </div>





                </div>



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">COMFORT & CONVENIENCE</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Power Steering</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Power Windows Front</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Power Windows Rear</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Remote Trunk Opener</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Remote Fuel Lid Opener</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Low Fuel Warning Light</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Accessory Power Outlet</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Trunk light</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Vanity Mirror</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear Reading Lamp</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear Seat Headrest</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Height Adjustable Front Seat Belts</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cup Holders Front</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cup Holders Rear</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear AC Vents</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Multifunctional Steering Wheel</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Parking Sensors</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Engine Start Stop Button</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bottle Holders</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Battery Saver</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Lane Change Indicator</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Heater</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Adjustable Steering</td>
                                        <td></td>
                                    </tr>


                                </tbody>



                            </table>
                        </div>

                    </div>



                </div>



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">SAFETY</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Anti Lock Breaking System</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Brake Assist</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Central Locking</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Power Door Locks</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Child Safety Locks</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Anti Theft Alarm</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>No of Airbags</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Driver Airbag</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Passenger Airbag</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Xenon Headlamps</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Halogen Headlamps</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear Seat Belts</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Seat Belt Warning</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Door Ajar Warning</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Adjustable Seats</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Engine Immobilizer</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Crash Sensor</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Centrlly Mounted Fuel Tank</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear Camera</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Anti Theft Device</td>
                                        <td></td>
                                    </tr>

                                </tbody>



                            </table>
                        </div>

                    </div>
                </div>



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ENTERTAINMENT & COMMUNICATION</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Cd Player</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Dvd Player</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Radio</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Audio System Remote Control</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Speaker Front</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Speaker Rear</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>USB and Auxilary Input</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bluetooth Connectivity</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Touch Screen</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Number Of Speaker</td>
                                        <td></td>
                                    </tr>

                                </tbody>



                            </table>
                        </div>

                    </div>

                </div>


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">INTERIOR</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Techometer</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Electronic Multi Tripmeter</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leather Seats</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leather Steering Wheel</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Glove Compartment</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Digital Clock</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cigarate Lighter</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Digital Odometer</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Height Adjustable Driver Seat</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Ventilated Seats</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Dual Tone Dashboard</td>
                                        <td></td>
                                    </tr>
                                </tbody>



                            </table>
                        </div>

                    </div>
                </div>




                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">FUEL & PERFORMANCE</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Fuel Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Mileage <small>(city)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Mileage <small>(arai)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Fuel Tank capacity <small>(litres)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Top Speed <small>(kmph)</small> </td>
                                        <td></td>
                                    </tr>

                                </tbody>



                            </table>
                        </div>

                    </div>

                </div>



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ENGINE & TRANSMISSION</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Engine Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Engine Displacement <small>(cc)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Max Power <small>(bhp@rpm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Max Torque <small>(nm@rpm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>No of Cylinder</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Valves Per Cylinder</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Valve Configuration</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Fuel Supply System</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Turbo Charger</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Super Charger</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Transmission Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Gear Box</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Drive Type</td>
                                        <td></td>
                                    </tr>

                                </tbody>



                            </table>
                        </div>

                    </div>
                </div>




                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DIMENTION & CAPACITY</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Lenght <small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Width <small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Height <small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Ground Clearance Unladen <small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Wheel Base <small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Front Tread <small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear Tread <small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Kerb Weight <small>(kg)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Gross Weight<small>(mm)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Seating Capacity</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Boot Space <small>(litres)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>No. Of Doors</td>
                                        <td></td>
                                    </tr>

                                </tbody>



                            </table>
                        </div>

                    </div>

                </div>



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">SUSPENSION, STEERING & BRAKES</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">


                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td>Front Suspension</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear Suspension</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Steering Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Steering Gear Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Turning Radius <small>(metres)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Front Brake Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rear Break Type</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Top Speed <small>(kmph)</small> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Acceleration <small>(seconds)</small> </td>
                                        <td></td>
                                    </tr>

                                </tbody>



                            </table>
                        </div>

                    </div>



                </div>






            </div>
        </div>
    </div>
</section>






@endsection
