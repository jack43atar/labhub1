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
                <li><a href="{{route('services.eSource')}}">Esource</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="esource">
            <div class="esource_left">
                <h2>Esource</h2>
                <p>For certain technology manufacturers, the decision on a third
                    party compliance testing lab to have their new or update product
                    tested and certified to regulatory or market applicable
                    requirements (FCC, CE, Industry Canada, CB Scheme) isn’t only
                    about cost. It may include other criteria such as prior similar
                    project completed, vendor profile (ownership, service portfolio,
                    quality metrics, location, etc) and an important factor – a
                    willingness to consider multiple competitive lab partners as
                    bidders before making a selection.
                </p>
            </div>
            <div class="esource_right">
                <div class="map">
                    <img src="{{asset('images/maplight.png')}}">
                </div>
            </div>
        </div>
        <div class="esource_second_line">
            <div class="esource_second_line_left">
                <div class="business_massging_list">
                    <div class="line"><span></span></div>
                    <div class="short">
                        <p>Cycle times, and administrative costs cut
                            by up to half or greater
                        </p>
                    </div>
                </div>
                <div class="business_massging_list">
                    <div class="line"><span></span></div>
                    <div class="short">
                        <p>Project options for selection – by least cost, least time
                            to completion, least lab switching, and lab rating
                        </p>
                    </div>
                </div>
                <div class="business_massging_list">
                    <div class="line"><span></span></div>
                    <div class="short">
                        <p>Leverage an eCommerce network for a project
                            experience of choice managed from one interfacer
                        </p>
                    </div>
                </div>
            </div>
            <div class="esource_second_line_right">
                <p>A Radio Frequency Identification (RFID) product family with multiple operating modes and/or installation
                    scenarios needing to be certified in accordance with regulatory requirements in North America and the
                    European Union may have a price tag exceeding $25,000. And three or more testing lab partners in the
                    US/Canada, European Union or in Asia may be capable of completing the project at different prices and
                    schedules. Telcron’s eSourcing process helps to identify lab candidates, and moderate the selection
                    process utilizing Ariba StartSourcing .
                </p>
                <p>   Telcron runs an event (Request for Information/Proposal, or Auction) on the manufacturer’s behalf in
                    Ariba StartSourcing in order to select lab partner(s) for specific projects, and create a tentative project
                    plan report. Labs participating may need to be registered in Ariba’s supplier network.
                </p>
                <p> View a StartSourcing introductory video here . The project plan developed with the lab(s) are then
                    transposed to Work Zone for shared visibility. Manufacturers should allow two weeks in advance of
                    project start to run eSourcing and other coordination steps with labs involved. Only projects with
                    potential spend over $5,000 are recommended for eSource at the present time.
                </p>
            </div>
        </div>
    </section>
@endsection