@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="#">Services  <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="#">Resources <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="{{route('services.resources.product_safety')}}">Product Safety</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="product">
            <h2>Product Safety</h2>
            <p>Product safety relates to measures to assure there is adequate protection for users in a product’s intended operating
                environment from the potential for electrical shock, fire, mechanical or chemical hazard, among other concerns.</p>

            <p> Many information technology products are increasingly battery powered, and certain safety requirements apply to
                batteries on a standalone basis and as part of an end product in assuring product safety. Suppliers of internal or
                external power supplies typically perform required safety tests on these supplies prior to sale, but additional
                evaluation of the supplies as part of an end system is necessary to assure product safety of the system. In the US, by
                mandate of Occupational Safety and Health Administration (OSHA), many information technology products used in
                the workplace are required to be assessed for safety by a Nationally Recognized Testing Laboratory (NRTL) that
                include UL, TUV, CSA, ETL, or MET, and involve UL/CSA 60950-1 evaluation.</p>

            <p> As part of their CE-mark requirements in the European Union, information technology products are required to meet
                certain product safety standards, typically the EN 60950-1. On a global scale, the CB Scheme program is an
                internationally backed conformity testing and certification system with over 50 member countries covering product
                safety – it speeds up the process to achieve product safety certifications at the country level via mutual recognition of
                assessment to IEC standards such as IEC 60950-1. CBTL <a href="#">testing labs</a>  including MET Labs and TUV Rheinland are able to
                complete evaluation of technology products to achieve CB Scheme certification.</p>
            <div class="additional">
                <p>Additional resources on electrical product safety may be found at:</p>
                <ul class="safety">
                    <li><span></span><a href="#"> US Fire Administration</a> </li>
                    <li><span></span><a href="#"> Underwriters Laboratories</a></li>
                    <li><span></span><a href="#"> Consumer Product Safety Commission</a> </li>
                    <li><span></span><a href="#"> OSHA NRTL</a></li>
                    <li><span></span><a href="#"> NFPA</a> </li>
                    <li><span></span><a href="#"> National Electrical Code</a> </li>
                    <li><span></span><a href="#"> Canadian National Electrical Code + Handbook</a> </li>
                    <li><span></span><a href="#"> IECEE CB Scheme</a> </li>
                </ul>
            </div>
        </div>
    </section>
@endsection