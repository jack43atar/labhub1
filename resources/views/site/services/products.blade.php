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
                <li><a href="{{route('services.resources.products')}}">Products</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="product">
            <h2>Products</h2>
            <p>Additional resources on electrical product safety may be found at:</p>
            <p>With respect to electromagnetic interference/compatibility, compliance requirements for technology products vary
                depending on whether they intentionally radiate radio frequency energy. Regulatory standards also define limits and
                test methodologies based on home or industrial use environment of the product among other considerations that
                imply a relationship – without regulations/standards, some products may not exist, and vice versa.</p>

            <p>  In the US, FCC Part 15.3(k) defines a digital device as an unintentional radiator that generates and uses timing signals
                or pulses at a rate in excess of 9,000 pulses per second (or 9 KHz) and uses digital techniques for performing data
                processing functions. Computing products such as E-readers (without Wifi) and PC peripherals including monitors,
                disk drives fall in this category, and the vast majority of these unintentional radiators require either verification or
                declaration of conformity for equipment authorization. For equipment that require certification as most intentional
                radiators do, the FCC defines over 60 equipment classes and nearly 200 rule parts as applicable.</p>

            <p> Recommendation 70-03 issued by the pan-European agency CEPT specifies 13 annexes of unlicensed Short Range
                Device (SRD) radio products with limits and radio regulatory parameters they are to be assessed per conformity with
                the European Union R&TTE directive. And for typical information technology equipment without intentional radio
                frequency transmission, a number of product standards such as EN 55022 or EN 55024 may apply pursuant to the
                regulating EMC and Low Voltage Directives.</p>

            <p> Click on the links below to make bookings at the lab, Sporton International – Taiwan for FCC (US), Industry Canada
                (CAN), and CE mark (EU) product testing and certification (Certain assumptions apply to prices quoted in portal –
                reference products are handheld and battery powered; battery presumed to meet applicable regulatory
                specifications.)</p>
            <ul class="system">
                <li>  a) E-reader/Tablet, no WiFi, North America</li>
                <li>  b) Tablet PC, WiFi+3G/4G, North America + EU</li>
                <li>  c) RFID System, 13.56 MHz, North America</li>
                <li>  d) RFID System, 13.56 MHz, North America + EU</li>
            </ul>
            <p>Be sure to select applicable certification standards during booking. As with pre-certification testing, online booking
                of certification testing services obviates the need for a formal lab quotation. You may <a href="#">contact</a>  us to discuss your
                booking.</p>

            <p> To obtain a detailed report that includes multi-lab pricing and schedule options,
                talk to us about our e <a href="#">Source</a>  service.</p>

            <p> *Be advised that additional charges may apply should the actual product or its operating modes be found to differ
                materially from the representative products used to generate pricing. Telcron assumes no responsibility for such
                additional charges. Refer to<a href="#">WiFi Alliance 2012 Gadget</a>  Guide for representative Tablet PC and<a href="#"> Merchant warehouse</a>
                for the 13.56 MHz RFID reader. Other charges, terms and conditions may also apply as reasonably determined by the
                lab upon assessing work completed, or time committed to project completion.</p>
        </div>
    </section>
@endsection