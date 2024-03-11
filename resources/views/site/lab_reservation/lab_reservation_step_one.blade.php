<?php
$currencies = [
    1 => 'usd',
    2 => 'euro',
    3 => 'rmb',
]
?>
@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/lab-reservation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick_style.css') }}">
@endsection
@section('content')

    <div id="lab_reservation">
        <section class="home">
            <div class="lab_second_menu">
                <div class="second_menu">
                    @include('partials.sign_in_log_out')
                </div>
                <ul class="labs_steps">
                    <li><a href="#"> Promo Code</a></li>
                    <li><a href="#"> Special Offers</a></li>
                    <li><a href="#"> Cancel Reservation</a></li>
                </ul>
                <div class="check_availability">
                    <div class="rates active">
                        <h2>Check availability and rates</h2>
                        <div class="rate_line"><span>1</span></div>
                    </div>
                    <div class="rates">
                        <div class="rate_line"><span>2</span></div>
                    </div>
                    <div class="rates">
                        <div class="rate_line"><span>3</span></div>
                    </div>
                </div>
            </div>
            <div class="booking_area">

                <div class="select_your_booking m-l_0">
                    <h2>Select your booking dates and address</h2>
                    <p>Please select a departure date as the day<br/>
                        after your testing ends</p>
                </div>
                <div class="select_your_booking">
                    <h2>Select your lab</h2>
                    <p>Click on lab type to view the lab description,<br/>
                        availability and rates</p>
                </div>
                <div class="select_your_booking">
                    <h2>Booking Summary</h2>
                    <p>You can see here your<br/>
                        booking summary</p>
                </div>

            </div>
            <div class="choose_area">
                <div class="choose_box">
                    <h2>Choose the location</h2>
                    <!-- <select id="step-one-select-country" class="research angle-down filter_category" name="country">
                        <option value="" selected disabled hidden>Choose the country</option>
                        <option value="lab_type-usa">USA</option>
                        <option value="lab_type-canada">Canada</option>
                        <option value="lab_type-germany">Germany</option>
                        <option value="lab_type-china" selected>China</option>
                    </select> -->
                    <select id="step-one-select-country" class="research angle-down filter_category" name="country">
                        @foreach($country as $key=>$cty)
                        <option class="option_lab_type" value="lab_type-{{str_replace(' ', '', $cty->country)}}">{{$cty->country}}</option>
                        @endforeach
                    </select>
                    <h2>Select your booking dates</h2>

                    <!-- Data Picer -->

                    <input type="text" id="datepicker"/>

                    <select class="research research_time angle-down" id="full-and-part_select">
                        <option value="1">8 AM to 5 PM,</option>
                        <option value="2">8 AM to 12:30 PM</option>
                        <option value="3">12:30 PM to 5 PM</option>
                    </select>
                    <input type="hidden" id="daysCount" name="daysCount" value="0"/>
                    <h2 class="calend_m">Select your booking dates</h2>
                </div>
                <div class="choose_box">
                    <h2>Choose the lab type</h2>
                    @foreach($lab_types->groupBy('country') as $key => $values)
                        <div class="lab_type lab_type-{{$key}}">
                            @foreach($values as $lab_type)
                            <div class="lab_type_box">
                                    <div class="lab_type_name">
                                        <h3 class="lab_type_str" data-lab-type-id="{{$lab_type->id}}">{{$lab_type->lab_name}}</h3>
                                        <p>{{$lab_type->test_site}}</p>
                                    </div>
                                    <div class="lab_type_price">
                                        <span>{{ $currencies[$lab_type->currency]}}</span>
                                        <h3 class="price_sum">{{$lab_type->total_price}} </h3>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="choose_box m-r_0">
                    <h2>Pre-certification product testing</h2>
                    <div class="testing_lab">
                        <div class="input_line">
                            <label>Arrival Date:</label>
                            <p id="start_date" class="from_date"></p>
                        </div>
                        <div class="input_line">
                            <label>Departure Date:</label>
                            <p id="end_date" class="to_date"></p>
                        </div>
                        <div class="input_line">
                            <label>Lab Type:</label>
                            <p class="lab_type_select_str"></p>
                        </div>
                        <div class="input_line">
                            <label>Days:</label>
                            <p id="days_result" class="days"></p>
                        </div>
                        <div class="input_line">
                            <label>Labs:</label>
                            <p>1</p>
                        </div>
                        <div class="lab_total">
                            <div class="input_line">
                                <label>Lab Total:</label>
                                <p class="total_balance" id="total_balance">$0</p>
                            </div>
                            <div class="input_line">
                                <label>Lab Tax:</label>
                                <p>Plus Tax</p>
                            </div>
                            <div class="input_line your_total">
                                <label>Your Total:</label>
                                <p id="your_total-price"></p>
                            </div>
                        </div>
                        <div class="all_prices">
                            <label>All prices in US dollars</label>
                            <a href="https://www.xe.com/" target="_blank">Use currency converter</a>
                        </div>
                        <div class="button_banner">
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
                                Continue Online Reservation
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('js')
    <script>    
        var startTmp='';
    </script>
    <script src="{{asset('js/datePicker.js')}}"></script>
    <script src="{{asset('js/lab-reservation.js')}}"></script>

@endsection
