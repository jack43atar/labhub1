@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/services_consulting.css')}}">
    <link rel="stylesheet" href="{{asset('css/services_consulting_scheme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="#">Services<img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="#">Consulting</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div>
            <div class="analytic-overview-container">
                <h1>Consulting</h1>
                <hr>
            </div>
        </div>

        <div class="lab_review">
            <div class="lab-process">
                <div class="text_banner">
                    <p> Every manufacturer’s challenge on product compliance is unique given the variety of product
                        designs,
                        target countries/markets, and standards. Telcron is committed to offer a customized solution
                        that
                        helps address each manufacturer’s market acceptance needs.</p>

                    <p> The Consumer Electronics Show of January 2012 saw over 3,000 exhibitors showcase 20,000+ new
                        technology product models. Many of these product models require compliance with formal market
                        acceptance requirements that Telcron supports to be eligible for unrestricted sale in the US,
                        Canada, Europe, and Asia-Pacific. A major focus area of ours has been the analysis of standards
                        based test modules by product categories – to simplify test scopes while enabling efficiencies
                        and
                        options to project completion.</p>

                    <p> This analysis identifies typical compliance test modules and process undertaken per product
                        model
                        group at any number of competent test labs. An example case involves radio frequency product
                        needing
                        to meet European and North American test requirements. Other product categories in review
                        include
                        Smartphones, Tablet PCs, RFID systems, PC peripherals, WiFi, Networking, Netbooks/Ultrabooks,
                        and
                        Emerging Technology products.</p>

                    <p> Based on a location preference chosen (or not chosen), a shortlist of lab(s) with capabilities
                        needed to fulfill the compliance objectives during the pre- certification and final
                        certification
                        testing phases is generated as the network chart below illustrates.</p>

                    <p class="m-b_0"> WorkZone ‘s project management software can be used for planning, activity
                        coordination,
                        and
                        document retention associated with pre-certification and certification testing projects – at
                        request
                        and at no cost. A sample WorkZone project outline can be reviewed here.</p>
                </div>
                <div class="img_banner">
                    <div class="lab_img">
                        <img src="{{asset('images/Consulting/lab_process.png')}}" alt="Lab_Process" title="">
                    </div>
                    <div class="lab_result">
                        <div>
                            <h2>Lab Process</h2>
                        </div>
                        <div>
                            <span>Offered</span>
                            <span>Not Offered</span>
                            <span class="m-r_0">Lab Link</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price_analytics">
                <div class="info">
                    <h3>Our eSource offering is then used to compile project pricing and accompanying time to complete.
                        The
                        price-schedule matrix, exclusive of switching costs is shown below:</h3>
                </div>
                <div class="lab_ratings">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col" class="lab_rat_td">Lab / ratings ()-></th>
                            <th scope="col" colspan="2" class="labs_row">Lab A (***)</th>
                            <th scope="col" colspan="2" class="labs_row">Lab B (**)</th>
                            <th scope="col" colspan="2" class="labs_row">Lab C (***)</th>
                            <th scope="col" colspan="2" class="labs_row">Lab D (****)</th>
                            <th scope="col" colspan="2" class="labs_row">Lab E (*****)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="lab_rat_td">Test Standart / Item</th>
                            <td class="price">Price/$</td>
                            <td class="schedule">Schedule/<span class="d_b">days</span></td>
                            <td class="price">Price/$</td>
                            <td class="schedule">Schedule/<span class="d_b">days</span></td>
                            <td class="price">Price/$</td>
                            <td class="schedule">Schedule/<span class="d_b">days</span></td>
                            <td class="price">Price/$</td>
                            <td class="schedule">Schedule/<span class="d_b">days</span></td>
                            <td class="price">Price/$</td>
                            <td class="schedule">Schedule/<span class="d_b">days</span></td>
                        </tr>
                        <tr>
                            <th class="lab_rat_td">FCC Part 15/RRS 210</th>
                            <td>2500</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2500</td>
                            <td>3</td>
                            <td>3000</td>
                            <td>3</td>
                        </tr>
                        <tr class="empty_row">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="lab_rat_td">EN 300 330-1,-2</th>
                            <td>0</td>
                            <td>0</td>
                            <td>2500</td>
                            <td>3</td>
                            <td>2200</td>
                            <td>2</td>
                            <td>2000</td>
                            <td>2</td>
                            <td>2500</td>
                            <td>2</td>
                        </tr>
                        <tr class="empty_row">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="lab_rat_td">EN 50364/EN 50357</th>
                            <td>2000</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2000</td>
                            <td>2</td>
                            <td>2500</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="empty_row">
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="lab_rat_td">EN 301 489-1/3</th>
                            <td>3000</td>
                            <td>4</td>
                            <td>5000</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4000</td>
                            <td>3</td>
                            <td>4500</td>
                            <td>4</td>
                        </tr>
                        <tr class="empty_row">
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="lab_rat_td">EN/IES 60950-1</th>
                            <td>3500</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>3500</td>
                            <td>3</td>
                            <td>3000</td>
                            <td>2</td>
                            <td>3500</td>
                            <td>3</td>
                        </tr>
                        <tr class="empty_row">
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="lab_rat_td">Certification</th>
                            <td>1100</td>
                            <td>5</td>
                            <td>1000</td>
                            <td>7</td>
                            <td>1050</td>
                            <td>7</td>
                            <td>900</td>
                            <td>6</td>
                            <td>1200</td>
                            <td>7</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="info">
                    <h3>
                        And one lab or more labs may be selected based on a number of options criteria – least
                        switching,
                        least
                        cost, least time to completion, and lab rating.
                    </h3>
                </div>
                <div class="lab_matrix">
                    <div class="img_banner">
                        <img src="{{asset('images/Consulting/lab_matrix.png')}}" alt="Lab_Matrix" title="">
                    </div>
                    <div class="matrix_overflow">
                        <div class="head_name">
                            <h4>Lab matrix overiew</h4>
                        </div>
                        <div class="selection_by">
                            <div class="list">
                                <div>
                                    <p>Selection by least</p>
                                    <p>lab switching</p>
                                </div>
                                <ul>
                                    <li>FCC Part 15/RSS 210 @ Lab D</li>
                                    <li>EN 300 330-1,2 @ Lab D</li>
                                    <li>EN 50364/EN50357 @ Lab D</li>
                                    <li>EN 301 489-1/3 @ Lab D</li>
                                    <li>EN/IEC 60950-1 @ Lab D</li>
                                    <li>Certification @ Lab D</li>
                                </ul>
                            </div>
                            <div class="list">
                                <div>
                                    <p>Selection by least time</p>
                                    <p>to completion</p>
                                </div>
                                <ul>
                                    <li>FCC Part 15/RSS 210 @ Lab D</li>
                                    <li>EN 300 330-1,2 @ Lab D</li>
                                    <li>EN 50364/EN50357 @ Lab A</li>
                                    <li>EN 301 489-1/3 @ Lab D</li>
                                    <li>EN/IEC 60950-1 @ Lab D</li>
                                    <li>Certification @ Lab D</li>
                                </ul>
                            </div>
                            <div class="list">
                                <div>
                                    <p>Selection by lowest</p>
                                    <p>cost option</p>
                                </div>
                                <ul>
                                    <li>FCC Part 15/RSS 210 @ Lab A</li>
                                    <li>FCC Part 15/RSS 210 @ Lab A</li>
                                    <li>FCC Part 15/RSS 210 @ Lab A
                                    </li>
                                    <li>EN 301 489-1/3 @ Lab A</li>
                                    <li>EN/IEC 60950-1 @ Lab D</li>
                                    <li>Certification @ Lab C</li>
                                </ul>
                            </div>
                            <div class="list m-r_0">
                                <div>
                                    <p>Selection by</p>
                                    <p>lab rating</p>
                                </div>
                                <ul>
                                    <li>FCC Part 15/RSS 210 @ Lab E</li>
                                    <li>EN 300 330-1,2 @ Lab E</li>
                                    <li>EN 50364/EN50357 @ Lab D</li>
                                    <li>EN 301 489-1/3 @ Lab E</li>
                                    <li>EN/IEC 60950-1 @ Lab E</li>
                                    <li>Certification @ Lab E</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="info">
                    <h3>
                        A project critical path with an estimated schedule is constructed assuming Lab D was selected
                        based
                        on the least lab switching criterion.
                    </h3>
                </div>
            </div>


            <div class="consulting_scheme">
                <div class="scheme_content">
                    <span class="top_text">Days</span>

                    <div class="position-relative">
                    <span class="horizon_ruler">
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
            <span class="vertical_ruler"></span>
        </span>
                        <span class="horizon_ruler"></span>
                        <span class="horizon_ruler"></span>
                        <span class="horizon_ruler"></span>
                        <span class="horizon_ruler"><span class="finish"></span></span>
                        <span class="horizon_ruler m-r_0"></span>
                        <div class="es">
                            <span>Es</span>
                            <span class="category_circle first">Critical</span>
                            <span class="category_circle">Flexible</span>
                            <span class="category_circle">Events</span>
                        </div>
                    </div>
                    <span class="bottom_text">Weeks</span>

                </div>
            </div>

        </div>
    </section>
@endsection
