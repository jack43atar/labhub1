@extends('layouts.app')
@section('css')
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .card {
        margin-top: 3%;
        border: 0px solid white;
        width: 100%;
        margin-bottom: 3%;
        border-radius: 20px;
    }

    ul li.pngImage {
        text-align: justify;
        vertical-align: top;
        padding: 0 0 1px 35px;
        margin: 12px 0 0;
        list-style-type: none;
        background: url('../../images/list-marker.png') no-repeat left top;
    }

    .justify {
        text-align: justify;
        margin-top: 1.5%;
    }

    h5 {
        color: #700203;
    }

    ul li a {
        color: black;
    }
</style>
@endsection
@section('content')
<div>
    <div class="second_menu">
        <ul class="pageLocation">
            <li><a href="#">Lab Reservation <img src="{{asset('images/Back.svg')}}"></a></li>
            <li><a href="#">Rewards</a></li>
        </ul>
        @include('partials.sign_in_log_out')
    </div>
    <div style="background-color: #700203; border: 0px solid white; width: 100%;">
        <div class="container" style="margin-top: 10px; margin-bottom: 10px; ">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="card" id="card">
                        <div class="card-header">
                            <div class="title text-center text-danger">
                                <h1>Rewards</h1>
                            </div>
                            <div class="card-body">
                                <h4 style="color: #700203; text-transform: capitalize;">Benefits of lab booking through Testlabhub include:</h4>
                                <ul>
                                    <li class="pngImage">
                                        Ten lab shifts booked and utilized in a twelve month period earns a free lab shift – at one of several labs. For pre-certification test bookings only.
                                    </li>
                                    <li class="pngImage">
                                        Cut cycle times and administrative costs by up to half during final certification test programs.
                                    </li>
                                    <li class="pngImage">
                                        Packaged pricing for multi-category services (for example, product safety, electromagnetic compatibility, wireless/radio communications, radio frequency exposure tests) utilizing <a href="https://www.telcron.net/portfolio-view/esource/">eSource</a> at select lab partners.
                                    </li>
                                    <li class="pngImage">
                                        Use <a href="https://www.telcron.net/lab-reservations/rf-rewards/resources/WorkZone+security+policy+030111+$281$29.pdf">secure</a> document sharing and retention <a href="https://www.workzone.com/">platform</a> for testing projects at one or more test labs.
                                    </li>
                                    <li class="pngImage">
                                        Access to standards or regulations of interest through Testlabhub’s Techstreet subscription (starting August 2012). This is for clients making ten or more pre-certification or certification bookings within a twelve month period.
                                    </li>
                                    <li class="pngImage">
                                        Product Bill of Materials (BOM) scrub for RoHS and REACH regulatory compliance at no additional charge through partnership with <a href="https://www.greensofttech.com/">Greensoft</a> . Comprehensive compliance assessment to RoHS and REACH including Full Declaration to EU Directives are done on a per-project pricing basis driven by the number of parts involved in the assessment.
                                    </li>
                                </ul>
                                <h4 style="color: #700203; text-transform: uppercase;margin-top: 1em;">Rewards</h4>
                                <p class="justify">We are delighted to announce RF Rewards, a new program intended to incentivize product design practices by manufacturers that minimize electromagnetic emissions from electronic equipment in their operating environment in the US and Canada. It is voluntary and open to participation by interested firms that consent to Testlabhub’s terms.</p>
                                <p class="justify">With a proliferation in intentionally radiating electronic equipment being introduced into the marketplace – reflected in the recent endorsement of the 3 to 5 alphanumeric character change in the <a href="http://hraunfoss.fcc.gov/edocs_public/attachmatch/FCC-12-60A1.pdf" style="color: black;">FCC identifier scheme</a> , it’s logical to anticipate electromagnetic emissions and the potential for interference with other devices to rise. Other consumer and business use electronics that don’t intentionally transmit radio frequency energy are also being introduced to market and are within scope of this program. While limits set by regulatory authorities are meant to lessen the probability of interference, we take a step further to allocate credits for equipment that emit low levels of electromagnetic emission relative to the limits, and debits for those that emit high levels relative to the limits.
                                </p>
                                <p class="justify">Only radio frequency equipment that have been regulatory approved within the last five years are eligible for participation. Under this program, credits are earned based on margins relative to mandatory radiated or conducted emission limits in Part 15, Part 18, Part 22, Part 24 and other applicable regulations. Testlabhub reviews the associated test report within two weeks of receipt from the manufacturer, subsequently computing the earned aggregate credits per equipment. Only official test reports issued by accredited testing laboratories are tenable, as well as proof/confirmation of ongoing equipment marketing/sale. There is no limit on equipment per manufacturer, and each mode of device operation will be considered independently for credit unit computation purposes. Original or Class II Permissive Change equipment authorization application reports may be utilized.
                                </p>
                                <p class="justify">If credits have been accrued by a manufacturer and the equipment is no longer offered for sale, such credits may be sold back to Testlabhub at $.001 per credit unit, or to another party at agreed upon market rates that may be higher. We are limiting this program to equipment offered for sale in the US and Canada at the present time but will be considering other geographies in the future. Credit units only have market value within the geography the credits have been computed for, for example, credit gained for equipment evaluated to US or Canadian rules is relevant only in the US or Canada respectively and can only be exchanged for value in each country.
                                </p>
                                <p class="justify">Guidelines for the program’s administration will utilize both radiated and conducted limits as described below:
                                </p>
                                <h5 style="margin-top: 1.5%;"><u>Radiated Limits</u></h5>
                                <p class="justify">1(a) For Class A devices, spurious radiated emission measurements below 960 MHz, margins below the limit in each of the four bands described in 15.109, accrue 10 credit units per 10 dB of below limit measurement at an FCC acceptable laboratory. If using CISPR 22 limits, each of the two bands (30-230 MHz, 230-1000 MHz) will be awarded 20 credit units per 20 dB margin in the two bands.</p>
                                <p class="justify">(a) (i) For Class A devices, spurious radiated emission measurements above 960 MHz (or 1 GHz for CISPR 22), margins below the limit accrue 10 credit units per 10 dB of below limit measurement at an FCC acceptable laboratory.
                                </p>
                                <p class="justify">(b) For Class B devices, spurious radiated emission measurements below 960 MHz, margins below the limit accrue 10 credit units per 10 dB of below limit measurement at an FCC acceptable laboratory. If using the CISPR 22 limits, each of the two bands will be awarded 20 credit units per 20 dB margin in the two bands (30-230 MHz, 230-1000 MHz).
                                </p>
                                <p class="judtify">(b)(ii) For Class B devices, spurious radiated emission measurements above 960 MHz (or 1 GHz for CISPR 22) , margins below the limit accrue 10 credit units per 10 dB of below limit measurement at an FCC acceptable laboratory. If using the CISPR 22 limits, each of the two bands will be awarded 20 credit units per 20 dB margin.
                                </p>
                                <p class="justify">(c) For (a) and (b) above, measurements within the measurement uncertainty margins, based on CISPR 16-4-2 expanded measurement uncertainty computation by the lab, will receive debits, such that a 20 dB debit equates to at limit measurement, decreasing linearly per dB below the limit until the maximum uncertainty margin is reached .
                                </p>
                                <p class="justify">(d) only highest emission measurement data points are used in computation of these credits or debits per frequency band reckoned with.
                                </p>
                                <p class="justify">(e) dB refers to dBuV/m.</p>
                                <h5 style="margin-top: 1.5%;"><u>Conducted limits</u></h5>
                                <p class="justify">2(a) For Class A devices, spurious emission measured below 30 MHz, margins below the limit in each of the four bands, accrue 10 credit units per 10 dB of below limit measurement at an FCC acceptable laboratory. If using the CISPR 22 limits, each of the two bands will be awarded 20 credit units per 20 dB margin.
                                </p>
                                <p class="justify">(b) For Class B devices, spurious emission measured below 30 MHz, margins below the limit accrue 10 credit units per 10 dB of below limit measurement at an FCC acceptable laboratory. If using the CISPR 22 limits, each of the two bands will be awarded 20 credit units per 20 dB margin.
                                </p>
                                <p class="justify">(c) For (a) and (b) above, measurements within the measurement uncertainty margins, based on CISPR 16-4-2 expanded measurement uncertainty computation by the lab, will receive debits, such that a 20 dB debit equates to at limit measurement, decreasing linearly per dB below the limit until the maximum uncertainty margin is reached .</p>
                                <p class="justify">(d) only highest emission measurement data points are used in computation of these credits or debits per frequency band reckoned with.
                                </p>
                                <p class="justify">(e) dB refers to dBuV/m.
                                </p>
                                <p class="justify">3) For other Part 15 Subpart C intentional radiators, margins below the limit accrue 20 credit units per 10 dB of margin at the designated transmit frequency bands of operation inclusive of transmit side-bands, using highest emission measurement data points in credit/debit computation.
                                </p>
                                <p class="justify">4) Unintentional radiators will be subject to the guidelines stated in 1 and 2 above.
                                </p>
                                <h5 style="margin-top: 1.5%;"><u>RF Exposure limits</u></h5>
                                <p class="justify">5) For mobile or portable devices used within 20 cm separation distance of the general public, highest peak measurements below the Specific Absorption Rate (SAR) limits in the appropriate frequency bands stipulated in the applicable guideline, FCC OET 65 (or RSS 102) will be awarded credit units up to a maximum of 50 credit units at each operating mode, assuming 0 credit unit awarded for a measurement at 50% of the limit and 50 credit units at 5% of the limit or lower.
                                </p>
                                <p class="justify">Similar devices to which the general public may be exposed at a separation distance beyond 20 cm and to which Maximum Permissible Exposure (MPE) limits are applicable will be awarded a maximum of 50 credit units when the highest peak measurement is 5% of the limit or lower, linearly decreasing to 0 credit units at 50 % of the limit, for each operating mode. No credit awards apply for SAR or MPE levels over 50% of the limit.
                                </p>
                                <h5 style="margin-top: 1.5%;"><u>Equipment Classes covered</u></h5>
                                <p class="justify">In addition to unintentional radiators (or Part 15 B) devices, the following equipment classes are covered by the above described program:
                                </p>
                                <table style="width: 100%; margin-top: 1.5%;">
                                    <tbody>
                                        <tr>
                                            <td style="width: 220px; font-weight: bold;">Equipment Class</td>
                                            <td style="width: 400px; font-weight: bold;">Description</td>
                                            <td style="width: 220px; font-weight: bold;">Rule Part</td>
                                        </tr>
                                        <tr>
                                            <td>DSS</td>
                                            <td>Part 15 Spread Spectrum Transmitter</td>
                                            <td>15C</td>
                                        </tr>
                                        <tr>
                                            <td>DTS</td>
                                            <td>Digital Transmission System</td>
                                            <td>15C</td>
                                        </tr>
                                        <tr>
                                            <td>DXT</td>
                                            <td>Part 15 Low Power Transceiver, Rx Verified</td>
                                            <td>15C</td>
                                        </tr>
                                        <tr>
                                            <td>DXX</td>
                                            <td>Part 15 Low Power Communication Device Transmitter</td>
                                            <td>15C</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="justify"><a href="#" style="color: black;">Contact Us</a> for additional information about participation in the RF Rewards program.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection