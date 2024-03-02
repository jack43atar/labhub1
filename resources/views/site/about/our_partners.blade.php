@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/our_partners.css') }}">
@endsection
@section('content')
    <div id="our_part">
        <section class="home">

            <div class="second_menu">
                <ul class="pageLocation">
                    <li><a href="#">About <img src="{{asset('images/Back.svg')}}"> </a>
                    </li>
                    <li><a href="#">Our partners</a>
                    </li>
                </ul>
                @include('partials.sign_in_log_out')
            </div>


            <div class="partners">
                <div class="analytic-overview-container">
                    <h1>Our partners</h1>
                    <hr>
                    <div>
                        <p class="font_s">
                            Telcron’s solution is enabled through offerings from several collaborators:
                        </p>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="banner">
                        <div class="img-bar">
                            <img src="{{asset('images/ourPartners/sap-ariba-vector-logo.png')}}" alt="sap-ariba" title="SAP Ariba">
                        </div>
                        <div class="text-bar">
                            <p class="font_s">
                                Ariba’s eCommerce platform is used by over 700,000 suppliers, and its suite of eCommerce
                                solutions handle over $340 bn in transactions per year. Telcron’s eSource offering utilizes
                                Ariba’s StartSourcing, part of Ariba’s Spend Management solution.
                            </p>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="img-bar">
                            <img src="{{asset('images/ourPartners/techstreet.png')}}" alt="Techstreet" title="Techstreet">
                        </div>
                        <div class="text-bar">
                            <p class="font_s">
                                Techstreet, a unit of Thomson Reuters has over 500,000 codes and standards from over 350
                                authorities in its online database, some of which may be accessible to Telcron’s clients through
                                its subscription. This includes standards from IEEE, IEC, ANSI, CSA, BS EN among others that
                                apply to technology products.
                            </p>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="img-bar">
                            <img src="{{asset('images/ourPartners/b4checkin.png')}}" alt="b4checkin" title="b4checkin">
                        </div>
                        <div class="text-bar">
                            <p class="font_s">
                                WorkZone’s intuitive project management platform allows Telcron’s customers to view project
                                status, and share other project related documents before, during, and after project start online
                                regardless of test labs utilized.
                            </p>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="img-bar">
                            <img src="{{asset('images/ourPartners/rk4tmdmjhvfkfwqt0vce.png')}}" alt="Workzone" title="Workzone">
                        </div>
                        <div class="text-bar">
                            <p class="font_s">
                                Telcron’s first in class booking tool for pre-certification compliance testing services offers a
                                simple, convenient tool for bookings in the US, Canada, China, Japan, Taiwan, Australia, and New
                                Zealand. Some of the finest hotels around the world that include Seaport Boston, Cambridge
                                Suites Halifax, and Avila Hotel Curacao utilize b4Checkin’s solutions.
                            </p>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="img-bar">
                            <img src="{{asset('images/ourPartners/Abn.png')}}" alt="Abn" title="Abn">
                        </div>
                        <div class="text-bar ">
                            <p class="font_s">
                                Telcron is a proud member of the Allied Business Network which brings the industry’s most
                                competitive corporate discounts to your fingertips. Featured discounts include:
                            </p>
                        </div>
                        <ul class="abn_list">
                            <li> Exclusive coupons and discounts at national business retailers and service providers available
                                only
                                to ABN Members.
                            </li>
                            <li> Free Membership in Hertz Gold (a $60 value!) plus Hertz discounts of up to 20%.
                                PLUS, earn free rental days when you sign up for Hertz Business Rewards.
                            </li>

                            <li> Save up to 85% on core office supplies from Office Depot, plus save an average of 10% on other
                                already discounted items.
                            </li>

                            <li> 15% off printing & copying at FedEx Office through FedEx Office Print Online.</li>

                            <li> UPS Shipping discounts through the UPS Small Business Program and 10% off The UPS Store
                                purchases.
                            </li>
                            <li> 10% 4imprint discount on all promotional items.</li>
                            <li> Other resources such as saving tips and cost-cutting methods for your business.</li>

                        </ul>
                    </div>
                    <div class="banner">
                        <div class="img-bar">
                            <img src="{{asset('images/ourPartners/worldTravel_logo.png')}}" alt="worldTravel_logo" title="worldTravel Logo">
                        </div>
                        <div class="text-bar ">
                            <p class="font_s">
                                Telcron’s partnership with WorldTravel Inc. brings the service excellence of the 4th largest
                                independently owned US based Travel Management company to Telcron’s family of customers and lab
                                network. Our customers can enjoy the benefits of the most experienced agents, the highest
                                standards of customer service, and the tools to achieve maximum cost efficiencies while easing
                                the burden of travel arrangements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


