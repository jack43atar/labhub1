@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/our_capabilities.css') }}">
@endsection
@section('content')

    <div id="our_capabilities">

        <section class="home">
            <div class="second_menu">
                <ul class="pageLocation">
                    <li><a href="#">About<img src="{{asset('images/Back.svg')}}"> </a>
                    </li>
                    <li><a href="#">Our Capabilities</a>
                    </li>
                </ul>

                @include('partials.sign_in_log_out')

            </div>
            <div>
                <div class="analytic-overview-container">
                    <h1>Our Capabilities</h1>
                    <hr>
                </div>
            </div>

            <div class="info_banner">
                <p>
                    Telcron connects technology manufacturers with test labs that are proficient in their testing needs. Since
                    many standards tend to be written for several product categories, it’s important to distill these standards
                    into modules that apply to specific product groups – to simplify the project scoping process into manageable
                    chunks for the manufacturer and the lab. Manufacturers can then choose to work with labs that are proficient
                    in each relevant area.
                </p>

                <p class="m-b_0">
                    For instance, a breakdown of tests applicable to a 13.56 MHz Radio Frequency Identification (RFID) reader
                    has been done below to FCC Part 15/RSS 210, UL/CSA 60950-1, and harmonized EU standards. Each of the broken
                    down modules are likely to be completed within a half hour to four hours per product operating mode under
                    normal circumstances in planning a test program. It’s possible that not all of these tests apply to each
                    RFID product due to design variations. Product design documentation may need to be reviewed as part of the
                    compliance effort. A manufacturer can hypothetically select lab ABC to satisfy the North American FCC/IC
                    test requirements chunk and lab XYZ to satisfy the North American UL/cUL and European CE test requirements
                    chunk.
                </p>
            </div>
            <div class="capabilities_banner">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" class="region">Region</th>
                        <th scope="col">Test Type</th>
                        <th scope="col">Test Category</th>
                        <th scope="col">Applicable Req (s)</th>
                        <th scope="col">Key</th>
                    </tr>
                    </thead>

                    <!-- NORTH AMERICA (FCC/IC) -->
                    <tbody>
                    <tr>
                        <td colspan="1"></td>
                        <td colspan="4" class="head_name">NORTH AMERICA (FCC/IC)</td>
                    </tr>
                    <tr>
                        <th class="region">NAM</th>
                        <td>Radiated Emissions <30 MHz, TX + sidebands mask</td>
                        <td>FCC/IC, Emissions</td>
                        <td>@15.225, 15.209/RSS 210</td>
                        <td colspan="1" class="box_color_1"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM</th>
                        <td>NARadiated Emissions >30 MHz (Digital Circuitry)</td>
                        <td>FCC/IC, Emissions</td>
                        <td>15.109, RSS 210</td>
                        <td colspan="1" class="box_color_1"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM</th>
                        <td>Radiated Emissions >30 MHz (TX Spurious)</td>
                        <td>FCC/IC, Emissions</td>
                        <td>15.209, RSS 210</td>
                        <td colspan="1" class="box_color_1"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM</th>
                        <td>Emissions Bandwidth</td>
                        <td>FCC/IC, Emissions</td>
                        <td>15.225, RSS 210</td>
                        <td colspan="1" class="box_color_1"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM</th>
                        <td>Frequency Stability</td>
                        <td>FCC/IC, Emissions</td>
                        <td>15.225, RSS 210</td>
                        <td colspan="1" class="box_color_1"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM</th>
                        <td>Conducted Emissions <30 MHz</td>
                        <td>FCC/IC, Emissions</td>
                        <td>15.207, RSS 210</td>
                        <td colspan="1" class="box_color_1"></td>
                    </tr>
                    </tbody>
                    <!-- EUROPE (CE – Mark) -->
                    <tbody>
                    <tr>
                        <td colspan="5" class="head_split"></td>
                    </tr>
                    <tr>
                        <td colspan="1"></td>
                        <td colspan="4" class="head_name">EUROPE (CE – Mark)</td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Radiated Emissions <30 MHz, TX + sidebands mask</td>
                        <td>CE-Emissions</td>
                        <td>EN 300 330-1,2</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Radiated Emissions >30 MHz (Digital Circuitry)</td>
                        <td>CE-Emissions</td>
                        <td>EN 300 330-1,2</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Radiated Emissions >30 MHz (TX Spurious)</td>
                        <td>CE-Emissions</td>
                        <td>EN 300 330-1,2</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Conducted Emissions <30 MHz</td>
                        <td>CE-Emissions</td>
                        <td>EN 300 330-1,2</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Extreme Voltage & Temperatures</td>
                        <td>CE-Emissions</td>
                        <td>EN 300 330-1,2</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Conducted noise on Telco Ports</td>
                        <td>CE-Emissions</td>
                        <td>EN 300 330-1,2</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Receiver Requirements</td>
                        <td>CE-Emissions</td>
                        <td>EN 300 330-1,2</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Harmonics</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-3-2 | EN 301 489</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Flicker</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-3-3 | EN 301 489</td>
                        <td colspan="1" class="box_color_2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>ESD</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-4-2 | EN 301 489</td>
                        <td colspan="1" class="box_color_3"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>EFT</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-4-3 | EN 301 489</td>
                        <td colspan="1" class="box_color_3"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Radiated Immunity</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-4-4 | EN 301 489</td>
                        <td colspan="1" class="box_color_3"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Surge</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-4-2 | EN 301 489</td>
                        <td colspan="1" class="box_color_3"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Conducted Immunity</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-4-6 | EN 301 489</td>
                        <td colspan="1" class="box_color_3"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Voltage Dips & Interrupts</td>
                        <td>CE-Emissions</td>
                        <td>EN 61000-4-11 | EN 301 489</td>
                        <td colspan="1" class="box_color_3"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>H – Field</td>
                        <td>CE-RF Exposure</td>
                        <td>EN 50364 (SubClause 5.1)</td>
                        <td colspan="1" class="box_color_4"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>E – Field</td>
                        <td>CE-RF Exposure</td>
                        <td>EN 50364 (SubClause 5.1)</td>
                        <td colspan="1" class="box_color_4"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">EUR</th>
                        <td>Contact Current</td>
                        <td>CE-RF Exposure</td>
                        <td>EN 50364 (SubClause 5.2)</td>
                        <td colspan="1" class="box_color_4"></td>
                    </tr>

                    </tbody>
                    <!-- NORTH AMERICA (UL/cUL) | EUROPE (CE – Mark) -->
                    <tbody>
                    <tr>
                        <td colspan="5" class="head_split"></td>
                    </tr>
                    <tr>
                        <td colspan="1"></td>
                        <td colspan="4" class="head_name">NORTH AMERICA (UL/cUL) | EUROPE (CE – Mark)</td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>AC Leakage (Touch Currents)</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Protective Earthing (Grounding Integrity)</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Thermal Test including blocked ventilation</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Input Power Current, VA, Power Factor</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Spacings & Separations Evaluation (wiring & mains circuit boards)</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Mains Capacitive Discharge</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Permanence of Markings</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Structure rigidity and impact testing</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Label Compliance review</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Sharp Edge Test</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Enclosure Mounting Security Test</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>AC Circuit Short Circuit Evaluation</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>DC Circuit Short Circuit Evaluation</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>High Humidity Dielectric Strength (48 hour soak required)</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Product Cleaning Tests</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Stability & Drop Tests</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Spillage Test</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Container/Compartment Overflow Test</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Internal flow path leakage</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Hazards relating to gasses, dusts, flammable materials testing</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Heater control failure</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Radiation source testing</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Motor, transformer, testing/construction review</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Plastic flammability testing</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Telephone Networks Testing (all of Section 6 of the Standard)</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="line_split"></td>
                    </tr>
                    <tr>
                        <th class="region">NAM+EUR</th>
                        <td>Connected Networks Testing (all of Section 7 of the Standard)</td>
                        <td>UL/cUL/CE-Safety</td>
                        <td>UL/CSA/EN 60950-1</td>
                        <td colspan="1" class="box_color_5"></td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </section>

    </div>
@endsection




