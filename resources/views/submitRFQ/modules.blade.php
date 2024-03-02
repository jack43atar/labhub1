@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/rfq/module.css')}}">
<style>
    .fs24 {
        color: #700203;
    }
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
<div class="module">
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
    <div id="ContentPlaceHolder1_lblSection" role="banner">
        <section role="banner" class="outer_banner modulePagebanner">
            <div class="container">
                <div class="banner_wrap">
                    <div class="ban_table">
                        <div class="ban_content" tabindex="0">
                            <div>
                                <h1 class="fs20" style="padding-top: 0px;">What is Inside Your Device?</h1>
                                <p>Choosing the right module for your Testlabhub device can be the difference between an incredible user experience, or an uncertain one. AT&amp;T provides you with resources to make the best decision on a module for your specific<span>&nbsp;</span>
                                    <g class="gr_ gr_37 gr-alert gr_gramm gr_inline_cards gr_run_anim Punctuation only-del replaceWithoutSep" id="37" data-gr-id="37">project,</g>
                                    <span>&nbsp;</span>while ensuring network compatibility.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="body_wrap" role="main">
            <div class="container">
                <div class="zigzag_wrap wireles_comnctn_wrap" tabindex="0" style="padding: 60px 0px;">
                    <div class="imgry_wrap">
                        <img src="{{asset('rfq/device-wireless-rf.jpg')}}" alt="The Basics" style="max-width: 405px;">
                    </div>
                    <div class="info_wrap">
                        <h2 class="fs24">The most critical aspect at the heart of any Testlabhub device is its wireless (RF) communication capability.</h2>
                        <p>In choosing an AT&amp;T Approved Module, developers must consider the ability or need to handle:</p>
                        <ul class="points" style="margin-left: 0;">
                            <li>Network transitions and varying radio conditions</li>
                            <li>Latency</li>
                            <li>Authentication and network security</li>
                            <li>Transitions from data-only to data/voice</li>
                            <li>Battery consumption and battery usage needs</li>
                            <li>Resending of service requests following a request rejection or<span>&nbsp;</span>
                                <g class="gr_ gr_36 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="36" data-gr-id="36">denial</g>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="take_advntg_section" tabindex="0">
                    <h2 class="fs24">Take Advantage of AT&amp;T Resources to Make the Best Decisions on Your Module.</h2>
                    <ul class="widicons_list twocol">
                        <li class="module_icon1" tabindex="0">
                            <p>Choosing a module from the <a href="#" target="_blank" rel="noopener noreferrer">AT&amp;T Module Catalog</a> saves time, while assuring ongoing network compatibility. See our <a href="#" target="_blank" rel="noopener noreferrer">AT&amp;T Testlabhub Technology Roadmap.</a></p>
                        </li>
                        <li class="module_icon2" tabindex="0">
                            <p>If you’re a module developer, AT&amp;T’s ADAPT program is the fast track to certification of newly developed LTE-capable chipsets. Find our list of chipsets under the<span>&nbsp;<a href="#">ADAPT&nbsp;</a></span>
                                <a href="#">chipset tab on the module catalog</a>
                            </p>
                        </li>
                        <li class="module_icon3" tabindex="0">
                            <p>AT&amp;T’s <a href="#" title="Testlabhub Accelerator Program">Testlabhub Accelerator Program</a> is the most efficient way to accelerate Testlabhub device development; and implementation is through a selection of low-cost,<span>&nbsp;</span>
                                <g class="gr_ gr_38 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling multiReplace" id="38" data-gr-id="38">high performance</g>
                                <span>&nbsp;</span>modules. AT&amp;T has made it quick, easy and economical to obtain these modules by offering them through key suppliers for as low as $7.50 each. Nobody accelerates Testlabhub like AT&amp;T.
                            </p>
                            <p><a href="#" title="Testlabhub Accelerator"><img src="{{asset('images/logo.png')}}" width="100%" style="max-width: 350px;"></a></p>
                        </li>
                        <li class="module_icon4" tabindex="0">
                            <p>The final step in the development process is testing and certification. Go to<span>&nbsp;</span>
                                <a href="#">
                                    <g class="gr_ gr_34 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar multiReplace" id="34" data-gr-id="34">Get</g>
                                    <span>&nbsp;</span>Get Network Ready
                                </a><span>&nbsp;</span>to learn about the simple steps required to get a device certified.
                            </p>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="zigzag_wrap wireles_comnctn_wrap" id="ChipsetDesign" tabindex="0">
                    <div class="info_wrap">
                        <h2 class="fs24">A Word of Caution Regarding Chipset Design.</h2>
                        <p class="mgn-top30"><span>Chipsets are the building blocks for every wireless device but building a wireless radio at the chipset level is difficult and costly.&nbsp; Every AT&amp;T Approved module contains an AT&amp;T Validated chipset at its core.&nbsp;&nbsp; Rather than attempt to design your own chipset based device design, and pay a $50,000 fee for AT&amp;T to ensure that it works on our network (and additional 3rd party charges to achieve certification), we encourage you to use an existing AT&amp;T&nbsp;</span><a href="#">approved module</a>.</p>
                    </div>
                    <div class="imgry_wrap" style="text-align: center;"><img style="max-width: 294px;" src="{{asset('images/logo.png')}}" alt="Validated Chipset" caption="false" width="294" height="253">
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection