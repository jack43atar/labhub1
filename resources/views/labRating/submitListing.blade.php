@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/labRating/labRating.css') }}">
@endsection
@section('content')
<div>
    <!--Logged In User Detail -->
    <div class="second_menu">
        <ul class="pageLocation"></ul>
        @include('partials.sign_in_log_out')
    </div>
    <!-- // Logged In User Detail -->
    <!-- Small Session -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <!-- Small Session -->

    <div style="background-color: #700203; border: 1px solid white; width: 100%;">
        <div class="container" style="margin-top: 10px; margin-bottom: 10px; ">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="card" id="card">
                        <div class="card-header">
                            <div class="col-md-12">
                                <a href="{{route('book_lab')}}"><input type="button" value="Click here to: Reserve Lab for Precertification Testing"></a>
                                <a href="{{route('submitrfq')}}"><input type="button" value="Click here to: Submit RFQ for Certification Test"></a>
                            </div>

                            <h2 style="margin-top: 3%;">
                                <b> LAB RATINGS / DIRECTORY</b>
                            </h2>
                            <div class="wpbdp-main-links" style="margin-top: 3%;">
                                <a href="{{url('lab-rating-directory/submit-listing')}}">
                                    <input type="submit" class="button1" value="Submit A Listing">
                                </a>
                                <a href="{{url('lab-rating-directory/view-listing')}}">
                                    <input type="submit" class="button2" value="View Listings">
                                </a>
                                <a href="{{url('lab-rating-directory')}}">
                                    <input type="submit" class="button3" value="Directory">
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2>
                                <b> SUBMIT A LISTING</b>
                            </h2>
                            <form action="{{route('lab.add_submit_listing')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Business Name -->
                                <div class="form-group col">
                                    <label for="businessName"></label>
                                    <input type="text" id="businessName" name="businessName" placeholder="Business Name" class="@error('businessName') is-invalid @enderror form-control" value="{{old('businessName')}}">
                                    @error('businessName')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business Description -->
                                <div class="form-group col">
                                    <label for="shortBusinessDesc"></label>
                                    <input type="text" id="shortBusinessDesc" name="shortBusinessDesc" placeholder="Short Business Description" class="@error('shortBusinessDesc') is-invalid @enderror form-control" value="{{old('shortBusinessDesc')}}">
                                    @error('shortBusinessDesc')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business Description -->
                                <div class="form-group col">
                                    <select name="city" id="city" style="width: 100%;background-color: #fbd0d0;">
                                        <option value=" " disabled selected>-- Choose One --</option>
                                        @foreach($cityListing as $value)
                                        <option value="{{$value->city}}" name="city">{{$value->city}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Long Business Description -->
                                <div class="form-group col">
                                    <label for="longBusinessDesc"></label>
                                    <input type="text" id="longBusinessDesc" name="longBusinessDesc" class="@error('longBusinessDesc') is-invalid @enderror form-control" placeholder="Long Business Description" value="{{old('longBusinessDesc')}}">
                                    @error('longBusinessDesc')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business Street Address -->
                                <div class="form-group col">
                                    <label for="businessStreetAddress"></label>
                                    <input type="text" id="businessStreetAddress" name="businessStreetAddress" class="@error('businessStreetAddress') is-invalid @enderror form-control" placeholder="Business Street Address" value="{{old('businessStreetAddress')}}">
                                    @error('businessStreetAddress')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business City -->
                                <div class="form-group col">
                                    <label for="businessCity"></label>
                                    <input type="text" id="businessCity" name="businessCity" class="@error('businessCity') is-invalid @enderror form-control" placeholder="Business City" value="{{old('businessCity')}}">
                                    @error('businessCity')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business State -->
                                <div class="form-group col">
                                    <label for="businessState"></label>
                                    <input type="text" id="businessState" name="businessState" class="@error('businessState') is-invalid @enderror form-control" placeholder="Business State" value="{{old('businessState')}}">
                                    @error('businessState')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business ZIP -->
                                <div class="form-group col">
                                    <label for="businessZIP"></label>
                                    <input type="number" id="businessZIP" name="businessZIP" class="@error('businessZIP') is-invalid @enderror form-control" placeholder="Business ZIP" value="{{old('businessZIP')}}">
                                    @error('businessZIP')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Business Country -->
                                <div class="form-group col">
                                    <label for="businessCountry"></label>
                                    <input type="text" id="businessCountry" name="businessCountry" class="@error('businessCountry') is-invalid @enderror form-control" placeholder="Business Country" value="{{old('businessCountry')}}">
                                    @error('businessCountry')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business Website Address -->
                                <div class="form-group col">
                                    <label for="businessURL"></label>
                                    <input type="text" id="businessURL" name="businessURL" class="@error('businessURL') is-invalid @enderror form-control" placeholder="Business URL Link" value="{{old('businessURL')}}">
                                    @error('businessURL')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                    <label for="linkTextOpt"></label>
                                    <input type="text" id="linkTextOpt" name="linkTextOpt" class="form-control" placeholder="Link Text(Optional)" value="{{old('linkTextOpt')}}">
                                </div>

                                <!-- Business Phone Number -->
                                <div class="form-group col">
                                    <label for="businessPhoneNumber"></label>
                                    <input type="number" id="businessPhoneNumber" name="businessPhoneNumber" class="@error('businessPhoneNumber') is-invalid @enderror form-control" placeholder="Business Phone Number" value="{{old('businessPhoneNumber')}}">
                                    @error('businessPhoneNumber')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business Fax -->
                                <div class="form-group col">
                                    <label for="businessFax"></label>
                                    <input type="number" id="businessFax" name="businessFax" class="@error('businessFax') is-invalid @enderror form-control" placeholder="Business Fax" value="{{old('businessFax')}}">
                                    @error('businessFax')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Business Contact Email -->
                                <div class="form-group col">
                                    <label for="businessContactEmail"></label>
                                    <input type="email" id="businessContactEmail" name="businessContactEmail" class="@error('businessContactEmail') is-invalid @enderror form-control" placeholder="Business Contact Email" value="{{old('businessContactEmail')}}">
                                    @error('businessContactEmail')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Accrediting Body -->
                                <div class="form-group col">
                                    <label for="accreditingBody"></label>
                                    <input type="text" id="accreditingBody" name="accreditingBody" class="@error('accreditingBody') is-invalid @enderror form-control" placeholder="Accrediting Body" value="{{old('accreditingBody')}}">
                                    @error('accreditingBody')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Test Facility -->
                                <div class="form-group col">
                                    <label for="testFacility"></label>
                                    <input type="text" id="testFacility" name="testFacility" class="@error('testFacility') is-invalid @enderror form-control" placeholder="Test Facility" value="{{old('testFacility')}}">
                                    @error('testFacility')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Test Category -->
                                <div class="form-group col">
                                    <label for="testCategory"></label>
                                    <input type="text" id="testCategory" name="testCategory" class="@error('testCategory') is-invalid @enderror form-control" placeholder="Test Category" value="{{old('testCategory')}}">
                                    @error('testCategory')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Test Standards -->
                                <div class="form-group col">
                                    <label for="testStandard"></label>
                                    <input type="text" id="testStandard" name="testStandard" class="@error('testStandard') is-invalid @enderror form-control" placeholder="Test Standard" value="{{old('testStandard')}}">
                                    @error('testStandard')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Certifications -->
                                <div class="form-group col">
                                    <label for="certification"></label>
                                    <input type="text" id="certification" name="certification" class="@error('certification') is-invalid @enderror form-control" placeholder="Certifications" value="{{old('certification')}}">
                                    @error('certification')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- File Input -->
                                <div class="form-group col">
                                    <div class="custom-file">
                                        <label class="custom-file-label" style="background-color: #fbd0d0;" for="chooseFile">Select file</label>
                                        <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                        @error('file')
                                        <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Button for Submit Listing Data -->
                                <button type="submit" class="button1" style=" position: relative;display: flex; margin: auto;">
                                    submit Listing
                                </button>
                            </form>
                        </div>
						<div class="col-md-12">
                            <a href="{{route('book_lab')}}"><input type="button" title="Reserve Lab for Precertification Testing" value="Click here to: Reserve Lab for Precertification Testing"></a>
                            <a href="{{route('submitrfq')}}"><input type="button" title="Submit RFQ for Certification Test" value="Click here to: Submit RFQ for Certification Test"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection