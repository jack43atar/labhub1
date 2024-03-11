@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
@endsection
@section('content')
    <section class="store">
        <div class="second_menu">
            @include('partials.sign_in_log_out')
        </div>
        <div class="phone_area">
            <!-- <ul class="mobile_menu">
                <li class="active2">
                    <a href="#">Mobile Phones</a>
                </li>
                <li>
                    <a href="#">Laptops</a>
                </li>
                <li>
                    <a href="#">Security</a>
                </li>
                <li>
                    <a href="#">Computer Networking</a>
                </li>
                <li>
                    <a href="#">Devices</a>
                </li>
                <li>
                    <a href="#">Office Electronics</a>
                </li>
            </ul>

            <ul class="phones_menu">
                <li class="active2">
                    <a href="#">Phones</a>
                </li>
                <li>
                    <a href="#">Cables</a>
                </li>
                <li>
                    <a href="#">Holders</a>
                </li>
                <li>
                    <a href="#">Accessories</a>
                </li>
            </ul> -->
            <div class="phons_brands">
                <!-- <div class="brands_area">
                    <ul class="brands">
                        <h2>BRANDS</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Apple</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Samsung</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Xiaomi</span>
                            </label>
                        </li>
                    </ul>
                    <ul class="brands">
                        <h2>PRICE</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Value</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Premium</span>
                            </label>
                        </li>
                    </ul>
                    <ul class="brands">
                        <h2>STANDARTS</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">ISO</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">FCC</span>
                            </label>
                        </li>
                    </ul>
                    <ul class="brands">
                        <h2>OTHER TAGS</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">New</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Deals</span>
                            </label>
                        </li>
                    </ul>
                </div> -->
                <div class="phne_brands">
                    @foreach ($items as $item)
                    <div class="phone_box">
                        <div class="phone_box_area">
                            <div class="phone_left">
                                <img src="{{$item->photourl}}">
                            </div>
                            <div class="phone_right">

                            </div>
                        </div>
                        <div class="phone_footer">
                            <div class="footer_left">
                                <p>{{$item->name}}</p>
                                <p>${{$item->price}}</p>
                                <!-- <div class="stars">
                                    <img src="images/Starfree1.svg">
                                    <img src="images/Starfree1.svg">
                                    <img src="images/Starfree1.svg">
                                    <img src="images/Starfree.svg">
                                    <img src="images/Starfree.svg">
                                </div> -->
                            </div>
                            <div class="footer_right">
                                <img src="images/hearts.svg" class="hearts">
                                <div class="hearts_red">
                                    <img src="images/heart.svg">
                                </div>
                                <img src="images/sac.svg">
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
        <div>
            {{ $items->links() }}
        </div>
    </section>
@endsection