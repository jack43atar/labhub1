@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/telcron_business_messaging.css') }}">
@endsection
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="#">Product & Industries  <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="{{route('product_include.mobility_service')}}">Mobility Services <img src="{{asset('images/Back.svg')}}"></a>
                </li>
                <li><a href="{{route('product_include.mobility_service.business_messaging')}}">Business Messaging <img src="{{asset('images/Back.svg')}}"></a>
                </li>
                <li><a href="{{route('product_include.mobility_service.business_messaging.telcron_business_messaging')}}">TELCRON Business Messaging</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="smarter telcron_smarter_business">
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
        <div class="benefits">
            <h2>TELCRON Business Messaging</h2>
            <p>Benefits</p>
            <div class="groups">
                <div class="notification">
                    <span></span>
                    <div>
                        <h2>Group notifications</h2>
                        <p>Send notifications to groups as large as 20,000
                            recipients. </p>
                    </div>
                </div>
                <div class="notification">
                    <span></span>
                    <div>
                        <h2>Communicate more</h2>
                        <p>Attach files, photos, and videos up to 5MB each and
                            voice memos up to 5 minutes </p>
                    </div>
                </div>
                <div class="notification">
                    <span></span>
                    <div>
                        <h2>Visibility</h2>
                        <p>Rest easy knowing your messaging was received with
                            confirmations for sent, delivered, and even read
                            messages.  </p>
                    </div>
                </div>
                <div class="notification">
                    <span></span>
                    <div>
                        <h2>Technical help</h2>
                        <p>With our trained technical support on standby 24/7, you can rest easy knowing you’ll have the help when you need it. </p>
                    </div>
                </div>
                <div class="notification">
                    <span></span>
                    <div>
                        <h2>Flexible pricing</h2>
                        <p>Add a package to one or a few employees’ accounts or up to 8,000 accounts with our individual or bulk pricing options.  </p>
                    </div>
                </div>
                <div class="notification">
                    <span></span>
                    <div>
                        <h2>Compatibility</h2>
                        <p>Our messaging service works with major U.S. carriers and is also compatible with any device with text message capabilities. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobility_services">
            <h2 class="pricing">Pricing</h2>
            <div class="mobility_boxes">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a class="card business_card">
                            <div class="card-body business_card_body">
                                <h2>Individual Basic</h2>
                                <p>Add AT&T Business Messaging to an individual’s AT&T
                                    account to be combined with their existing messaging
                                    plan. Speak to a sales representative for a full list of
                                    bulk plans.</p>
                            </div>
                            <div class="card-footer business_card_footer">$3/mo.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a class="card business_card">
                            <div class="card-body business_card_body">
                                <h2>Individual Secure</h2>
                                <p>For additional security or HIPAA compliance, add our
                                    Secure Messaging package and send encrypted
                                    messages via the AT&T Business Messaging app. *Must
                                    be added to an individual basic plan.</p>
                            </div>
                            <div class="card-footer business_card_footer">$3/mo.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a class="card business_card">
                            <div class="card-body business_card_body">
                                <h2>Bulk Basic</h2>
                                <p>Purchase AT&T Business Messaging on a single AT&T
                                    account then include users regardless of their mobile
                                    carrier. Our admin website gives you the flexibility to
                                    add/remove users as you need to. Speak to a sales
                                    representative for a full list of bulk plans.</p>
                            </div>
                            <div class="card-footer business_card_footer">$3/mo. per license</div>
                        </a>
                    </div>
                    <div class="item">
                        <a class="card business_card">
                            <div class="card-body business_card_body">
                                <h2>Business Messaging</h2>
                                <p>Communicate with your employees via group or
                                    individual notifications to keep your teams
                                    informed</p>
                            </div>
                            <div class="card-footer business_card_footer">View More</div>
                        </a>
                    </div>
                    <div class="item">
                        <a class="card business_card">
                            <div class="card-body business_card_body">
                                <h2>Individual Secure</h2>
                                <p>For additional security or HIPAA compliance, add our
                                    Secure Messaging package and send encrypted
                                    messages via the AT&T Business Messaging app. *Must
                                    be added to an individual basic plan.</p>
                            </div>
                            <div class="card-footer business_card_footer">$3/mo.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a class="card business_card">
                            <div class="card-body business_card_body">
                                <h2>Bulk Basic</h2>
                                <p>Purchase AT&T Business Messaging on a single AT&T
                                    account then include users regardless of their mobile
                                    carrier. Our admin website gives you the flexibility to
                                    add/remove users as you need to. Speak to a sales
                                    representative for a full list of bulk plans.</p>
                            </div>
                            <div class="card-footer business_card_footer">$3/mo. per license</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_area">
            <h2 class="details">Features and details</h2>
            <div class="price_per_user">
                <h2>Features</h2>
                <h2>Details</h2>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <div class="business_massaging_boxes">
                    <div class="messages short">
                        <p>Boost efficiency in a wide range
                            of applications</p>
                    </div>
                    <div class="messages long_line">
                        <p>AT&T Business Messaging can boost efficiency in a wide range of applications,
                            including Computer-Aided Dispatch (CAD), Business Continuity Planning (BCP),
                            Systems Monitoring and Auto-Escalation, Sales Force Automation (SFA),
                            Lead Notification and Data Disbursement, Business Process Automation (BPA/BPM),
                            and Workforce Management, Field Service Automation (FSA)
                        </p>
                    </div>
                </div>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <div class="business_massaging_boxes">
                    <div class="messages short">
                        <p>Broad compatibility</p>
                    </div>
                    <div class="messages long_line">
                        <p>Save on deployment—AT&T Business Messaging is compatible with most devices capable of receiving
                            text messages, with major US carriers, and supports a range of messaging protocols
                            (SNPP, WCTP, SMTP, and TAP). Send and receive messages on-the-go from virtually
                            any mobile device and keep your business messages separate from the rest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <div class="business_massaging_boxes">
                    <div class="messages short">
                        <p>Quicker responses</p>
                    </div>
                    <div class="messages long_line">
                        <p>Remote workers can save time by setting up preconfigured response options. For example,
                            setting up ‘Yes’, ‘No’, or ‘Escalate’ responses they can
                            reply quickly and get back to the task at hand.
                        </p>
                    </div>
                </div>
            </div>
            <div class="business_massging_list">
                <div class="line"><span></span></div>
                <div class="business_massaging_boxes">
                    <div class="messages short">
                        <p>Delivery confirmation</p>
                    </div>
                    <div class="messages long_line">
                        <p>Gain peace of mind and help reduce remote worker errors with
                            confirmation that vital information has been received.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection