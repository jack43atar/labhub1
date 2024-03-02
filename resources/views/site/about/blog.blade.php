@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection
@section('content')
    <section class="home">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="#">About<img src="{{asset('images/Back.svg')}}" alt=""></a></li>
                <li><a href="#">Blog</a>
            </ul>

            @include('partials.sign_in_log_out')

        </div>

        <div class="blog_section">
            <div class="left_banner">
                <div>
                    <div class="head_name">
                        <h1>Blog</h1>
                    </div>
                </div>
                <div class="supporter">
                    <div class="banner">
                        <span class="red_border"></span>
                        <div class="supporter_date">
                            <p>18/Nov/2019</p>
                        </div>
                        <div class="supporter_head_text">
                            <h2>
                                Telcron is a proud supporter of the Wounded Warrior Project.
                            </h2>
                        </div>
                        <div class="supporter_text">
                            <p>
                                Ariba’s eCommerce platform is used by over 700,000 suppliers, and its suite of eCommerce
                                solutions handle over $340 bn in transactions per year. Telcron’s eSource offering utilizes
                                ... </p>
                        </div>
                    </div>
                    <div class="banner active">
                        <div class="supporter_date">
                            <p>18/Nov/2019</p>
                        </div>
                        <div class="supporter_head_text">
                            <h2>
                                Telcron is a proud supporter of the Wounded Warrior Project.
                            </h2>
                        </div>
                        <div class="supporter_text">
                            <p>
                                Ariba’s eCommerce platform is used by over 700,000 suppliers, and its suite of eCommerce
                                solutions handle over $340 bn in transactions per year. Telcron’s eSource offering utilizes
                                ... </p>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="supporter_date">
                            <p>18/Nov/2019</p>
                        </div>
                        <div class="supporter_head_text">
                            <h2>
                                Telcron is a proud supporter of the Wounded Warrior Project.
                            </h2>
                        </div>
                        <div class="supporter_text">
                            <p>
                                Ariba’s eCommerce platform is used by over 700,000 suppliers, and its suite of eCommerce
                                solutions handle over $340 bn in transactions per year. Telcron’s eSource offering utilizes
                                ... </p>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="supporter_date">
                            <p>18/Nov/2019</p>
                        </div>
                        <div class="supporter_head_text">
                            <h2>
                                Telcron is a proud supporter of the Wounded Warrior Project.
                            </h2>
                        </div>
                        <div class="supporter_text">
                            <p>
                                Ariba’s eCommerce platform is used by over 700,000 suppliers, and its suite of eCommerce
                                solutions handle over $340 bn in transactions per year. Telcron’s eSource offering utilizes
                                ... </p>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="supporter_date">
                            <p>18/Nov/2019</p>
                        </div>
                        <div class="supporter_head_text">
                            <h2>
                                Telcron is a proud supporter of the Wounded Warrior Project.
                            </h2>
                        </div>
                        <div class="supporter_text">
                            <p>
                                Ariba’s eCommerce platform is used by over 700,000 suppliers, and its suite of eCommerce
                                solutions handle over $340 bn in transactions per year. Telcron’s eSource offering utilizes
                                ... </p>
                        </div>
                        <span class="red_border_b"></span>
                    </div>

                </div>
            </div>
            <div class="right_banner">
                <div class="warrior-project">
                    <h2>Telcron is a proud supporter of the Wounded Warrior Project.</h2>
                </div>
                <div class="img_banner">
                    <img src="{{asset('images/Wounded_Warrior_Project-BlogPage.png')}}" alt="Wounded Warrior Project"
                         title="Wounded Warrior Project">
                </div>
                <div class="written_bar">
                    <p>
                        If you’ve heard about the risk of mobile phone radiation causing cancer, then appreciate RF exposure
                        phenomena. While cancer risk from mobile phones is yet to be definitively proven, the current
                        position by regulatory and industry participants is one of encouraging minimized exposure as much as
                        possible. The health and safety concern isn’t limited to mobile phones, but extends to other devices
                        that intentionally radiate radio energy and may come in close proximity to persons either in a
                        workplace or public environment, such as retail <a href="#">Electronic Article Surveillance
                            equipment</a>.<br> Microwave ovens are an obvious example of how radio energy from radiation heats up
                        food items placed in them, where energy transfer from the radiation results in heating of the food
                        items. Nonetheless, ionizing radiation from X-Rays with electrons split from atoms and molecules is
                        known to carry far more significant health risks than non-ionizing radiation from radio energy, due
                        to higher energy levels transmitted.
                    </p>
                </div>
                <div class="writ_by">
                    <span>Written by</span>
                    <a href="{{route('about.blog.samuel_james')}}" class="author">Samuel James</a>
                </div>
            </div>
        </div>

    </section>
@endsection