@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/lab-reservation.css')}}">
    <link rel="stylesheet" href="{{asset('css/lab-step3.css')}}">
@endsection
@section('content')

    <div id="lab_step3">
        <section class="section_1">
            <div class="lab_second_menu">
                <div class="second_menu">
                    @include('partials.sign_in_log_out')
                </div>
                <ul class="labs_steps">
                    <li><a href="#"> Promo Code </a><span class="advance_code"></span></li>
                    <li><a href="#"> Special Offers</a></li>
                    <li><a href="#"> change or cancel</a></li>
                </ul>
                <div class="check_availability">
                    <div class="rates">
                        <div class="rate_line"><span>1</span></div>
                    </div>
                    <div class="rates ">
                        <div class="rate_line"><span>2</span></div>
                    </div>
                    <div class="rates active">
                        <span>The last payment stage</span>
                        <div class="rate_line"><span>3</span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_2">
            <div class="s2_sm_bl">
                <div class="s2_box_bl">
                    <p class="s2_box_title ">Check your card details</p>
                    <p class="s2_box_text ">Please check your card details, and change them if needed.</p>
                </div>
                <div class="s2_box_bl">
                    <p class="s2_box_title ">Check testing information and preferences</p>
                    <p class="s2_box_text ">Please check the testing information and preferences, you can delete each
                        preference
                        you choose by mistake.</p>
                </div>
                <div class="s2_box_bl">
                    <p class="s2_box_title ">Booking Summary</p>
                    <p class="s2_box_text ">You can see here your booking summary</p>
                </div>
            </div>
        </section>
        <section class="section_3">
                <div class="s3_sm_bl">
                    <div class="s3_maine_box">
                        <p class="s3_box_title font">Card information</p>
                        <div class="s3_box">
                            <table>
                                <tbody class="font">
                                <tr>
                                    <td>Card Type</td>
                                    <td>{{$data['card_brand']}}</td>
                                </tr>
                                <tr>
                                    <td>Card holder</td>
                                    <td>{{$data['card_holder']}}</td>
                                </tr>
                                <tr>
                                    <td>Card Number</td>
                                    <td>**** **** **** {{$data['card_last4']}}</td>
                                </tr>
                                <tr>
                                    <td>MM/YY</td>
                                    <td>{{$data['card_mm_yy']}}</td>
                                </tr>
                                <tr>
                                    <td>CVV</td>
                                    <td>{{$data['cvv']}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="s3_btn_bl">
                                <button class="">Change card details</button>
                            </div>
                        </div>
                    </div>
                    <div class="s3_maine_box">
                        <p class="s3_box_title font">Testing information</p>
                        <div class="s3_box">
                            <div class="content_block1">

                                <div class="content_block1">
                                    <p class="content_title font">Lab Type:</p>
                                    <div class="toggle_block">
                                        <p class="toggle_block_text font">{{$data['lab_type_name']}}</p>
                                        <button class="toggle_block_close_btn">&times;</button>
                                    </div>
                                </div>
                                <div class="content_block1">
                                    <p class="content_title font">Testing service preference:</p>
                                    @foreach($data['service_preferences'] as $service_preference)
                                        <div class="toggle_block active_block">
                                            <p class="toggle_block_text font ">{{$service_preference['name']}}</p>
                                            <button class="toggle_block_close_btn">&times;</button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="content_block1">
                                    <p class="content_title font">Product Description:</p>
                                    @foreach($data['product_descriptions'] as $product_description)
                                        <div class="toggle_block">
                                            <p class="toggle_block_text font">{{$product_description['name']}}</p>
                                            <button class="toggle_block_close_btn">&times;</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="s3_btn_bl">
                                <button class="">Add preferences</button>
                            </div>
                        </div>
                    </div>
                    <div class="s3_maine_box">
                        <p class="s3_box_title font">Booking</p>
                        <div class="s3_box act_bord">
                            <div class="content_block1">
                                <table>
                                    <tbody class="font">
                                    <tr>
                                        <td>Arrival Date:</td>
                                        <td>{{$data['start_date']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Departure Date:</td>
                                        <td>{{$data['end_date']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Lab Type:</td>
                                        <td>{{$data['lab_type_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Days:</td>
                                        <td>{{$data['diff_days']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Labs:</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="content_block1">
                                <table>
                                    <tbody class="font">
                                    <tr>
                                        <td>Lab Total:</td>
                                        <td>{{$data['currency']}} {{$data['total_price']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Lab Tax:</td>
                                        <td>Plus Tax</td>
                                    </tr>
                                    <tr class="red_text">
                                        <td>Your Total:</td>
                                        <td>{{$data['currency']}} {{$data['total_price']}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="content_block1">
                                <p class="l_text font">All prices in US dollars</p>
                                <a class=" text_d_red" href="">
                                    <p class="l_text red_text font ">Use currency converter</p>
                                </a>
                            </div>
                            <div class="s3_btn_bl">
{{--                               button i class na book_now--}}
                                <button id="step-three-payment-btn" class="active">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <div class="modal_fon">
        <div class="modal_main_block">
            <div class="modal_container">
                <h3 class="modal_title font">Congratulations</h3>
                <p class="modal_text font">
                    You have completed the reservation and got a <span>gift card</span> for the next booking
                </p>
                <div class="modal_img_block">
                    <img src="{{asset('images/Group 3022.png')}}" alt="">
                </div>
                <div class="modal_btn_block">
                    <button class="modal_btn font">Continue</button>
                </div>
                <a href="#" class="modal_link font">Know more about gift cards</a>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{asset('js/lab-step3.js')}}"></script>
    <script src="{{asset('js/lab-reservation.js')}}"></script>
@endsection
