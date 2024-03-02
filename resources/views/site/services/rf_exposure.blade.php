@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="#">Services <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="#">Resources<img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="{{route('services.resources.rf_exposure')}}">RF Exposure</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="esource rf_exposure">
            <div class="esource_left">
                <h2>RF Exposure</h2>
            </div>
            <div class="exposure_area">
                <div class="exposure">
                    <p>If you’ve heard about the risk of mobile phone radiation causing cancer, then
                        you can appreciate RF exposure phenomena. While cancer risk from mobile
                        phones is yet to be definitively proven, the current position by regulatory
                        and industry participants is one of encouraging minimized exposure as much
                        as possible. The health and safety concern isn’t limited to mobile phones, but
                        extends to other devices that intentionally radiate radio energy and may
                        come in close proximity to persons either in a workplace or public
                        environment, such as retail Electronic Article Surveillance equipment.
                        Microwave ovens are an obvious example of how radio energy from radiation
                        heats up food items placed in them, where energy transfer from the radiation
                        results in heating of the food items. Nonetheless, ionizing radiation from X-
                        Rays with electrons split from atoms and molecules is known to carry far more
                        significant health risks than non-ionizing radiation from radio energy, due to
                        higher energy levels transmitted.</p>

                    <p> The commonly used measure of the rate that radio energy is absorbed by the
                        body is the Specific Absorption Rate or “SAR”. And depending on the product
                        use, body part proximity, and operating frequency, different Maximum
                        Permissible Exposure (MPE) levels are recommended or set by respective
                        agencies based on the threshold levels that harmful biological effects are
                        possible.</p>

                    <p> Limits and guidelines that these devices are evaluated to are issued by
                        national and international entities as FCC OET, ICNIRP, CENELEC, ARPANSA,
                        IEEE. Standards, guidelines and various regulatory/quasi-regulatory groups on
                        RF exposure include:</p>
                </div>
                <div class="esource_right">
                    <p>RF Exposure phenomena (mobile phone SAR Testing)</p>
                    <iframe width="560" height="443"
                            src="https://www.youtube.com/embed/HZ21DX9kA7c"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                    </iframe>
                </div>
            </div>
            <div class="additional_resources">
                <p>Additional resources on electrical product safety may be found at:</p>
                <ul class="safety">
                    <li><span></span><a href="#"> BS EN 50360</a> </li>
                    <li><span></span><a href="#"> BS EN 50364</a></li>
                    <li><span></span><a href="#"> BS EN 50371</a> </li>
                    <li><span></span><a href="#"> EN 62311</a></li>
                    <li><span></span><a href="#"> EN 62479</a> </li>
                    <li><span></span><a href="#"> ANSI/IEEE C95.1</a> </li>
                    <li><span></span><a href="#"> FCC OET Bulletin No. 65</a> </li>
                    <li><span></span><a href="#"> ICNIRP Publications</a> </li>
                    <li><span></span><a href="#"> ARPANSA Publications</a> </li>
                </ul>
            </div>
        </div>
    </section>
@endsection