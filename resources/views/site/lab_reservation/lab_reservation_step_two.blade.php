@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/lab-reservation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lab_step2.css')}}">

@endsection
<script src="https://js.stripe.com/v3/"></script>

@section('content')

    <div id="lab_reservation">
        <section class="home">
            <div class="lab_second_menu">
                <div class="second_menu">
                    @include('partials.sign_in_log_out')
                </div>
                <ul class="labs_steps">
                    <li><a href="#"> Back to step one</a></li>
                    <li><a href="#"> promo code</a></li>
                    <li><a href="#"> change or cancel</a></li>
                    <li><a href="#"> special offers</a></li>
                    <li><a href="#"> home</a></li>
                </ul>
                <div class="check_availability">
                    <div class="rates">
                        <div class="rate_line"><span>1</span></div>
                    </div>
                    <div class="rates active">
                        <h2>Please enter your consumer information</h2>
                        <div class="rate_line"><span>2</span></div>
                    </div>
                    <div class="rates">
                        <div class="rate_line"><span>3</span></div>
                    </div>
                </div>
            </div>
            <div class="booking_area">
                <div class="select_your_booking">
                    <h2>I am a new cusomer</h2>
                    <p>We value your privacy. We do not sell or rent names.
                        <br/>View our Privacy Policy for more details.</p>
                </div>
                <div class="select_your_booking">
                    <h2>I am a returning customer</h2>

                </div>
                <div class="select_your_booking">
                    <h2>Booking Summary</h2>
                    <p>You can see here your booking summary</p>
                </div>
            </div>
            <div class="choose_area">
                {{--                <form class="information" >--}}
                <form id="form-reservation-and-payment" class="information"
                      action="{{ route("labReservationAllFormWithPayment") }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="company_information">
                        <h2>A. Company information</h2>
                        <div class="inputs_line">
                            <input type="text" name="company_name" placeholder="{{$user->business->company_name}}"
                                   disabled>
                            <input type="email" placeholder="{{$user->email}}" disabled>
                            <input type="text" name="company_contact_f_name" placeholder="Company contact's first name">
                            <input type="text" name="company_contact_l_name" placeholder="Company contact's Last Name">
                        </div>
                        <div class="address">
                            <input type="text" name="address" placeholder="Address">
                        </div>
                        <div class="inputs_line">
                            <input type="text" name="city" placeholder="City">
                            <input type="text" name="province_state" placeholder="Province or State">
                            <select class="research" name="country">
                                <option value="1">USA</option>
                                <option value="2">Canada</option>
                                <option value="3">Europe</option>
                                <option value="4">China/Taiwan</option>
                                <option value="5">Japan</option>
                                <option value="6">Australia/New Zealand</option>
                            </select>
                            <input type="text" name="zip_code" placeholder="Zipcode">
                        </div>
                    </div>
                    <div class="contact_information">
                        <h2>B. BOOKING CONTACT INFORMATION</h2>
                        <p>A reservation confirmation email will be sent to this email address.</p>
                        <div class="inputs_line">
                            <input type="email" name="booking_email" placeholder="Email Address *">
                            <input type="text" name="booking_fax_number" placeholder="Fax Number *">
                            <input type="text" name="booking_phone_one" placeholder="Phone Number 1 *">
                            <input type="text" name="booking_phone_two" placeholder="Phone Number 2">
                        </div>
                    </div>
                    <div class="lab_options">
                        <h2>c. lab options / preferences (optional)</h2>
                        <p>Check all that apply:</p>
                        <div class="testing_service">
                            <p>Testing service preference</p>
                            <div class="checkes">
                                @foreach($data['service_preferences'] as $service_preference)
                                    <label class="preference">{{$service_preference['name']}}
                                        <input type="checkbox" name="service_preferences[]" value="{{$service_preference['id']}}">
                                        <span class="preference_checkmark"></span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="product_description">
                        <p>Product Description</p>
                        <div class="checkes">
                            @foreach($data['product_descriptions'] as $product_description)
                                <label class="preference">{{$product_description['name']}}
                                    <input type="checkbox" name="product_descriptions[]" value="{{$product_description['id']}}">
                                    <span class="preference_checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="information_and_comments">
                        <p>Additional product information and comments</p>
                        <p>Please include product name, model number and any special requests you may have.</p>
                        <textarea name="description">Write here * </textarea>
                    </div>
                    <div class="reservation_guarantee">
                        <h2>d. reservation guarantee</h2>
                        <p>Booking / Cancellation:</p>
                        <div class="inputs_line">
                            <input type="email" name="reservation_email" placeholder="Email Address">
                        </div>
                        <p>Cancellations must be made three business days in advance of the planned start date of
                            testing to
                            avoid late charges of 10%, 25%, and 40% of value of the booking per day past the three
                            business day
                            period. Partial cancellation of a scheduled booking will incur lesser charges than a full
                            cancellation, pro-rated based on canceled schedule.</p>
                        <p> Bookings are to be made at the website,
                            www.testlabquote.com or by phone with a representative at 973-348-9011 preferably two weeks
                            or greater in advance of start date of testing bu no later than three days before the
                            planned
                            start date.</p>
                        <div class="guaranteed">
                            <h2>The guaranteed reservation is:</h2>
                            <h2>$ {{$data['total_price']}}</h2>
                        </div>
                        <p>*Credit Card information is not required if a purchase order was used</p>
                        <p>Choose the way of payment</p>
                        <div class="cards">
                            <div class="form">

                                <div class="inputGroup">
                                    <input id="radio1" name="radio" type="radio"/>
                                    <label for="radio1" class="clickable">
                                        <img src="{{asset('images/master-card.png')}}" alt="MasterCard"
                                             title="MasterCard">
                                    </label>
                                </div>
                                <div class="inputGroup">
                                    <input id="radio2" name="radio" type="radio"/>
                                    <label for="radio2" class="clickable">
                                        <img src="{{asset('images/visa-card.png')}}" alt="VISA Card" title="VISA">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inputs_line" style="width: 400px">
                            {{--                            <input type="email" placeholder="Enter Card Number">--}}
                            {{--                            <input type="number" placeholder="Card holder">--}}
                            {{--                            <input type="date" placeholder="MM/YY">--}}
                            {{--                            <input type="text" placeholder="CV">--}}
                            <div class="form-row m-4">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <input class="mb-lg-4" style="height: 40px" name="name" placeholder="Name on card">
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" class="mt-2" role="alert"></div>
                            </div>
                        </div>
                        <p class="details">Your card details would be secure and save.</p>
                    </div>
                    @foreach($errors->all() as $error)
                        <div class="error-message">* {{$error}}</div>
                    @endforeach
                    <div class="complate_rezervation">
                        <button>Complete reservation</button>
                    </div>

                </form>
                <div class="choose_box reservation_box">
                    <h2>Pre-certification product testing</h2>
                    <div class="testing_lab">
                        <div class="input_line">
                            <label>Arrival Date:</label>
                            <p>{{$data['start_date']}}</p>
                        </div>
                        <div class="input_line">
                            <label>Departure Date:</label>
                            <p>{{$data['end_date']}}</p>
                        </div>
                        <div class="input_line">
                            <label>Lab Type:</label>
                            <p>{{$data['lab_type_name']}}</p>
                        </div>
                        <div class="input_line">
                            <label>Days:</label>
                            <p>{{$data['diff_days'].' '.$data['full_or_part']}} days</p>
                        </div>
                        <div class="input_line">
                            <label>Labs:</label>
                            <p>1</p>
                        </div>
                        <div class="lab_total">
                            <div class="input_line">
                                <label>Lab Total:</label>
                                <p>${{$data['total_price']}}</p>
                            </div>
                            <div class="input_line">
                                <label>Lab Tax:</label>
                                <p>Plus Tax</p>
                            </div>
                            <div class="input_line your_total">
                                <label>Your Total:</label>
                                <p>${{$data['total_price']}}</p>
                            </div>
                        </div>
                        <div class="all_prices">
                            <label>All prices in US dollars</label>
                            <a href="#">Use currency converter</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@section('js')
    <script src="{{asset('js/payment.js')}}"></script>
    <script src="{{asset('js/lab-reservation.js')}}"></script>
@endsection



