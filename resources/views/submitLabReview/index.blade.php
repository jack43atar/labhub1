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

    .justify {
        text-align: justify;
    }

    .telcommand {
        border-radius: 6px;
        border: 1px solid #d83526;
        display: inline-block;
        color: #fff;
        font-family: arial;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        text-shadow: 1px 1px 0 #b23e35;
        text-align: center;
        padding-bottom: 5px;
        padding-top: 5px;
        width: 270px;
        -moz-box-shadow: inset 0 1px 0 0 #f29c93;
        -webkit-box-shadow: inset 0 1px 0 0 #f29c93;
        box-shadow: inset 0 1px 0 0 #f29c93;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
        background: -moz-linear-gradient(center top, #fe1a00 5%, #ce0100 100%);
        background-color: #fe1a00;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
    }

    .telcommand:hover {
        cursor: pointer;
        text-decoration: underline;
        background: #6d0019;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzZkMDAxOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjU2JSIgc3RvcC1jb2xvcj0iIzhmMDIyMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNhOTAzMjkiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(top, rgba(109, 0, 25, 1) 0%, rgba(143, 2, 34, 1) 56%, rgba(169, 3, 41, 1) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(109, 0, 25, 1)), color-stop(56%, rgba(143, 2, 34, 1)), color-stop(100%, rgba(169, 3, 41, 1)));
        background: -webkit-linear-gradient(top, rgba(109, 0, 25, 1) 0%, rgba(143, 2, 34, 1) 56%, rgba(169, 3, 41, 1) 100%);
        background: -o-linear-gradient(top, rgba(109, 0, 25, 1) 0%, rgba(143, 2, 34, 1) 56%, rgba(169, 3, 41, 1) 100%);
        background: -ms-linear-gradient(top, rgba(109, 0, 25, 1) 0%, rgba(143, 2, 34, 1) 56%, rgba(169, 3, 41, 1) 100%);
        background: linear-gradient(to bottom, rgba(109, 0, 25, 1) 0%, rgba(143, 2, 34, 1) 56%, rgba(169, 3, 41, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#6d0019', endColorstr='#a90329', GradientType=0);
        border-color: darkred;
    }

    .customButton {
        margin: auto;
        width: fit-content;
        padding: 10px;
        text-align: center;
    }
</style>
@endsection
@section('content')
<div>
    <div class="second_menu">
        <ul class="pageLocation">
            <li><a href="#">Lab Reservation <img src="{{asset('images/Back.svg')}}"></a></li>
            <li><a href="">Submit Lab Review</a></li>
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
                                <h2 style="text-transform: uppercase;">lab review</h2>
                            </div>
                            <div class="card-body">
                                <b>I. Laboratory Survey Appreciation</b>
                                <p class="justify">Members and non members are encouraged to provide feedback through Testlabhub’s Laboratory Review Survey. Non members are also welcome to participate with proof of laboratory use in the last 6 months. Lab Rating access is exclusive to Testlabhub members.</p>
                                <table style="width: 60%;">
                                    <tr>
                                        <td><img src="{{asset('images/VISA-CARD-50$.png')}}" alt="" style="width: max-content;"></td>
                                        <td><br>
                                            <b> &gt; $50 Visa Gift Card</b><br><br>
                                            <p>for submitted surveys after completion of a pre-</p><br>
                                            <p>certification test scheduled through Testlabhub.</p><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('images/VISA-CARD-100$.png')}}" alt="" style="width: max-content;"></td>
                                        <td><br>
                                            <b> &gt; $100 Visa Gift Card</b><br>
                                            <p> for submitted surveys after completion of a</p><br>
                                            <p>certification test scheduled through Testlabhub’s</p><br>
                                            <p>RFQ bid process.</p><br>
                                        </td>
                                    </tr>
                                </table>
                                <p class="justify"><b> &gt; $5 Visa Gift Card</b> for submitted surveys after completion of pre-cert and certification tests <b> not scheduled through Testlabhub.</b></p>
                                <p class="justify"><span style="color:  #FF0000;"> *</span>(must provide proof of lab use in previous 12 months if not scheduled through Testlabhub)</p><br>
                                <b>II. Laboratory Rating Access</b><br><br>
                                <p class="justify">Testlabhub members benefit from access to key laboratory info including laboratory ratings. This enables our members to make informed scheduling decisions with regard to the labs they utilize. Laboratory availability, locations, capabilities and ratings are all accessible to members on the Pre-certification reservation page.</p><br>
                                <p class="justify">Test labs routinely provide services to technology manufacturers to satisfy legal and/or marketing requirements. Like other services measured in the value chain towards successful product introduction to the market, manufacturers want to know how test labs rank with regard to testing and certification services rendered.</p><br>
                                <p class="justify">Please share your review of services utilized at the test lab using the laboratory survey form listed below.</p>
                                <div class="customButton">
                                    <h2>Pre-certification Survey</h2>
                                    <a class="telcommand" href="https://www.surveymonkey.com/" target="_blank">Start Survey</a>
                                    <h2>Certification Survey</h2>
                                    <a class="telcommand" href="https://www.surveymonkey.com/" target="_blank">Start Survey</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection