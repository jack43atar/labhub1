@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/rfq/getCertified.css')}}">
<style>
    .fs24 {
        font-size: 24px;
        color: #700203;
    }

    .fs18 {
        font-size: 18px;
        color: #700203;
    }

    a:hover {
        color: #700203;
    }

    .justify {
        text-align: justify;
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
    <span id="ContentPlaceHolder1_lblSection">
        <section role="banner" class="outer_banner netwrk_readybanner">
            <div class="container">
                <div class="banner_wrap">
                    <div class="ban_table">
                        <div class="ban_content" tabindex="0">
                            <div>
                                <h1 class="fs20" id="mcetoc_1g0fgflhp0">Testlabhub Certification Gets You Network Ready</h1>
                                <p class="justify">Testlabhub’s "Get Network Ready" program includes a simple process that assures your data-only or data-with-voice device is ready for network operation. This is an important step towards achieving maximum connectivity performance and reducing or eliminating costly after-the-fact redesign<g class="gr_ gr_93 gr-alert gr_gramm gr_inline_cards gr_run_anim Style replaceWithoutSep" id="93" data-gr-id="93">.</g>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="body_wrap" role="main" tabindex="0">
            <div class="container netwrk_ready">
                <div class="zigzag_wrap">
                    <div class="info_wrap">
                        <h2 class="fs24" id="mcetoc_1g0fgflhp1">Testlabhub&nbsp; Certification is Simple</h2>
                        <p class="justify"><span>If your device uses an&nbsp;</span><a href="http://www.att.com/modules" target="_blank" rel="noopener noreferrer" title="Testlabhub Approved Module">Testlabhub Approved Module</a>&nbsp;<span>take the actions below simultaneously to initiate the Network Ready process. It’s possible that your device may&nbsp;</span><em>already</em><span>&nbsp;be certified, and does not require network ready testing. Review this list of&nbsp;</span><a href="../certified-devices.aspx">Testlabhub Certified Devices</a><span>&nbsp;to find out if your device is already certified.&nbsp;</span><strong>We only certify devices based on 5G NR, LTE, LTE-M, and NB Testlabhub technologies.</strong><span>&nbsp;In addition, there are&nbsp;</span><a href="#mcetoc_1beomg97b17">a few devices listed here</a><span>&nbsp;that you can not currently test on your own.&nbsp;You may find it helpful to&nbsp;<a href="\Uploaded_Docs\get_certified_checklist_20190111070751200.pdf" target="_blank" rel="noopener noreferrer">download&nbsp;</a>our checklist for Testlabhub Network Ready Certification as a PDF.<br> <br> <br> </span></p>
                        <ul class="widicons_list">
                            <ul class="widicons_list">
                                <li class="checkmark_icon" tabindex="0">
                                    <h3 class="fs18" id="mcetoc_1beomg97a11">Determine How You will Identify Your Device</h3>
                                    <p class="justify">Network Ready devices must comply with either of the following identification methods. <br> Prior to network testing, you’ll need to choose the method you plan to use. <br> (click on the links to learn more about each one)</p>
                                    <div class="left_col">
                                        <ul class="widicons_list_sub">
                                            <li widicons_list_sub>Unique <a href="#" target="_blank" rel="noopener noreferrer" title="Unique IMEI">IMEI Type Allocation Code</a>(TAC)</li>
                                            <li widicons_list_sub>Periodic <a href="https://iotdevices.att.com/att-iot/IDthroughIMEI.aspx">upload </a>of all your device IMEI numbers</li>
                                        </ul>
                                    </div>
                                    <div class="right_col">
                                        <p class="id_sim1"><img src="{{asset('images/submitrfq/id-device.png')}}" width="124" height="124"></p>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                        <div class="clear"></div>
                        <ul class="widicons_list">
                            <li class="checkmark_icon" tabindex="0">
                                <h3 class="fs18" id="mcetoc_1beomg97a12">Order Testlabhub TRENDI SIMs</h3>
                                <p class="net_pad justify">The Test Requirements for Evaluating Network Ready Devices for Testlabhub (TRENDI) verifies that your device will work efficiently on our network, is capable of receiving SMS messages, and is using the same software/firmware you use for INC&nbsp;certification (see below). TRENDI takes approximately 24&nbsp;<g class="gr_ gr_87 gr-alert gr_gramm gr_inline_cards gr_run_anim Punctuation only-del replaceWithoutSep" id="87" data-gr-id="87">hours,</g> and requires that you use a single Testlabhub <g class="gr_ gr_88 gr-alert gr_gramm gr_inline_cards gr_run_anim Style multiReplace" id="88" data-gr-id="88">SIM .</g><span class="id_sim"><img src="{{asset('images/submitrfq/sim_pic1.jpg')}}" width="170" height="170"></span> You can <a href="#">order your Testlabhub SIM for <g class="gr_ gr_85 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="85" data-gr-id="85">TRENDI</g> at this link</a>. We will mail you an ACTIVATED SIM with detailed instructions for testing. You can also <a href="../att-iot/TrendiTestInstructions.aspx" target="_blank" rel="noopener noreferrer">view the testing instructions here.</a></p>
                                <p><br> <strong style="color: #700203;">IMPORTANT NOTES:</strong></p>
                                <div class="left_col">
                                    <ul class="widicons_list_sub">
                                        <li class="justify">If you already have Testlabhub SIM cards with an identifier that begins with 8901170 you may onboard your device&nbsp;<a href="#" target="_blank" rel="noopener noreferrer">here</a>.</li>
                                        <li class="justify">THESE <g class="gr_ gr_71 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="71" data-gr-id="71">TRENDI</g> SIMS ARE FOR CERTIFICATION TESTING ONLY&nbsp; -- NOT FOR DEVELOPMENT.&nbsp; Find Development SIMs at the <a href="#" target="_blank" rel="noopener noreferrer">ATT Marketplace</a>.</li>
                                    </ul>
                                </div>
                                <p>&nbsp;</p>
                            </li>
                            <li class="checkmark_icon" tabindex="0">
                                <h3 class="fs18" id="mcetoc_1beomg97a10">Get Industry Certified</h3>
                                <p class="net_pad justify"><span>Your device must be&nbsp;Testlabhub Network Certified™ (INC) and meet Testlabhub’s minimum antenna performance specifications for testing. At this link, you can view the&nbsp;</span><a href="\Uploaded_Docs\antenna_document_20230502104841646.pdf">Testlabhub antenna performance limits</a><span>. For more information on INC, please visit&nbsp;<a href="https://iotnetworkcertified.com/about/" target="_blank" rel="noopener noreferrer">Testlabhub Network Certified</a>. The minimum required bands for operation on the Testlabhub US domestic network are LTE Bands 2, 4, and 12. INC certification can be obtained through any authroized INC&nbsp;lab. Please see&nbsp;</span><a href="labs-and-resources.aspx">labs and resources</a>&nbsp;for information to get started<span>. Additionally, Testlabhub has partnered with two INC&nbsp;labs for&nbsp;</span><a href="../iot-accelerator.aspx#certification">exclusive tiered pricing</a>.<span class="id_sim"> <img src="{{asset('images/submitrfq/iotcertifiedlogo.png')}}" width="170" style="width: 210px;"></span></p>
                                <div class="iotAcltrWrap"><img src="{{asset('images/logo.png')}}"><br>
                                    <div>
                                        <h4 class="fs18">Accelerate your INC Certification!</h4>
                                        <p class="justify">Testlabhub has created a partnership with two labs who have agreed to offer exclusive tiered pricing through our <a href="../iot-accelerator.aspx#certification" title="Testlabhub Accelerator PTCRB Program">Testlabhub Accelerator INC Program</a>.<br> Click to learn more!</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="imgry_wrap">
                        <div class="process_box"><img src="{{asset('images/submitrfq/downarrow.png')}}">
                            <div class="clear"></div>
                            <span class="fs28">Once you have initiated industry certification at INC&nbsp;and received your Request Number...SUBMIT your device for Testlabhub Certification</span><br> <span class="fs28" style="text-decoration: underline;"><a href="{{route('labReservationOne')}}" target="_blank" rel="noopener noreferrer">Submit Here<g class="gr_ gr_73 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar multiReplace" id="73" data-gr-id="73"></g></a></span>
                        </div>
                        <div><a href="#"></a></div>
                        <div><a href="#"><img src="{{asset('rfq/firstNet.png')}}" style="width: 100%; margin: 20px auto 0 auto;"></a></div>
                        <div><a href="#"><img src="{{asset('rfq/brushtile.png')}}" style="width: 100%; margin: 20px auto;"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="body_wrap blue_background" role="main" tabindex="0">
            <div class="container">
                <div class="implement_wrap guide_icon txtwhite" tabindex="0">
                    <h2 class="fs24" id="mcetoc_1g0fgflhp2">Implementation Guides</h2>
                    <p class="justify">Download helpful <a href="#" target="_blank" rel="noopener noreferrer">implementation guides and information</a> for best practices&nbsp;(<g class="gr_ gr_74 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling multiReplace" id="74" data-gr-id="74">log in</g> required).<br> Documents available <g class="gr_ gr_75 gr-alert gr_gramm gr_inline_cards gr_run_anim Punctuation only-del replaceWithoutSep" id="75" data-gr-id="75">include:</g> <span>TAM Webinar Slides, Securing the Internet of Things, and Implementation Guides covering Device Management, Connected Car, and FirstNet</span>
                        <g class="gr_ gr_79 gr-alert gr_gramm gr_inline_cards gr_run_anim Style replaceWithoutSep" id="79" data-gr-id="79">.</g>
                    </p>
                </div>
            </div>
        </section>
        <section class="body_wrap grey_background" role="main" tabindex="0">
            <div class="container">
                <div class="implement_wrap securityIcon" tabindex="0">
                    <h2 class="fs24" id="mcetoc_1beomg97b16">
                        <g class="gr_ gr_79 gr-alert gr_gramm gr_inline_cards gr_disable_anim_appear Style replaceWithoutSep" id="G1" data-gr-id="79">Testlabhub</g> Security and GSMA Guidelines
                    </h2>
                    <p>When it comes to security, Testlabhub follows the best practices of the GSMA guidelines, and we encourage our partners to follow them as well. <br> <a style="display: inline-block;" target="_blank" href="#" title="GSMA guidelines" aria-label="GSMA guidelines (This link will open a new window)" rel="noopener noreferrer">Click here</a> to download the latest GSMA guidelines as a PDF.</p>
                </div>
            </div>
        </section>
        <section class="body_wrap" role="main" tabindex="0">
            <div class="container">
                <div class="zigzag_wrap someDevices_wrap" tabindex="0">
                    <div class="imgry_wrap"><img style="max-width: 480px;" src="{{asset('images/submitrfq/networkready.jpg')}}" alt="Some Devices May Not Qualify for Our Simple Certification Procedures"></div>
                    <div class="info_wrap">
                        <h2 class="fs24" id="mcetoc_1beomg97b17">Some Devices May Not Qualify for Our Simplest Network Ready Procedures</h2>
                        <p>In some cases, becoming Network Ready requires different steps. This is true of the following device types:</p>
                        <ul class="points">
                            <li tabindex="0">Drones</li>
                            <li tabindex="0">Telematics Control Units (factory installed)</li>
                            <li tabindex="0">Devices that will use a FirstNet SIM</li>
                        </ul>
                        <p>Additionally, <span>&nbsp;separate certification processes are required for devices using chipsets or non-approved modules. Click&nbsp;</span><a href="#" title="Device Certification Process" aria-label="Device Certification Process here (This link will open a new window)" target="_blank" rel="noopener noreferrer">here</a>, navigate to "Device Certification (Testlabhub &amp; MVNO)" and select "Create Certification Request". <span>You will be guided into the correct process to get certified on these device types</span>. Please click <a href="#">here</a> to contact our team for additional questions or any assistance with the certification process.&nbsp;</p>
                    </div>
                </div>
            </div>
        </section>
    </span>
</div>
@endsection
<script type="text/javascript" src="{{asset('libs/js/jquery-3.3.1.min.js')}}"></script>
