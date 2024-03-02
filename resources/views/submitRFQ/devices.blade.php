@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/rfq/devicePage.css')}}">
<style>
    .fs24 {
        color: #700203;
    }

    * {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
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
    <div id="ContentPlaceHolder1_lblSection" role="banner">
        <section role="banner" class="outer_banner devicePagebanner">
            <div class="container">
                <div class="banner_wrap">
                    <div class="ban_table">
                        <div class="ban_content" tabindex="0">
                            <h1 class="fs20" style="padding-top: 0px;">Do you have an idea for a Device?</h1>
                            <p>While being “first to market” or solving a need by custom building a device is the goal of many developers and companies, there are many PROVEN, ADAPTABLE devices ALREADY available that can be customized to meet your needs at a much lower cost. Below are some tips and links to help you FIND a device to fit your needs and then get CERTIFIED and CONNECTED on the AT&amp;T Network.</p>
                            <p class="ban_icon_wrap">
                                <img src="{{asset('rfq/icon/device-ban-icon1.png')}}" alt="">
                                <img src="{{asset('rfq/icon/device-ban-icon2.png')}}" alt="">
                                <img src="{{asset('rfq/icon/device-ban-icon3.png')}}" alt="">
                                <img src="{{asset('rfq/icon/device-ban-icon4.png')}}" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blue_strip yellow" style="padding: 6px 20px 4px; line-height: 28px;" id="buy">
            <div class="container txt_lft">
                <heading class="fs24">Existing Certified Devices Save Time and Money</heading>
            </div>
        </section>
        <section class="body_wrap grey_background newDevices">
            <div class="container">
                <div class="zigzag_wrap" tabindex="0">
                    <div class="imgry_wrap"><img style="max-width: 270px;" src="{{asset('rfq/review-deviceThumb.jpg')}}" alt="Review a complete listing of AT&amp;T Certified Testlabhub Device."></div>
                    <div class="info_wrap">
                        <div class="deviceThumbR thumb1"></div>
                        <h2 class="fs24">Review a complete listing of AT&amp;T Certified Testlabhub Devices.</h2>
                        <div class="clear"></div>
                        <p>Each device in our <a href="#">AT&amp;T Certified Devices list</a> shows you manufacturer, device type, frequency bands and technology platform to help you verify that an existing device could meet your needs. You can then contact the manufacturer and determine if this is the best path for you.</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="zigzag_wrap" tabindex="0">
                    <div class="imgry_wrap">
                        <img style="max-width: 270px;" src="{{asset('rfq/find-deviceThumb.jpg')}}" alt="Find a certified device for your Solution in the AT&amp;T Testlabhub Device Catalog.">
                    </div>
                    <div class="info_wrap">
                        <h2 class="fs24">Find a certified device for your solution in the AT&amp;T Testlabhub Device Catalog.</h2>
                        <div class="deviceThumbR thumb2"></div>
                        <p>Several of the <a href="#" title="devices in our catalog" rel="noopener noreferrer">devices in our catalog</a> are likely to meet your needs — with minimal time and effort required to customize to your specific solution. Search by use-case to help you save time and money, while accelerating your development. Best of all, these devices are pre-certified for the AT&amp;T Network!</p>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="zigzag_wrap" tabindex="0">
                    <div class="imgry_wrap"><img style="max-width: 270px;" src="{{asset('rfq/ramp-marketplaceThumb.jpg')}}" alt="Ramp up quickly with the Testlabhub marketplace.">
                    </div>
                    <div class="info_wrap">
                        <div class="deviceThumbR thumb3"></div>
                        <h2 class="fs24">Ramp up quickly with the Testlabhub Marketplace.</h2>
                        <div class="clear"></div>
                        <p>
                            <a href="#" title="The Testlabhub Marketplace" rel="noopener noreferrer">The Testlabhub Marketplace</a>&nbsp;is a great starting point for your Testlabhub solution where you can purchase starter kits, certified devices, and Testlabhub data plans to meet your Testlabhub solution needs.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>
        <section class="blue_strip yellow" style="padding: 6px 20px 4px; line-height: 28px;" id="build">
            <div class="container txt_lft">
                <heading class="fs24">Device Developers can Benefit from Partnerships and Pricing Considerations</heading>
            </div>
        </section>
        <section class="body_wrap newDevices cjChart" role="main">
            <div class="container">
                <div class="zigzag_wrap" tabindex="0">
                    <div class="imgry_wrap"><img style="max-width: 350px;" src="{{asset('rfq/ownChipsetThumb.jpg')}}" alt="Build your own design with a Module or Chipset."></div>
                    <div class="info_wrap">
                        <h2 class="fs24">Build your own design</h2>
                        <p>If you prefer to build your own device, keep in mind a few of these potential problems that you should address during design:</p>
                        <div class="deviceThumbR thumb5"></div>
                        <ul class="widicons_list_sub">
                            <li>impedance mismatches</li>
                            <li>internal noise from data clocks or other components</li>
                            <li>electromagnetic interference</li>
                            <li>SIM/UICC form factor selection</li>
                            <li>wireless performance requirements</li>
                        </ul>
                        <div class="clear"></div>
                        <p>Failure to consider issues like these could necessitate hardware changes — causing increases in development costs and time. Reference the Cost Justification Chart below to consider volume, the costs and the complexity of Module and Chipset Designs.&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="network-chart"><img src="{{asset('rfq/cost_justification_chart_8.20.17_20170821010543878.jpg')}}" caption="false" width="1082" height="395"></div>
                <div class="zigzag_wrap" tabindex="0">
                    <div class="imgry_wrap" style="float: none; vertical-align: middle;"><img style="max-width: 250px;" src="{{asset('rfq/device-wireless-rf.jpg')}}" alt="Find the right module for your needs."></div>
                    <div class="info_wrap" style="float: none; vertical-align: middle;">
                        <h2 class="fs24">Find the right module for your needs.</h2>
                        <div class="clear"></div>
                        <p>For chipset-based device designs, there is a $50,000&nbsp;fee for AT&amp;T to ensure that it works on our network along with additional 3rd party lab charges to achieve certification. Choosing an existing, AT&amp;T approved module from our&nbsp;<a href="#" rel="noopener noreferrer">AT&amp;T Module Catalog</a> saves time and money while ensuring ongoing network compatibility.</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="zigzag_wrap" tabindex="0">
                    <div class="imgry_wrap"><img src="{{asset('images/logo.png')}}" alt="The Testlabhub Accelerator speeds your time to market" style="max-width: 350px;"></div>
                    <div class="info_wrap">
                        <h2 class="fs24">The Testlabhub Accelerator speeds your time to market</h2>
                        <div class="clear"></div>
                        <p>The Testlabhub Accelerator program provides you with pre-certified low-cost, <a href="#">high performance LTE modules</a> to get you started quickly. You will also find simple and affordable <a href="#">INC options for certification</a>.</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="zigzag_wrap" tabindex="0">
                    <div class="imgry_wrap"><img style="max-width: 350px;" src="{{asset('rfq/provenPartnersThumb.jpg')}}" alt="Work with our proven partners to get the job done right."></div>
                    <div class="info_wrap">
                        <div class="deviceThumbR thumb6"></div>
                        <h2 class="fs24">Work with our proven partners to get the job done right.</h2>
                        <div class="clear"></div>
                        <p>AT&amp;T Approved Partners are available to help increase your chance of success in designing your new Testlabhub device. <a href="{{url('about/our-partners')}}" title="Visit our Partners Page">Visit our Partners Page</a> to select the type of assistance you need including device certification, hardware/software design, as well as manufacturing services and connect with proven professionals.<br><br></p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection