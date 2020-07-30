@extends('layouts/frontend/app')

@section('content')

<section class="content">

    <div class="container">
        <div class="row">

            <div class="col-3">


                <!---adding image---->
                <div class="row py-5">
                    <div class="col-md-6">
                        <img src="{{ URL::to($singlecar->single_car_image) }}" style="height:300px;width:500px;" alt="">
                    </div>
                    <div class="col-md-5">
                        <h3>{{ $singlecar->car_model }}</h3>
                        <h4>User rating</h4>
                        <h2>৳{{ $singlecar->car_price }}</h2>
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
                                        <td style="width:50%;">Fuel Type</td>
                                        <td style="width:50%;">{{ $singlecar->fuel_type }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Engine Displacement <small>cc</small></td>
                                        <td style="width:50%;">{{ $singlecar->engine }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Body Type</td>
                                        <td style="width:50%;">{{ $singlecar->body_type }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Transmission</td>
                                        <td style="width:50%;">{{ $singlecar->transmission }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Seating Capacity</td>
                                        <td style="width:50%;">{{ $singlecar->seat }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Year</td>
                                        <td style="width:50%;">{{ $singlecar->year }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Max Power (bpm@rpm)</td>
                                        <td style="width:50%;">{{ $singlecar->max_power }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Boot Space (litres)</td>
                                        <td style="width:50%;">{{ $singlecar->boot_space }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Fuel Tank Capacity</td>
                                        <td style="width:50%;">{{ $singlecar->fuel_tank }}</td>
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
                                        <td style="width:50%;">Power Steering</td>
                                        <td style="width:50%;">{{ $singlecar->power_steering }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Power Windows Front</td>
                                        <td style="width:50%;">{{ $singlecar->power_w_f }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Power Windows Rear</td>
                                        <td style="width:50%;">{{ $singlecar->p_w_r }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Remote Trunk Opener</td>
                                        <td style="width:50%;">{{ $singlecar->rem_tank_opener }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Remote Fuel Lid Opener</td>
                                        <td style="width:50%;">{{ $singlecar->rem_fuel_lid_opener }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Low Fuel Warning Light</td>
                                        <td style="width:50%;">{{ $singlecar->l_f_w_l }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Accessory Power Outlet</td>
                                        <td style="width:50%;">{{ $singlecar->a_p_o }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Trunk light</td>
                                        <td style="width:50%;">{{ $singlecar->t_l }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Vanity Mirror</td>
                                        <td style="width:50%;">{{ $singlecar->v_m }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear Reading Lamp</td>
                                        <td style="width:50%;">{{ $singlecar->r_r_l }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear Seat Headrest</td>
                                        <td style="width:50%;">{{ $singlecar->r_s_h }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Height Adjustable Front Seat Belts</td>
                                        <td style="width:50%;">{{ $singlecar->h_a_f_s_b }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Cup Holders Front</td>
                                        <td style="width:50%;">{{ $singlecar->c_h_f }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Cup Holders Rear</td>
                                        <td style="width:50%;">{{ $singlecar->c_h_r }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear AC Vents</td>
                                        <td style="width:50%;">{{ $singlecar->r_a_v }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Multifunctional Steering Wheel</td>
                                        <td style="width:50%;">{{ $singlecar->m_f_w }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Parking Sensors</td>
                                        <td style="width:50%;">{{ $singlecar->p_s }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Engine Start Stop Button</td>
                                        <td style="width:50%;">{{ $singlecar->e_s_s_b }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Bottle Holders</td>
                                        <td style="width:50%;">{{ $singlecar->b_h }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Battery Saver</td>
                                        <td style="width:50%;">{{ $singlecar->b_s }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Lane Change Indicator</td>
                                        <td style="width:50%;">{{ $singlecar->l_c_i }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Air Conditioner</td>
                                        <td style="width:50%;">{{ $singlecar->a_c }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Heater</td>
                                        <td style="width:50%;">{{ $singlecar->heater }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Adjustable Steering</td>
                                        <td style="width:50%;">{{ $singlecar->a_s }}</td>
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
                                        <td style="width:50%;">Anti Lock Breaking System</td>
                                        <td style="width:50%;">{{ $singlecar->a_l_b_s }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Brake Assist</td>
                                        <td style="width:50%;">{{ $singlecar->b_a }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Central Locking</td>
                                        <td style="width:50%;">{{ $singlecar->central_locking }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Power Door Locks</td>
                                        <td style="width:50%;">{{ $singlecar->power_d_locks }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Child Safety Locks</td>
                                        <td style="width:50%;">{{ $singlecar->child_s_locks }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Anti Theft Alarm</td>
                                        <td style="width:50%;">{{ $singlecar->a_th_a }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">No of Airbags</td>
                                        <td style="width:50%;">{{ $singlecar->no_o_a }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Driver Airbag</td>
                                        <td style="width:50%;">{{ $singlecar->driver_air }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Passenger Airbag</td>
                                        <td style="width:50%;">{{ $singlecar->passenger_air }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Xenon Headlamps</td>
                                        <td style="width:50%;">{{ $singlecar->xenon_headlamps }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Halogen Headlamps</td>
                                        <td style="width:50%;">{{ $singlecar->halo_he }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear Seat Belts</td>
                                        <td style="width:50%;">{{ $singlecar->r_seat_be }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Seat Belt Warning</td>
                                        <td style="width:50%;">{{ $singlecar->seat_belt_w }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Door Ajar Warning</td>
                                        <td style="width:50%;">{{ $singlecar->door_ajar_w }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Adjustable Seats</td>
                                        <td style="width:50%;">{{ $singlecar->adjustable_seat }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Engine Immobilizer</td>
                                        <td style="width:50%;">{{ $singlecar->engine_immobilizer }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Crash Sensor</td>
                                        <td style="width:50%;">{{ $singlecar->crash_sensor }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Centrlly Mounted Fuel Tank</td>
                                        <td style="width:50%;">{{ $singlecar->c_mounted_f_t }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear Camera</td>
                                        <td style="width:50%;">{{ $singlecar->rear_camera }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Anti Theft Device</td>
                                        <td style="width:50%;">{{ $singlecar->a_theft_d }}</td>
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
                                        <td style="width:50%;">Cd Player</td>
                                        <td style="width:50%;">{{ $singlecar->cd_player }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Dvd Player</td>
                                        <td style="width:50%;">{{ $singlecar->dvd_player }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Radio</td>
                                        <td style="width:50%;">{{ $singlecar->radio }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Audio System Remote Control</td>
                                        <td style="width:50%;">{{ $singlecar->audio_system_remote }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Speaker Front</td>
                                        <td style="width:50%;">{{ $singlecar->speaker_front }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Speaker Rear</td>
                                        <td style="width:50%;">{{ $singlecar->speaker_rear }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">USB and Auxilary Input</td>
                                        <td style="width:50%;">{{ $singlecar->u_a_a_i }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Bluetooth Connectivity</td>
                                        <td style="width:50%;">{{ $singlecar->bl_c }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Touch Screen</td>
                                        <td style="width:50%;">{{ $singlecar->touch_s }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Number Of Speaker</td>
                                        <td style="width:50%;">{{ $singlecar->n_speaker }}</td>
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
                                        <td style="width:50%;">Techometer</td>
                                        <td style="width:50%;">{{ $singlecar->tachometer }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Electronic Multi Tripmeter</td>
                                        <td style="width:50%;">{{ $singlecar->el_m_te }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Leather Seats</td>
                                        <td style="width:50%;">{{ $singlecar->lether_seat }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Leather Steering Wheel</td>
                                        <td style="width:50%;">{{ $singlecar->l_steering_w }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Glove Compartment</td>
                                        <td style="width:50%;">{{ $singlecar->g_compart }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Digital Clock</td>
                                        <td style="width:50%;">{{ $singlecar->digital_clock }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Cigarate Lighter</td>
                                        <td style="width:50%;">{{ $singlecar->cigarate_lighter }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Digital Odometer</td>
                                        <td style="width:50%;">{{ $singlecar->disi_odomet }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Height Adjustable Driver Seat</td>
                                        <td style="width:50%;">{{ $singlecar->h_a_d_seat }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Ventilated Seats</td>
                                        <td style="width:50%;">{{ $singlecar->ventilated_seat }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Dual Tone Dashboard</td>
                                        <td style="width:50%;">{{ $singlecar->dual_tone }}</td>
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
                                        <td style="width:50%;">Fuel Type</td>
                                        <td style="width:50%;">{{ $singlecar->fuel_ty }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Mileage <small>(city)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->mileage_c }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Mileage <small>(arai)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->mileage_a }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Fuel Tank capacity <small>(litres)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->f_t_capacity }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Top Speed <small>(kmph)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->top_sp }}</td>
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
                                        <td style="width:50%;">Engine Type</td>
                                        <td style="width:50%;">{{ $singlecar->engine_type }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Engine Displacement <small>(cc)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->engine_dis }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Max Power <small>(bhp@rpm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->max_powe }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Max Torque <small>(nm@rpm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->max_torque }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">No of Cylinder</td>
                                        <td style="width:50%;">{{ $singlecar->no_of_cy }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Valves Per Cylinder</td>
                                        <td style="width:50%;">{{ $singlecar->va_of_cy }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Valve Configuration</td>
                                        <td style="width:50%;">{{ $singlecar->va_conf }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Fuel Supply System</td>
                                        <td style="width:50%;">{{ $singlecar->fuel_s_sys }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Turbo Charger</td>
                                        <td style="width:50%;">{{ $singlecar->turbo_ch }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Super Charger</td>
                                        <td style="width:50%;">{{ $singlecar->super_ch }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Transmission Type</td>
                                        <td style="width:50%;">{{ $singlecar->trans_ty }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Gear Box</td>
                                        <td style="width:50%;">{{ $singlecar->gear_b }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Drive Type</td>
                                        <td style="width:50%;">{{ $singlecar->drive_type }}</td>
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
                                        <td style="width:50%;">Lenght <small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->lenght }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Width <small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->width }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Height <small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->height }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Ground Clearance Unladen <small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->g_clear }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Wheel Base <small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->wheel_base }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Front Tread <small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->front_tread }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear Tread <small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->rear_tread }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Kerb Weight <small>(kg)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->kerb_weight }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Gross Weight<small>(mm)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->gross_weight }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Seating Capacity</td>
                                        <td style="width:50%;">{{ $singlecar->seating_no }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Boot Space <small>(litres)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->bootspace_li }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">No. Of Doors</td>
                                        <td style="width:50%;">{{ $singlecar->doors_no }}</td>
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
                                        <td style="width:50%;">Front Suspension</td>
                                        <td style="width:50%;">{{ $singlecar->front_sus }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear Suspension</td>
                                        <td style="width:50%;">{{ $singlecar->rear_sus }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Steering Type</td>
                                        <td style="width:50%;">{{ $singlecar->steering_type }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Steering Gear Type</td>
                                        <td style="width:50%;">{{ $singlecar->steering_gear_type }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Turning Radius <small>(metres)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->turning_r }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Front Brake Type</td>
                                        <td style="width:50%;">{{ $singlecar->front_brake }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Rear Break Type</td>
                                        <td style="width:50%;">{{ $singlecar->rear_brake }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Top Speed <small>(kmph)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->top_speed }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;">Acceleration <small>(seconds)</small> </td>
                                        <td style="width:50%;">{{ $singlecar->acceleration_t }}</td>
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
