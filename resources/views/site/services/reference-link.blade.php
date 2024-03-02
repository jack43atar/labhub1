@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul  class="pageLocation" >
                <li><a href="#">Services <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="#">Resources <img src="{{asset('images/Back.svg')}}"> </a>
                </li>
                <li><a href="{{route('services.resources.reference_link')}}">Reference Links</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="product product_reference">
            <h2>Reference Links</h2>
            <div class="reference">
                <ul class="safety">
                    <li><span></span><a href="#"> FCC OET Knowledge Database</a> </li>
                    <li><span></span><a href="#"> FCC Basics of Unlicensed Transmitters</a></li>
                    <li><span></span><a href="#"> Modular Transmitter Basics</a> </li>
                    <li><span></span><a href="#"> FCC Combo TX Device Guidance</a></li>
                    <li><span></span><a href="#"> FCC Equipment Authorization Measurement Procedures</a> </li>
                    <li><span></span><a href="#"> FCC TCB Workshop – Equipment Authorization</a> </li>
                    <li><span></span><a href="#"> FCC Certification Application Process</a> </li>
                    <li><span></span><a href="#"> Steps for submittal of application of FCC Form 731</a> </li>
                    <li><span></span><a href="#"> MET Labs Blog</a> </li>
                    <li><span></span><a href="#"> TRaC Global</a> </li>
                    <li><span></span><a href="#"> FCC</a> </li>
                    <li><span></span><a href="#"> Consumer Electronics Association</a> </li>
                    <li><span></span><a href="#"> A2LA</a> </li>
                    <li><span></span><a href="#"> NVLAP</a> </li>
                    <li><span></span><a href="#"> IN Compliance Magazine</a> </li>
                    <li><span></span><a href="#"> Interference Technology</a> </li>
                    <li><span></span><a href="#"> Electronics Weekly</a> </li>
                    <li><span></span><a href="#"> UL Online Certifications Directory</a> </li>
                    <li><span></span><a href="#"> CTIA</a> </li>
                    <li><span></span><a href="#"> Bluetooth SIG</a> </li>
                    <li><span></span><a href="#"> BQTF</a> </li>
                    <li><span></span><a href="#"> WiFi Alliance</a> </li>
                    <li><span></span><a href="#"> R&TTE Directive</a> </li>
                    <li><span></span><a href="#"> EMC Directive</a> </li>
                    <li><span></span><a href="#"> Low Voltage Directive</a> </li>
                    <li><span></span><a href="#"> Industry Canada Radio, Spectrum and Telecommunications</a> </li>
                    <li><span></span><a href="#"> Industry Canada Radio Equipment List</a> </li>
                    <li><span></span><a href="#"> FCC OET Equipment Authorization</a> </li>
                    <li><span></span><a href="#"> GSM Association</a> </li>
                    <li><span></span><a href="#"> CDMA Development Group</a> </li>
                    <li><span></span><a href="#"> CDMA Certification Forum</a> </li>
                    <li><span></span><a href="#"> BSMI Marks and Labels</a> </li>
                </ul>
                <ul class="safety">
                    <li><span></span><a href="#"> CEPT</a> </li>
                    <li><span></span><a href="#"> OFCOM</a> </li>
                    <li><span></span><a href="#"> ERO Frequency Information System (EFIS)</a> </li>
                    <li><span></span><a href="#"> CENELEC</a> </li>
                    <li><span></span><a href="#"> ARIB</a> </li>
                    <li><span></span><a href="#"> ARCEP</a> </li>
                    <li><span></span><a href="#"> ACMA</a> </li>
                    <li><span></span><a href="#"> EMC Information Centre</a> </li>
                    <li><span></span><a href="#"> ECO</a> </li>
                    <li><span></span><a href="#"> OMA</a> </li>
                    <li><span></span><a href="#"> NFC Forum Authorized Test Lab</a> </li>
                    <li><span></span><a href="#"> PTCRB</a> </li>
                    <li><span></span><a href="#"> 3GPP</a> </li>
                    <li><span></span><a href="#"> ETSI Mobile Communications</a> </li>
                    <li><span></span><a href="#"> CTIA Authorized Test Lab</a> </li>
                    <li><span></span><a href="#"> CTIA Certification Test Plans</a> </li>
                    <li><span></span><a href="#"> CTIA Certification Database</a> </li>
                    <li><span></span><a href="#"> Verizon Wireless Device Certification</a> </li>
                    <li><span></span><a href="#"> AT&T Industry & Mobility Alliance Programs</a> </li>
                    <li><span></span><a href="#"> WiMax Forum</a> </li>
                    <li><span></span><a href="#"> Global Certification Forum</a> </li>
                    <li><span></span><a href="#"> China’s CCC Mark: A Guide for US Exporters</a> </li>
                    <li><span></span><a href="#"> Agilent Solution Briefs: Test & Measurement</a> </li>
                    <li><span></span><a href="#"> NCER</a> </li>
                    <li><span></span><a href="#"> ITU ICT Statistics</a> </li>
                    <li><span></span><a href="#"> OECD Portal on ICT</a> </li>
                    <li><span></span><a href="#"> World Bank Portal on ICT</a> </li>
                    <li><span></span><a href="#"> RFID Journal</a> </li>
                    <li><span></span><a href="#"> AT&T White Paper on Hardware Development</a> </li>
                    <li><span></span><a href="#"> Tablet Demand and Disruption: Mobile Users Come of Age</a> </li>
                    <li><span></span><a href="#"> Why 50% of Products Fail EMC testing the First Time</a> </li>
                    <li><span></span><a href="#"> Why Tablets will become our primary computing device</a> </li>
                </ul>
            </div>
        </div>
    </section>
@endsection