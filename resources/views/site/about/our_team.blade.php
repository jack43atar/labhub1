@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/our_team.css') }}">
@endsection
@section('content')

    <div id="our_team">
        <section class="home">
            <div class="second_menu">
                <ul class="pageLocation">
                    <li><a href="#">About <img src="{{asset('images/Back.svg')}}"> </a>
                    </li>
                    <li><a href="#">Our Team</a>
                    </li>
                </ul>

                @include('partials.sign_in_log_out')

            </div>
            <div>
                <div class="analytic-overview-container">
                    <h1>Our Team</h1>
                    <hr>
                </div>
            </div>

            <div class="our_team_banner">

                <div class="info_bar">
                    <p>
                        For technology products that may or may not intentionally transmit radio frequency energy to be
                        successfully marketed, the relevant compliance concerns span the domains of electromagnetic
                        compatibility, wireless/radio, product safety, and radio frequency exposure among others. Common
                        certifications that reflect compliance include CE-mark, FCC, IC, UL/cUL, C-Tick, to name a few.
                    </p>
                    <p>
                        Many small to medium sized technology manufacturers may however not have the resources or expertise to
                        commit to meeting these compliance requirements for their products. In addition, given the myriad of
                        product development relationships that exist from product design to manufacturing and marketing, some
                        manufacturers may prefer a particular location to have product compliance testing performed, or
                        coordinate the compliance efforts across multiple testing labs, or in certain cases outsource the
                        compliance testing responsibilities entirely.
                    </p>
                    <p class="m-b_0">
                        Telcron, a Limited Liability Company, was founded on the principle of adding value to the series of
                        steps that technology product manufacturers take to comply with the array of mandatory and voluntary
                        regulatory requirements – this includes finding or booking time at accredited testing labs for pre-
                        production testing, compliance management throughout the product lifecycle, and other consulting
                        services.
                    </p>
                </div>
                <div class="best_team">
                    <div>
                        <h5 class="head_name">Best team to help you realize your business</h5>
                    </div>
                    <div class="img_banner">
                        <img src="{{asset('images/our_team/best_team.png')}}" alt="Best Team" title="Best Team">
                    </div>
                </div>
            </div>
            <div class="values_banner">
                <h5 class="head_name">Our values are:</h5>
                <div class="values_list_banner">
                    <ul class="values_list">
                        <li class="before_circle">Global Reach and Perspective</li>
                        <li class="before_circle">E-Business Process Core</li>
                        <li class="before_circle">Technology Instinct</li>
                        <li class="before_circle">People Leadership</li>
                        <li class="before_circle">Customer Satisfaction</li>
                    </ul>
                    <ul class="values_list">
                        <li class="before_circle">Lifecycle Focus</li>
                        <li class="before_circle">Execution</li>
                        <li class="before_circle">Growth</li>
                        <li class="before_circle">Innovation as lifeblood</li>
                        <li class="before_circle">Corporate Citizenship</li>
                    </ul>
                </div>
            </div>
            <div class="leadership_banner">
                <div class="head_name">
                    <h4>Our leadership team includes:</h4>
                </div>
                <div class="leadership_team">
                    <div class="person_bar">
                        <div class="img_banner">
                            <img src="{{asset('images/our_team/BayoOlabisi.png')}}" alt="Bayo Olabisi" title="Bayo Olabisi">
                        </div>
                        <div>
                            <h4 class="head_name">Bayo Olabisi</h4>
                        </div>
                        <div class="profession">
                            <p>
                                CEO
                            </p>
                        </div>
                    </div>
                    <div class="person_bar">
                        <div class="img_banner">
                            <img src="{{asset('images/our_team/DanKerns.png')}}" alt="Dan Kerns" title="Dan Kerns">
                        </div>
                        <div>
                            <h4 class="head_name">Dan Kerns</h4>
                        </div>
                        <div class="profession">
                            <p>
                                Technical Consultant
                            </p>
                        </div>
                    </div>
                    <div class="person_bar m-b_0">
                        <div class="img_banner">
                            <img src="{{asset('images/our_team/PhilChadwick.png')}}" alt="Phil Chadwick" title="Phil Chadwick">
                        </div>
                        <div>
                            <a class="head_name" href="#">Phil Chadwick</a>
                        </div>
                        <div class="profession">
                            <p>
                                With expertise in standards assessment and product management from
                            </p>
                        </div>
                    </div>
                    <div class="person_bar m-r_0 m-b_0">
                        <div class="img_banner">
                            <img src="{{asset('images/our_team/TerryClancy.png')}}" alt="Terry Clancy" title="Terry Clancy">
                        </div>
                        <div>
                            <h4 class="head_name">Terry Clancy</h4>
                        </div>
                        <div class="profession">
                            <p>
                                With expertise in standards assessment and product management from
                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </section>

    </div>
@endsection




