@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/telcron_business_messaging.css') }}">
@endsection
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="">Product & Industries <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="{{route('product_include.mobility_service')}}">Mobility Services <img src="{{asset('images/Back.svg')}}"></a>
                </li>
                <li><a href="{{route('product_include.mobility_service.business_messaging')}}">Business Messaging</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="smarter smarter_business">
            <div class="smarter_way">
                <h2>A smarter way to
                    product compliance
                </h2>
                <p>Telcron facilitates compliance testing services and complementary solutions
                    for technology manufacturers to achieve and maintain legal marketing of
                    their products globally.<br/>
                    Simply put, we help make pre- and post-market compliance steps that
                    product manufacturers’ need or want, successful.
                </p>
            </div>
        </div>
        <div class="mobility_services">
            <h2 class="services">Mobility Services</h2>
            <p>Find what fits your business needs</p>
            <div class="mobility_boxes">
                <a href="{{route('product_include.mobility_service.business_messaging.telcron_business_messaging')}}" class="card business_card">
                    <div class="card-body business_card_body">
                        <h2>Business Messaging</h2>
                        <p>Communicate with your employees via group or
                            individual notifications to keep your teams
                            informed
                        </p>
                    </div>
                    <div class="card-footer business_card_footer">View More</div>
                </a>
                <a class="card business_card">
                    <div class="card-body business_card_body">
                        <h2>Message Archiving</h2>
                        <p>Help stay compliant with this SMS and MMS archiving system, storing messages for up to 7 years</p>
                    </div>
                    <div class="card-footer business_card_footer">View More</div>
                </a>
                <a class="card business_card active1">
                    <div class="card-body business_card_body">
                        <h2>Global Smart Messaging Suite</h2>
                        <p>Communicate with your employees via group or
                            individual notifications to keep your teams
                            informed
                        </p>
                    </div>
                    <div class="card-footer business_card_footer">View More</div>
                </a>
                <a class="card business_card">
                    <div class="card-body business_card_body">
                        <h2>Landline Texting</h2>
                        <p>Communicate with your employees via group or
                            individual notifications to keep your teams
                            informed
                        </p>
                    </div>
                    <div class="card-footer business_card_footer">View More</div>
                </a>
                <a class="card business_card">
                    <div class="card-body business_card_body">
                        <h2>The Archiving Platform from Smarsh</h2>
                        <p>Communicate with your employees via group or
                            individual notifications to keep your teams
                            informed
                        </p>
                    </div>
                    <div class="card-footer business_card_footer">View More</div>
                </a>
                <a class="card business_card">
                    <div class="card-body business_card_body">
                        <h2>Business Messaging</h2>
                        <p>Communicate with your employees via group or
                            individual notifications to keep your teams
                            informed
                        </p>
                    </div>
                    <div class="card-footer business_card_footer">View More</div>
                </a>
            </div>
        </div>
        <div class="product_area">
            <div class="price_per_user">
                <h2>Products</h2>
                <h2>Purpose</h2>
                <h2>Benefits</h2>
                <h2>Price Per User</h2>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <h2>Business Messaging</h2>
                <div class="business_massaging_boxes">
                    <div class="messages">
                        <p>Communicate with your employees via group or individual notifications to keep your teams informed</p>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field.
                        </p>
                    </div>
                    <div class="messages long">
                        <ul>
                            <li>
                                <span></span>
                                <p>Mirrors the one-touch operation of a traditional radio,
                                    enabling fast and responsive mobile communications.
                                </p>
                            </li>
                            <li>
                                <span></span>
                                <p> Supports a wide array of open IP-based standards to
                                    implement LTE interoperability between an LMR system
                                    and the AT&amp;T network.
                                </p>
                            </li>
                            <li>
                                <span></span>
                                <p>Remotely monitor and manage field devices, set
                                    parameters, create contact lists, record calls and more, all
                                    from our Integrated Dispatch Console.
                                </p>
                            </li>
                            <li>
                                <span></span>
                                <p> Wide selection of certified rugged devices, smartphones and more.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field.
                        </p>
                    </div>
                </div>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <h2>Business Messaging</h2>
                <div class="business_massaging_boxes">
                    <div class="messages">
                        <p>Communicate with your employees via group or individual notifications to keep your teams informed</p>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field.
                        </p>
                    </div>
                    <div class="messages long">
                        <ul>
                            <li><span></span><p>Mirrors the one-touch operation of a traditional radio,
                                    enabling fast and responsive mobile communications.</p></li>
                            <li> <span></span><p> Supports a wide array of open IP-based standards to
                                    implement LTE interoperability between an LMR system
                                    and the AT&amp;T network.</p></li>
                            <li> <span></span><p>Remotely monitor and manage field devices, set
                                    parameters, create contact lists, record calls and more, all
                                    from our Integrated Dispatch Console.</p></li>
                            <li><span></span><p> Wide selection of certified rugged devices, smartphones and more. </p></li>
                        </ul>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field. </p>
                    </div>
                </div>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <h2>Business Messaging</h2>
                <div class="business_massaging_boxes">
                    <div class="messages">
                        <p>Communicate with your employees via group or individual notifications to keep your teams informed</p>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field. </p>
                    </div>
                    <div class="messages long">
                        <ul>
                            <li><span></span><p>Mirrors the one-touch operation of a traditional radio,
                                    enabling fast and responsive mobile communications.</p></li>
                            <li> <span></span><p> Supports a wide array of open IP-based standards to
                                    implement LTE interoperability between an LMR system
                                    and the AT&amp;T network.</p></li>
                            <li> <span></span><p>Remotely monitor and manage field devices, set
                                    parameters, create contact lists, record calls and more, all
                                    from our Integrated Dispatch Console.</p></li>
                            <li><span></span><p> Wide selection of certified rugged devices, smartphones and more. </p></li>
                        </ul>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field. </p>
                    </div>
                </div>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <h2>Business Messaging</h2>
                <div class="business_massaging_boxes">
                    <div class="messages">
                        <p>Communicate with your employees via group or individual notifications to keep your teams informed</p>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field. </p>
                    </div>
                    <div class="messages long">
                        <ul>
                            <li><span></span><p>Mirrors the one-touch operation of a traditional radio,
                                    enabling fast and responsive mobile communications.</p></li>
                            <li> <span></span><p> Supports a wide array of open IP-based standards to
                                    implement LTE interoperability between an LMR system
                                    and the AT&amp;T network.</p></li>
                            <li> <span></span><p>Remotely monitor and manage field devices, set
                                    parameters, create contact lists, record calls and more, all
                                    from our Integrated Dispatch Console.</p></li>
                            <li><span></span><p> Wide selection of certified rugged devices, smartphones and more. </p></li>
                        </ul>
                    </div>
                    <div class="messages">
                        <p>Get instant and simple near-real-
                            time communication with your
                            teams in the field. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection