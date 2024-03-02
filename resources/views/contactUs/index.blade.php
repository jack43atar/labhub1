@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/contact_us.css')}}">
<style>
.second_menu ul {
    align-items: flex-end;
    padding-top: 35px;
    padding-bottom: 30px;
    padding-left: 245px;
    margin-left: auto;
    margin-right: auto;
}
</style>
@endsection
@section('content')
<div>
    <div class="second_menu">
        <ul class="pageLocation"></ul>
        <header>
            <div class="container" style="background-color: white;">
                <div id="lblHeader" class="topright_wrap">
                    <nav>
                        <ul>
                            <li class=""><a href="{{route('submitrfq')}}" title="Basics" tabindex="0">Basics</a></li>
                            <li><a href="{{url('submit-rfq/devices')}}" title="Devices" tabindex="0">Devices</a></li>
                            <li><a href="{{url('submit-rfq/modules')}}" title="Module" tabindex="0">Modules</a></li>
                            <li class="active"><a href="{{url('submit-rfq/get-certified')}}" title="Network Ready" tabindex="0">Get Certified</a></li>
                            <li><a href="{{url('lab-reservation/faqs')}}" title="FAQ" tabindex="0">FAQ</a></li>
                            <li><a href="{{route('contactus')}}" title="Contact" tabindex="0">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        @include('partials.sign_in_log_out')
    </div>
    <section id="ContentPlaceHolder1_lblSection" class="cnterbanner_wrap contact_banner" role="banner">
        <div class="cnterbanner_headings">
            <div tabindex="0">
                <heading>
                    <h1 class="fs28" style="padding-top: 0px;">Contact the Testlabhub IoT Devices Team</h1>
                    <p style=" text-align: justify;">Do you need specific information to help achieve certification for your unique device, module or chipset? Contact the Testlabhub IoT Devices team. We are highly experienced in analyzing challenges and recommending the best solutions.</p>
                </heading>
            </div>
        </div>
    </section>
    <section class="body_wrap" role="main" style="padding: 0px 5%;">
        <div class="container contact_wrap" tabindex="0">
            <div class="spacer"></div>
            <p style="font-size: 16px;">
                Please complete the form below and an Testlabhub specialist will contact you.
            </p>
            <div class="form_wrap">
                <form action="{{route('submitrfq.contactus')}}" method="POST">
                    @CSRF
                    <div class="row">
                        <div class="col-12">
                            <div class="field_wrap note" style="padding-bottom: 0px;">
                                <span class="rf">*</span> Required fields
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="field_wrap">
                                <label for="first_name" class="lbl_wrap">First name <span class="rf">*</span></label>
                                <div class="input_wrap">
                                    <input name="first_name" type="text" id="first_name" class="@error('first_name') is-invalid @enderror form-control">
                                    <span class="validationSp">Please enter first name</span>
                                    @error('first_name')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="field_wrap">
                                <label for="last_name" class="lbl_wrap">Last name <span class="rf">*</span></label>
                                <div class="input_wrap">
                                    <input name="last_name" type="text" id="last_name" class="@error('last_name') is-invalid @enderror form-control">
                                    <span class="validationSp">Please enter last name</span>
                                    @error('last_name')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="field_wrap">
                                <label for="email" class="lbl_wrap">Email address <span class="rf">*</span></label>
                                <div class="input_wrap">
                                    <input name="email" type="text" id="email" class="@error('email') is-invalid @enderror form-control">
                                    <span class="validationSp">Please enter email address</span>
                                    @error('email')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="field_wrap">
                                <label for="phone" class="lbl_wrap">Phone <span class="rf">*</span></label>
                                <div class="input_wrap">
                                    <input name="phone" type="text" id="phone" data-mobile="mobile" class="@error('phone') is-invalid @enderror form-control">
                                    <span class="validationSp">Please enter phone number</span>
                                    @error('phone')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="field_wrap">
                                <label for="company_name" class="lbl_wrap">Company name <span class="rf">*</span></label>
                                <div class="input_wrap">
                                    <input name="company_name" type="text" id="company_name" class="@error('company_name') is-invalid @enderror form-control">
                                    <span class=" validationSp">Please enter company name</span>
                                    @error('company_name')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="field_wrap">
                                <label for="comment" class="lbl_wrap">Comments <span class="rf">*</span></label>
                                <div class="input_wrap">
                                    <textarea style="height: 250px;" name="comment" id="comment" class="@error('comment') is-invalid @enderror form-control"></textarea>
                                    <span class="validationSp">Please enter comment</span>
                                    @error('comment')
                                    <div class="alert alert-danger" style="margin-top: 3px">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START CAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6LdgqQcUAAAAAOrnrx_d3kmOqcOUz4afELcKuJdZ"></div>
                    <!-- END CAPTCHA -->
                    <p style="font-size: 16px; color: red;" id="pMsg"></p>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="bttn blue" style="min-width: 240px; float: right;">Contact Us</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
@section('javascripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection