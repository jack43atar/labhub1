@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/labRating/labRating.css') }}">
<style>
    .modal-red .modal-header {
        background-color: #700203;
        color: white;
        ;
    }

    .pagination>li>a,
    .pagination>li>span {
        color: #700203;
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        background-color: #700203;
        border-color: #700203;
    }

    .fitContent {
        width: fit-content;
        margin-left: 7px;
    }

    span small a,
    table tr td a {
        align-items: center;
        display: inline;
        color: #ff9999;
    }

    table th {
        background-color: darkred;
        color: #FFFFFF;
        text-align: center;
    }

    input[type=button] {
        background-color: #fe1a00;
        width: 49%;
        cursor: pointer;
        color: whitesmoke;
    }

    #intextbox {
        margin-left: 32%;
    }

    @media screen and (max-width: 768px) {
        #intextbox {
            margin-left: auto;
        }
    }

    @media screen and (max-width: 768px) and (min-width:320px) {
        ul .pagination {
            overflow: hidden;
            min-width: 300px;
            margin-left: auto;
            margin-right: auto;
            align-content: center;
        }
    }

    .modal-md .modal-dialog {
        max-width: 50%;
    }

    /* Set a max-width for the option text */
    select#usually {
        width: 50%;
        max-width: 100%;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>
<style>
    /* Style the selected rating text */
    #selectedRating {
        color: gold;
        /* Set the color of the stars to gold */
        font-size: 18px;
        /* Adjust the font size as needed */
        margin-top: 5px;
        /* Add spacing from the stars */
    }
</style>
@endsection
@section('content')
<div>
    <!--Logged In User Detail -->
    <div class="second_menu">
        <ul class="pageLocation"></ul>
        @include('partials.sign_in_log_out')
    </div>
    <!-- // Logged In User Detail -->
    <div style="background-color: #700203; border: 1px solid white; width: 100%;">
        <div class="container" style="margin-top: 10px; margin-bottom: 10px; ">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="card" id="card">
                        <div class="card-header">
                            <div class="col-md-12">
                                <a href="{{route('book_lab')}}"><input type="button" id="submitLAB" value="Click here to: Reserve Lab for Precertification Testing"></a>
                                <a href="{{route('submitrfq')}}"><input type="button" id="submitRFQ" value="Click here to: Submit RFQ for Certification Test"></a>
                            </div>
                            <h2 style="margin-top: 3%;">
                                <b> LAB RATINGS / DIRECTORY</b>
                            </h2>
                            <div class="wpbdp-main-links" style="margin-top: 3%; grid-auto-columns: auto;">
                                <a href="{{url('lab-rating-directory/submit-listing')}}">
                                    <input type="submit" class="button1" value="Submit A Listing">
                                </a>
                                <a href="{{url('lab-rating-directory/view-listing')}}">
                                    <input type="submit" class="button2" value="View Listings">
                                </a>
                                <a href="{{url('lab-rating-directory')}}">
                                    <input type="submit" class="button3" value="Directory">
                                </a>
                                <!-- Search Functionality -->
                                <form action="/search" method="POST" role="search" style="display:contents">
                                    @csrf
                                    <input type="text" for="search" name="search" placeholder="Search..." style=" margin-left: 35%; border: none; background-color: #c1e0ff; background-size: auto; height: 32px;" />
                                    <span>
                                        <button type="submit" id="search" class="btn btn-default button4">search lisings </button>
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5>
                                @if(isset($data))
                                    @if(count($data) > 0)
									<h2 class="text-center"><b>Search Results : {{$count}} Labs Found</b></h2>
                                        @foreach($data as $result)
                                        <div class="card">
                                            <span class="ml-2"><h3>
                                                <a href="{{route('labReservationOne')}}" style="color:black;"><b>{{$result->firm_name}} - {{$result->city}} - {{$result->country}}</b></a></h3><br>
                                                <span class="primary" style="color: #039;">
                                                    <a href="{{route('labReservationOne')}}" style="color: #272e31;"> Sign-up or Login</a>
                                                    to view more listing information
                                                </span>
                                                <br>
                                                <span>
                                                    <small> Equipment:
                                                        <a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                    </small>
                                                </span><br>
                                                <span>
                                                    <small>Accreditation:<a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                    </small>
                                                </span><br>
                                                <span>
                                                    <small>Test Methods:<a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                    </small>
                                                </span><br>
                                                <span>
                                                    <small>Test Standards:<a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                    </small>
                                                </span><br>
                                            </span><br>
                                            <p class="ml-2"> Pre-Certification Ratings</p><br>
                                            <table style="width: 70%;" align="center" border="1">
                                                <th>Overall Rating</th>
                                                <th>Would use again</th>
                                                <th>On Time</th>
                                                <th>On Budget</th>
                                                <tr style="text-align: center;">
                                                    <td>
                                                        <div class="rate">
                                                            <input type="radio" id="star5" class="rate" name="rating" value="5" hidden />
                                                            <label for="star5" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" checked id="star4" class="rate" name="rating" value="4" hidden />
                                                            <label for="star4" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" id="star3" class="rate" name="rating" value="3" hidden />
                                                            <label for="star3" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" id="star2" class="rate" name="rating" value="2" hidden />
                                                            <label for="star2" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" id="star1" class="rate" name="rating" value="1" hidden />
                                                            <label for="star1" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                    <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                    <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p class="ml-2"> Certification Ratings</p>
                                            <br>
                                            <table style="width: 70%;" align="center" border="1">
                                                <th>Overall Rating</th>
                                                <th>Would use again</th>
                                                <th>On Time</th>
                                                <th>On Budget</th>
                                                <tr style="text-align: center;">
                                                    <td>
                                                        <div class="rate">
                                                            <label for="star5" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" id="star5" class="rate" name="rating" value="5" hidden />
                                                            <label for="star4" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" checked id="star4" class="rate" name="rating" value="4" hidden />
                                                            <label for="star3" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" id="star3" class="rate" name="rating" value="3" hidden />
                                                            <label for="star2" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" id="star2" class="rate" name="rating" value="2" hidden />
                                                            <label for="star1" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                            <input type="radio" id="star1" class="rate" name="rating" value="1" hidden />
                                                        </div>
                                                    </td>
                                                    <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                    <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                    <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                </tr>
                                            </table>
                                            <h5 class="ml-2">Tags:</h5>
                                            <a href="{{route('labReservationOne')}}" class="fitContent" class="ml-2 mb-2">
                                                <input type="submit" class="button1" value="VIEW">
                                            </a>
                                        </div>
                                        @endforeach
                                        <div style="margin-left: 27%; margin-bottom: 2%; margin-top: 2%;">
                                        {{$data->links()}}
                                        </div>
                                    @else
                                    <p class="text-center">No Results found.</p>
                                    @endif
                                @else
                                @foreach($viewListing as $viewListings)
                                    <div class="card">
                                        <span class="ml-2">
                                            <h3><a href="{{route('labReservationOne')}}" style="color:black;"><b>{{$viewListings->firm_name}} - {{$viewListings->city}} - {{$viewListings->country}}</b></a></h3><br>
                                            <span class="primary" style="color: #039;">
                                                <a href="{{route('labReservationOne')}}" style="color: #272e31;"> Sign-up or Login</a>
                                                to view more listing information
                                            </span>
                                            <br>
                                            <span>
                                                <small> Equipment:
                                                    <a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                </small>
                                            </span><br>
                                            <span>
                                                <small>Accreditation:<a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                </small>
                                            </span><br>
                                            <span>
                                                <small>Test Methods:<a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                </small>
                                            </span><br>
                                            <span>
                                                <small>Test Standards:<a href="{{route('labReservationOne')}}">(Members Only)</a>
                                                </small>
                                            </span><br>
                                        </span><br>
                                        <p class="ml-2 mb-2"> <!-- Code Added -->
                                        <a href="#" id="submitLAB" data-toggle="modal" style="color: #700203;" data-target="#preCertificationModal" title="Precertification Testing">
                                            Pre-Certification Rating :
                                        </a>
                                        <!-- Code Added --></p>
                                        <br>
                                        <table style="width: 70%;" align="center" border="1">
                                            <th>Overall Rating</th>
                                            <th>Would use again</th>
                                            <th>On Time</th>
                                            <th>On Budget</th>
                                            <tr style="text-align: center;">
                                                <td>
                                                    <div class="rate">
                                                        <input type="radio" id="star5" class="rate" name="rating" value="5" hidden data-value="5"/>
                                                        <label for="star5" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" checked id="star4" class="rate" name="rating" value="4" hidden data-value="4"/>
                                                        <label for="star4" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="star3" class="rate" name="rating" value="3" hidden data-value="3"/>
                                                        <label for="star3" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="star2" class="rate" name="rating" value="2" hidden data-value="2"/>
                                                        <label for="star2" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="star1" class="rate" name="rating" value="1" hidden data-value="1"/>
                                                        <label for="star1" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                    </div>
                                                </td>
												<!-- Code Added -->
                                            <td style="display: none;">
                                                <div id="selectedRating"></div>
                                            </td>
                                            <!-- Code Added -->
                                                <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                            </tr>
                                        </table>
                                        <br>
                                        <p class="ml-2"> <!-- Code Added -->
                                        <a href="#" data-toggle="modal" style="color: #700203;" data-target="#certificationModal" title="Certification Testing" title="Certification Testing">
                                            Certification Rating :
                                        </a>
                                        <!-- Code Added --></p>
                                        <br>
                                        <table style="width: 70%;" align="center" border="1">
                                            <th>Overall Rating</th>
                                            <th>Would use again</th>
                                            <th>On Time</th>
                                            <th>On Budget</th>
                                            <tr style="text-align: center;">
                                                <td>
                                                    <div class="rate">
                                                        <label for="star5" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="star5" class="rate" name="rating" value="5" hidden />
                                                        <label for="star4" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" checked id="star4" class="rate" name="rating" value="4" hidden />
                                                        <label for="star3" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="star3" class="rate" name="rating" value="3" hidden />
                                                        <label for="star2" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="star2" class="rate" name="rating" value="2" hidden />
                                                        <label for="star1" title="text"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="star1" class="rate" name="rating" value="1" hidden />
                                                    </div>
                                                </td>
                                                <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                                <td><a href="{{route('labReservationOne')}}">(Members Only)</a></td>
                                            </tr>
                                        </table>
                                        <h5 class="ml-2">Tags:</h5>
                                        <a href="{{route('labReservationOne')}}" class="fitContent" class="ml-2 mb-2">
                                            <input type="submit" class="button1" value="VIEW">
                                        </a>
                                    </div>
                                @endforeach
                                    <div style="margin-left: 27%; margin-bottom: 2%; margin-top: 2%;">
                                        {{$viewListing->links()}}
                                    </div>
                                @endif
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('book_lab')}}">
                                <input type="button" title="Reserve Lab for Precertification Testing" value="Click here to: Reserve Lab for Precertification Testing">
                            </a>
                            <a href="{{route('submitrfq')}}">
                                <input type="button" title="Submit RFQ for Certification Test" value="Click here to: Submit RFQ for Certification Test">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Include Modal -->
@include('modal/preCertificationModal')
@include('modal/certificationModal')
<!-- Incllude Modal -->
@section('javascripts')
<script src="{{asset('libs/js/jquery-3.3.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        var itemCount = "{{ $itemCount }}";
        $('input.rate').each(function() {
            var dataValue = parseInt($(this).attr('data-value'));
            if (dataValue === parseInt(itemCount)) {
                $('#selectedRating').html($(this).next('label').html());
                $(this).prop('checked', true);
                $('input.rate').not(this).prop('checked', false);
                return false;
            }
        });
    });
</script>
@endsection


<style>
    .pagination>li>a,
    .pagination>li>span {
        color: #700203;
        /* use your own color here */
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        background-color: #700203;
        border-color: #700203;
    }

    .fitContent {
        width: fit-content;
        margin-left: 7px;
    }

    span small a,
    table tr td a {
        align-items: center;
        display: inline;
        color: #ff9999;
    }

    table th {
        background-color: darkred;
        color: #FFFFFF;
        text-align: center;
    }

    input[type=button] {
        background-color: #fe1a00;
        width: 49%;
        cursor: pointer;
        color: whitesmoke;
    }
</style>