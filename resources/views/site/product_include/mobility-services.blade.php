@extends('layouts.app')
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="#">Product & Industries <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="{{route('product_include.mobility_service')}}">Mobility Services</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="smarter">
            <div class="smarter_way">
                <h2>A smarter way to
                    product compliance</h2>
                <p>Telcron facilitates compliance testing services and complementary solutions
                    for technology manufacturers to achieve and maintain legal marketing of
                    their products globally.<br/>
                    Simply put, we help make pre- and post-market compliance steps that
                    product manufacturers’ need or want, successful.</p>
            </div>
        </div>
        <div class="mobility_services">
            <h2 class="services">Mobility Services</h2>
            <p>Find what fits your business needs</p>
            <div class="mobility_boxes">
                <a href="{{route('product_include.mobility_service.business_messaging')}}" class="mobility_images">
                    <img src="{{asset('images/image1.png')}}">
                    <p>Business Messaging</p>
                </a>
                <div class="mobility_images">
                    <img src="{{asset('images/image2.png')}}">

                    <p>Device Management Programs</p>
                </div>
                <div class="mobility_images">
                    <img src="{{asset('images/image3.png')}}">
                    <p>Field Management</p>
                </div>
                <div class="mobility_images">
                    <img src="{{asset('images/image4.png')}}">
                    <p>In-Building Wireless</p>
                </div>
                <div class="mobility_images">
                    <img src="{{asset('images/image5.png')}}">
                    <p>Mobile Devices</p>
                </div>
                <div class="mobility_images">
                    <img src="{{asset('images/image6.png')}}">
                    <p>Mobility Rate Plans</p>
                </div>
                <div class="mobility_images">
                    <img src="{{asset('images/image7.png')}}">
                    <p>Mobile Remote Access</p>
                </div>
                <div class="mobility_images">
                    <img src="{{asset('images/image8.png')}}">
                    <p>Mobility Features</p>
                </div>
            </div>
        </div>
    </section>
@endsection