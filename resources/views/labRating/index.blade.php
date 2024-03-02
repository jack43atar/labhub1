@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/labRating/labRating.css') }}">
@endsection
@section('content')
<div>
    <!--Logged In User Detail -->
    <div class="second_menu">
        <!-- <ul class="pageLocation"></ul> -->
        <ul class="pageLocation"></ul>
        @include('partials.sign_in_log_out')
    </div>
    <!-- // Logged In User Detail -->
    <div style="background-color: #700203; border: 0px solid white; width: 100%;">
        <div class="container" style="margin-top: 10px; margin-bottom: 10px; ">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="card" id="card">
                        <div class="card-header">
                            <div class="col-md-12">
                                <a href="{{route('book_lab')}}"><input type="button" title="Reserve Lab for Precertification Testing" value="Click here to: Reserve Lab for Precertification Testing"></a>
                                <a href="{{route('submitrfq')}}"><input type="button" title="Submit RFQ for Certification Test" value="Click here to: Submit RFQ for Certification Test"></a>
                            </div>
                            <span style="margin: 5%;"></span>
                            <h2><b> LAB RATINGS / DIRECTORY</b></h2>
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
                            <h2>
                                <b> DIRECTORY</b>
                            </h2>
                            <ul>
							<!--	@foreach($country as $value)
                                <li value="{{$value->country}}">
                                    <a href="#" class="text-muted country-link" data-country="{{$value->country}}">
                                        <img src="{{asset('images/labRating/plus.gif')}}" alt="plusIcon" class="countryName">
                                    </a>
                                    <a href="#" class="text-muted country-link" data-country="{{$value->country}}">
                                        {{$value->country}}
                                    </a>
                                    <span class="city-count"></span>
                                    <ul id="city-list" style="display: none;">
                                        <li id="cities"></li>
                                    </ul>
                                </li>
                                @endforeach -->
								
								 @foreach($country as $item)
                                <li id="country-{{$item->country}}" value="{{$item->country}}" data-index="{{$item->index}}">
                                    <a href="#" class="text-muted country-link" data-country="{{$item->country}}">
                                        <img src="{{asset('images/labRating/plus.gif')}}" alt="plusIcon" class="countryName">
                                    </a>
                                    <a href="#" class="text-muted country-link" data-country="{{$item->country}}">
                                        {{$item->country}}
                                    </a>
                                    <span class="city-count" id="city-count-{{$item->index}}"></span>
                                    <ul id="city-list-{{$item->index}}" class="city-list" style="display: none;"></ul>
                                </li>
                                @endforeach
                                <style>
                                    .city-list {
                                        display: none;
                                    }
                                </style>
                            </ul>
                        </div>
						 <div class="col-md-12">
                            <a href="{{route('book_lab')}}"><input type="button" title="Reserve Lab for Precertification Testing" value="Click here to: Reserve Lab for Precertification Testing"></a>
                            <a href="{{route('submitrfq')}}"><input type="button" title="Submit RFQ for Certification Test" value="Click here to: Submit RFQ for Certification Test"></a>
                        </div>
                    </div>
					<div id="card1" class="card" style="display: none;">
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
                                <form action="/search" method="POST" role="search" style="display:contents">
                                    @csrf
                                    <input type="text" for="search" name="search" placeholder="Search..." style=" margin-left: 35%; border: none; background-color: #c1e0ff; background-size: auto; height: 32px;" />
                                    <span>
                                        <button type="submit" id="search" class="btn btn-default button4">search lisings </button>
                                    </span>
                                </form>
                            </div>
                        </div>
						<!-- Display Here Lab Listing Start-->
						<h2 id="catCount" class="text-center" style="color: #700203;"></h2>
                        <div class="card-body"><h5><div id="lab-list"></div></h5></div>
						<!-- Display Here Lab Listing End-->
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
@section('javascripts')
<script src="{{asset('libs/js/jquery-3.3.1.min.js')}}"></script>
<script>
   // $('.country-link').on('click', function(event) {
    //    event.preventDefault();
    //    var country = $(this).data('country');
    //    fetchCities(country);
    //});

//    function fetchCities(country) {
 //       $.ajax({
  //          url: '/lab-rating-directory/country/' + country,
   //         method: 'GET',
    //        success: function(data) {
     //           var cityList = $('#cities');
      //          cityList.empty();
       //         data.cities.forEach(function(city) {
        //            cityList.append('<li><a style="color:#272e31; cursor:pointer" onclick="fetchLab(\'' + city + '\')">' + city + '</a></li>');
          //      });
            //    var cityCount = data.cities.length;
             //   var cityCountSpan = $('.city-count');
              //  cityCountSpan.text('(' + cityCount + ')');
               // $('#city-list').show();
            //},
            //error: function() {
             //   alert('Error fetching cities.');
           // }
        //});
   // }
	
	   $(document).ready(function() {
        $('.country-link').on('click', function(e) {
            e.preventDefault();
			$('.city-count').text('');
			$('.city-list').hide();
            var country = $(this).data('country');
            var countryIndex = $(this).closest('li').data('index');
            var cityList = $('#city-list-' + countryIndex);
            var cityCountSpan = $('#city-count-' + countryIndex);

            $.ajax({
                url: '/lab-rating-directory/country/' + country,
                method: 'GET',
                success: function(data) {
                    cityList.empty();
                    data.cities.forEach(function(city) {
                        cityList.append('<li><a style="color:#272e31; cursor:pointer;margin-left:9%" onclick="fetchLab(\'' + city + '\')">' + city + '</a></li>');
                    });
                    var cityCount = data.cities.length;
                    cityCountSpan.text('(' + cityCount + ')');
                    cityList.show();
                },
                error: function() {
                    alert('Error fetching cities.');
                }
            });
        });
    });

    function fetchLab(city) {
        // console.log('city Name: ' + city);
        $.ajax({
            url: '/lab-rating-directory/city/' + city,
            method: 'GET',
            success: function(data) {
                console.log('success');
                return false;
            },
            error: function() {
                console.log('Error');
                return false;
            }
        });
    }
	function fetchLab(city) {
        $.ajax({
            url: '/lab-rating-directory/city/' + city,
            method: 'GET',
            success: function(data) {
                $('#card').hide();
                $('#card1').show();
				var couCount = $('#catCount');
                var labList = $('#lab-list');
                labList.empty();
				couCount.empty();
                var labIndex = 0;
                data.data.forEach(function(lab) {
                    var labInfo = `<div class="card">
                                <span class="ml-2"><h3>
                                    <a href="{{route('labReservationOne')}}" style="color:black;"><b>${lab.firm_name} - ${lab.city} - ${lab.country}</b></a></h3><br>
                                    <span class="primary" style="color: #039;"><a href="{{route('labReservationOne')}}" style="color: #272e31;"> Sign-up or Login</a> to view more listing information</span><br>
                                    <span><small> Equipment:<a href="{{route('labReservationOne')}}">(Members Only)</a></small></span><br>
                                    <span><small>Accreditation:<a href="{{route('labReservationOne')}}">(Members Only)</a></small></span><br>
                                    <span><small>Test Methods:<a href="{{route('labReservationOne')}}">(Members Only)</a></small></span><br>
                                    <span><small>Test Standards:<a href="{{route('labReservationOne')}}">(Members Only)</a></small></span><br>
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
                    `;
					var couListPrinted = false;
                    var couList = `<p style="margin-top: 3%;text-transform: uppercase;font-weight:600;letter-spacing:-1px"> Category : ${lab.country}</p>`;
                    if (labIndex === 0 && !couListPrinted) {
                        var couList = `<p style="margin-top: 3%;text-transform: uppercase;font-weight:600;letter-spacing:-1px"> Category : ${lab.country}</p>`;
                        couCount.append(couList);
                        couListPrinted = true;
                    }
                    labList.append(labInfo);
					labIndex++;
                });
            },
            error: function() {
                alert('Error fetching Laboratories.');
            }
        });
    }
</script>
@endsection