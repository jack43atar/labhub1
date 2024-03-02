@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/schedule_testing.css') }}">
@endsection
@section('content')
    <div id="schedule_testing">
        <section class="home">
            <div class="second_menu">
                <ul class="pageLocation">
                    <li><a href="#">Lab Reservation <img src="{{asset('images/Back.svg')}}"> </a>
                    </li>
                    <li><a href="#">Schedule Testing</a>
                    </li>
                </ul>

                @include('partials.sign_in_log_out')

            </div>
            <div>
                <div class="analytic-overview-container">
                    <h1>Schedule Testing</h1>
                    <hr>
                </div>
            </div>

            <div class="schedule_testing_banner">

                <div class="info_bar">
                    <p>
                        There’s a 50% chance that products fail electromagnetic compatibility (EMC) tests the first time,
                        according to at least one leading industry expert. Other test categories such as radio regulatory and
                        product safety may also necessitate design changes after the initial run to meet all applicable
                        requirements. These realities make pre-certification testing a recommended step before committing to
                        final certification efforts for many technology products, with the benefit of improved confidence during
                        certification tests, and reduced risk of redesign at significant time and cost that hampers product
                        launch to market.

                    </p>
                    <p>
                        Test equipment<br>
                        Manufacturers seeking third party EMC labs consider several factors – among them, availability, cost,
                        and credibility of results, a 2011 survey suggests. And, compliance tests may need to be performed at
                        multiple test labs to fulfill all applicable regulatory testing requirements. With a number of
                        accredited partner test labs around the world, Telcron makes it simple and easier for manufacturers to
                        secure bookings at test labs for pre-certification and certification compliance testing of technology
                        products and provides a single interface for coordination and management.

                    </p>
                    <p>
                        Three days or more advance booking is recommended to confirm the preferred schedule or an alternate.
                    </p>
                    <p>
                        Pre-certification electromagnetic compatibility and radio conformance testing can be coordinated at
                        regulatory approved ambient free anechoic chambers, or Open Area Test Sites (OATS) at over twenty
                        globally situated test labs. WorkZone project management platform and pertinent standards from
                        TechStreet are accessible to clients (access are subject to applicable publisher, copyright, and other
                        guidelines pursuant to subscriptions at TechStreet).
                    </p>
                </div>
                <div class="best_team">
                    <div>
                        <h5 class="head_name">Best team to help you realize your business</h5>
                    </div>
                    <div class="img_banner">
                        <img src="{{asset('images/scheduleTesting.png')}}" alt="Schedule Testing" title="Schedule Testing">
                    </div>
                </div>
            </div>

            <div class="workflows_banner">
                <div class="head_name">
                    <p class="text m-l_0">
                        Workflows for Pre-Certification Test Programs Illustration
                    </p>
                </div>

                <!-- certificationProcess 1 -->
                <div class="certificationProcess">
                    <div class="line_banner">
                        <div class="special_line">
                            <span class="circle"></span>
                            <span class="day_is">1 day</span>
                            <span class="circle"></span>
                            <span class="day_is">4 days</span>
                            <span class="circle"></span>
                        </div>
                    </div>
                    <div class="text_bar">
                        <div>
                            <p>
                                Direct booking with selection of test items from www.telcron.net.
                            </p>
                        </div>
                        <div>
                            <p>
                                Client review plan and accepts / changes or cancels 3 days before scheduled start.
                            </p>
                        </div>
                        <div>
                            <p>
                                Project start @ test lab. Status viewable in WorkZone. Standard viewable in TechStreet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="test_programs">
                <div>
                    <p>
                        Certification test programs for various technology products may be booked using the eSource platform
                        that typically involves a multi-lab selection process and assures access to resources such as the
                        WorkZone project management platform and pertinent standards from TechStreet. Client test program
                        requests submitted should include:
                    </p>
                </div>
                <div>
                    <ul class="programs_list">
                        <li class="before_circle">
                            Product description including power source (battery, power supply): e.g. Tablet, RFID system,
                            battery powered
                        </li>
                        <li class="before_circle">
                            Testing objectives/standards: e.g. FCC Part 15 Emissions, CE EN 55022
                        </li>
                        <li class="before_circle">
                            Target countries for marketing: e.g. USA, Canada, European Union, Australia
                        </li>
                        <li class="before_circle">
                            Notes about certification: e.g. operating modes, installation scenarios, etc.
                        </li>
                        <li class="before_circle">
                            Preferred start date
                        </li>

                    </ul>
                </div>
                <div>
                    <p>
                        The following chart illustrates how the certification process is subsequently handled:
                    </p>
                </div>
            </div>


            <div class="workflows_banner">
                <div class="head_name">
                    <p class="text m-l_0">
                        Certification Process
                    </p>
                </div>

                
                <!-- certificationProcess 2 -->
                <div class="certificationProcess">
                    <div class="line_banner">
                        <div class="special_line">
                            <span class="circle"></span>
                            <span class="day_is">1 day</span>
                            <span class="circle"></span>
                            <span class="day_is">5 days</span>
                            <span class="circle"></span>
                            <span class="day_is">7 days</span>
                            <span class="circle"></span>
                        </div>
                    </div>
                    <div class="text_bar">
                        <div>
                            <p>
                                Request submitted to Telcron. Product description, service objectives defined.
                            </p>
                        </div>
                        <div>
                            <p>
                                Project Plan delivered by Telcron including cost / schedule.
                            </p>
                        </div>

                        <div>
                            <p>
                                Client review plan and accepts or makes changes
                            </p>
                        </div>

                        <div>
                            <p>
                                Product sample & documents submitted to lab. Status viewable in WorkZone. Standard viewable in
                            </p>
                            TechStreet.
                        </div>
                    </div>
                </div>
            </div>

            <div class="test_programs our_lab">
                <div>
                    <p>
                        Our lab partners are designated to perform various electromagnetic compatibility standards based tests
                        pursuant to their ISO/IEC 17025 accreditation by entities such as
                        A2LA</a>, <a href="#">NVLAP</a>, <a href="#">SCC</a>, <a href="#">IECEE</a>, <a href="#">UKAS</a>,
                        <a href="#">ILAC</a>, <a href="#">DAkks</a>
                    </p>
                </div>
                <div>
                    <p>
                        And the accreditation program for product safety in US workplaces per the Occupational Safety and Health
                        Administration (OSHA) is the <a href="#">NRTL Program</a>. Of note, two partner labs – MET Laboratories
                        and TUV
                        Rheinland of North America have CB Scheme Testing Laboratories <a href="#">(CBTL)</a> designation and
                        are allowed to
                        perform necessary product safety evaluation applicable to certain technology products pursuant to
                        requirements such as IEC 60950-1 among others under the CB Scheme program.
                    </p>
                </div>
                <div class="m-b_0">
                    <p>
                        Bookings for pre-certification or certification tests obviate the need for a quote; but the attached
                        Form can be sent to info@telcron.net for a quote if needed.
                    </p>
                </div>
            </div>


            <div class="reserve_lab">
                <div class="test_banner">
                    <div class="icon-bar">
                        <img src="{{asset('images/PrecertificationTesting.png')}}" alt="Precertification Testing"
                             title="Precertification Testing">
                    </div>
                    <div class="text_bar">
                        <a href="{{route('book_lab')}}" style="color: #9B0405;">
                        	<p>Reserve Lab for Precertification Testing</p>
                    	</a>
                    </div>
                </div>
                <div class="test_banner rfq">
                    <div class="icon-bar">
                        <img src="{{asset('images/CertificationTest.png')}}" alt="Certification Test"
                             title="Certification Test">
                    </div>
                    <div class="text_bar">
                        <a href="{{route('submitrfq')}}" style="color: #9B0405;">
                        	<p>Submit RFQ for Certification Test</p>
                    	</a>
                    </div>
                </div>
            </div>

            <div class="test_programs">
                <p>
                    The growing footprint of test labs being worked with is illustrated in the following map:
                </p>
            </div>


            <div class="locatedMap">
                <div class="container-fluid">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection

