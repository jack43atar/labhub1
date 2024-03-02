@extends('layouts.app')

@section('content')


{{--    {{dd(\Illuminate\Support\Facades\Auth::check())}}--}}
    <section class="home">
        <div class="second_menu">
            @include('partials.sign_in_log_out')
        </div>
        <div class="smarter sertification">
            <div class="smarter_way">
                <h2>A smarter way to
                    product compliance</h2>
                <p>Telcron facilitates compliance testing services and complementary solutions
                    for technology manufacturers to achieve and maintain legal marketing of
                    their products globally.<br/>
                    Simply put, we help make pre- and post-market compliance steps that
                    product manufacturers’ need or want, successful.</p>
                <div class="find_search">
                    <input type="search" placeholder="Find Certification Information with Product iQ">
                </div>
            </div>
        </div>
        <div class="home_page">
            <div class="reserv_lab">
                <div class="reserv_lab_box">
                    <img src="images/lab.svg">
                    <p>Reserve Lab for<br/>
                        Precertification Testing</p>
                </div>
                <div class="reserv_lab_box">
                    <img src="images/submit.svg">
                    <p>Submit RFQ for<br/>
                        Certification Test</p>
                </div>
                <form class="contact_form" method="POST" action="{{ route('contactSendMail') }}">
                    @csrf
                    <div class="contact_form_img">
                        <img src="images/contact.svg">
                    </div>
                    <h2>CONTACT FORM</h2>
                    <label>Name</label>
                    <input type="text" name="name">
                    <label>Email address</label>
                    <input type="email" name="email">
                    <label>Message</label>
                    <textarea name="message"></textarea>
                    <button type="submit">Send</button>
                    @if(isset($mail_message))
                        <h3>{{$mail_message}}</h3>
                    @endif
                </form>
            </div>
            <div class="testing">
                <div class="testing_lef_area">
                    <h2>Reserve Lab for<br/>
                        Precertification Testing</h2>
                    <p>There’s a 50% chance that products fail electromagnetic compatibility (EMC) tests the first time,
                        according to at least one leading industry expert. These realities make pre-certification testing a
                        recommended step before committing to final certification efforts for many technology products,
                        with the benefit of improved confidence during certification tests, and reduced risk of redesign
                        at significant time and cost that hampers product launch to market.</p>
                    <p class="for_information">For more information  <a href="#">click here.</a> </p>
                </div>
                <div class="testing_right_area">
                    <div class="box1">
                        <h3>Make Booking</h3>
                        <p>Direct booking with<br/>
                            selection of test items<br/>
                            from www.telcrone.net</p>
                    </div>
                    <div class="box2">
                        <h4>day 1</h4>
                        <div class="line">
                            <span></span>
                        </div>
                        <h3>Plan Review</h3>
                        <p>Client reviews plan and<br/>
                            accepts / changes or cancels<br/>
                            3 days before scheduled start</p>
                    </div>
                    <div class="box2">
                        <h4>day 4</h4>
                        <div class="line">
                            <span></span>
                        </div>
                        <h3>Start Project</h3>
                        <p>Project start @ test lab.<br/>
                            Status viewable in WorkZone.<br/>
                            Standard viewable in TechStreet</p>
                    </div>
                </div>
            </div>
            <div class="scan">
                <div class="testing_lef_area">
                    <h2>Use the app scan camera<br/>
                        to look inside your packages without<br/>
                        opening them</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi nisl,
                        tempus non volutpat auctor, consequat sit amet magna. In pharetra
                        venenatis turpis, vel venenatis erat ultricies a. Maecenas mattis laoreet elit,
                        at pharetra lorem pharetra id. Vestibulum elementum ac massa sed
                        tincidunt. Suspendisse potenti. Aliquam ac imperdiet lectus. Mauris tempor
                        nunc ac aliquam porttitor. Quisque vitae efficitur purus. Nulla ultricies nulla
                        in augue tincidunt suscipit.
                        Cras a aliquam risus, id venenatis diam.</p>
                    <p class="for_information">For more information  <a href="#"> click here.</a></p>
                </div>
                <div class="scan_img">
                    <img src="images/scanimg.png">
                </div>
            </div>
            <div class="testing">
                <div class="testing_lef_area">
                    <h2>Find Certification<br/>
                        Information Faster<br/>
                        with Product iQ</h2>
                    <p class="iq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi nisl,
                        tempus non volutpat auctor, consequat sit amet magna. In pharetra
                        venenatis turpis, vel venenatis erat ultricies a. Maecenas mattis laoreet elit,
                        at pharetra lorem pharetra id. Vestibulum elementum ac massa sed
                        tincidunt. Suspendisse potenti. Aliquam ac imperdiet lectus. Mauris tempor
                        nunc ac aliquam porttitor. Quisque vitae efficitur purus. Nulla ultricies nulla
                        in augue tincidunt suscipit.
                        Cras a aliquam risus, id venenatis diam.</p>
                    <p class="for_information">For more information  <a href="#"> click here.</a></p>
                </div>
                <div class="scan_img">
                    <img src="images/product.png">
                </div>
            </div>
        </div>
        <div class="find">
            <h2 class="your_business">Find what fits your business needs</h2>
            <div class="category">
                <div class="category_boxes">
                    <img src="images/image3.png">
                    <p>Transportation</p>
                </div>
                <div class="category_boxes">
                    <img src="images/image2.png">
                    <p>Partner solutions</p>
                </div>
                <div class="category_boxes">
                    <img src="images/image1.png">
                    <p>Healthcare</p>
                </div>
                <div class="category_boxes">
                    <img src="images/retail.png">
                    <p>Retail</p>
                </div>
                <div class="category_boxes">
                    <img src="images/image5.png">
                    <p>Manufacturing</p>
                </div>
                <div class="category_boxes">
                    <img src="images/image7.png">
                    <p>Finance</p>
                </div>
            </div>
        </div>

        <div class="success">
            <h2>your success is our best result</h2>
            <div class="rsult_line">
                <span class="left_result"></span>
                <span class="center_result"></span>
                <span class="right_result"></span>
            </div>
            <div class="second_result_line">
                <div class="second_result_line_left">
                    <h2>14.520</h2>
                    <p>Lorem ipsum dolor sit
                        amet,ipsum dolor sit amet,  </p>
                </div>
                <div class="second_result_line_center">
                    <h2>14.520</h2>
                    <p>Lorem ipsum dolor sit
                        amet,ipsum dolor sit amet,  </p>
                </div>
                <div class="second_result_line_right">
                    <h2>14.520</h2>
                    <p>Lorem ipsum dolor sit
                        amet,ipsum dolor sit amet,  </p>
                </div>
            </div>
        </div>
@endsection







