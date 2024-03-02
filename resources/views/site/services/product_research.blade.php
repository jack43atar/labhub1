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
                <li><a href="#">Resources <img src="{{asset('images/Back.svg')}}"></a>
                </li>
                <li><a href="{{route('services.resources.emc')}}">EMC Overview</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="emc-overview-container">
            <h1>EMC Overview</h1>
            <hr>
            <div class="emc-text">
                <p>Electromagnetic Compatibility (EMC) pertains to the ability of a product to function in its intended environment
                    without unacceptably interfering with other products’ operation, and/or for this product to be immune to externally
                    sourced phenomena. For example, a cable set top box and television in a living room positioned in close proximity
                    without one interfering with the other’s operation, they may be considered electromagnetically compatible.
                </p>

                <p>
                    Compatibility refers to the ability of one product to not interfere with other products in its operating environment,
                    but also refers to the ability or capacity to withstand or be immune to external electromagnetic influence or
                    phenomena that such product may encounter in its operating environment without unacceptable operation. Various
                    regulatory and test standards define limits and procedures to assess whether there is lack of interference, as well as
                    criteria for a product’s immunity from external influence in its operating environment.
                </p>
            </div>
            <div class="emc-video">
                <iframe width="714" height="536"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                <iframe width="714" height="536"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>

                <iframe  width="714" height="536"
                         src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                <iframe width="714" height="536"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
        </div>
    </section>
@endsection