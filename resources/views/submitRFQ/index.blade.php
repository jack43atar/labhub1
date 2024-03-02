@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/rfq.css')}}">
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
    <div class="row">
        <div class="container">
            <div role="banner" class="outer_banner basicbanner">
                <div class="container" style="background-image: url(images/submitrfq/header-become-reference.jpg); height: 400px;background-repeat: no-repeat;">
                    <div class=" banner_wrap">
                        <div class="ban_table">
                            <div class="ban_content" tabindex="0">
                                <div>
                                    <h1>The Basics</h1>
                                    <p>The term “Internet of Things” (IoT) came about as a means of distinguishing device-to-device and device-to-human communication from human-to-human interaction. At its basic level, an IoT network involves sensing equipment used for monitoring conditions at a remote location. These range from municipalities that have replaced hardwired traffic signal controls with cloud-based IoT networks to a consumer using a connected smartwatch to a business operator monitoring a warehouse location’s thermostat remotely.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zigzag_wrap withouticon non-keyboard-outline" tabindex="0" style="margin-top: 60px;">
                <div class="info_wrap">
                    <div class="fs24">
                        <u>Devices Defined</u>
                    </div>
                    <p>AT&amp;T has worked with and evaluated thousands of devices, modules and chipsets, so chances are our team can recommend an existing device that will meet your requirements. If you are considering a custom-built device as a means of addressing cost or capability requirements, we can provide recommendations and guidance to industry resources that will assist you with concept, module selection and chipset selection.</p>
                    <ul class="widicons_list">
                        <li>
                            <h3 class="fs18"><u><a href="{{url('submit-rfq/devices')}}" style="color: #700203;">Devices</a></u></h3></h3>
                            <p>In the world of Telcton, the term "device" specifically refers to the equipment that provides monitoring or control capability.</p>
                        </li>
                        <li>
                            <h3 class="fs18"><a href="{{url('submit-rfq/modules')}}" style="color: #700203;"><u>Modules</u></a></h3>
                            <p>Wireless communication between devices and the cloud, or dedicated network, is handled by a radio frequency (RF) module that is typically included on commercially available devices.</p>
                        </li>
				<li>
                            <h3 class="fs18">
                                <a href="{{url('submit-rfq/get-certified')}}" style="color: #700203;"><u>Get Certified</u></a>
                            </h3>
                            <p>Get Certified labs are crucial for various testing and experimentation processes, as they provide standardized environments and equipment to ensure accurate and reliable results. Having access to labs can be essential for research, development, quality control, and regulatory compliance.</p>
                        </li>
                        <li>
                            <h3 class="fs18"><u>Chipsets</u> </h3>
                            <p>Much like a module, wireless communication between devices and the cloud, or dedicated network, is handled also by a radio frequency (RF) chipset that is typically included on commercially available devices.</p>
                        </li>
                    </ul>
                </div>
                <div class="imgry_wrap">
                    <img style="max-width: 284px;" src="{{asset('images/device-diagram.jpg')}}" alt="device_diagram" />
                </div>
            </div>
            <hr>
            <div class="why_certify_section" tabindex="0">
                <h2 class="fs24">
                    <u>Why Get Network Ready with AT&amp;T</u>
                </h2>
                <p style="text-align: justify;">Our AT&amp;T Network Ready team helps you navigate your device through the AT&amp;T process to become network ready and ensure your data is ready for network operation. We have proven technology partners to assist you with device needs, as well as a team to help you work through best practices and each step of the AT&amp;T certification process.</p>
                <div class="images_section">
                    <div class="imgtwo_col">
                        <div class="colmn">
                            <div class="center_cntnt_wrap" style="background-image: url(images/submitrfq/3rdPartyLabs.jpeg);">
                                <h4 class="fs18">3rd Party Labs &amp; Resources</h4>
                                <p>AT&amp;T works with various labs to help our device partners efficiently become Network Ready, offering PTCRB, Telcron Network Certified &amp; FCC certification and guidance for antennas. Click for a list of labs offering PTCRB/INC certification services.</p>
                            </div>
                        </div>
                        <div class="colmn">
                            <div class="center_cntnt_wrap" style="background-image: url(images/submitrfq/Chipset.jpg); color: #fff;">
                                <h4 class="fs18">Telcron Data Plans</h4>
                                <p>Being AT&amp;T Network Ready will also help with your connectivity plan. For specific plan information visit our Telcron Data Plans site.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="background-image:url('images/submitrfq/roadMap.jpg'); background-size: cover; color: #fff;width: 1182px; height: 500px; text-align: center;">
                            Technology Roadmap With the advent of LTE-M, there’s a significant decrease in cost available to device developers.
                            <br>Click here to view our Technology Roadmap - our perspective on where technology is heading.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection