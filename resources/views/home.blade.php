@extends('layouts.app')
@section('css')
<style>
    .justify {
        text-align: justify;
    } .category_boxes p {
        text-align: center;
    }
	 .category_boxes {
        cursor: pointer;
    }
</style>
@endsection
@section('content')
{{--    {{dd(\Illuminate\Support\Facades\Auth::check())}}--}}
    <section class="home">
        <div class="second_menu">
            @include('partials.sign_in_log_out')
        </div>
        <div class="smarter sertification">
            <div class="smarter_way">
                <h2>A smarter way to
                    product compliance</h2>
                <p>Testlabhub facilitates compliance testing services and complementary solutions
                    for technology manufacturers to achieve and maintain legal marketing of
                    their products globally.<br/>
                    Simply put, we help make pre- and post-market compliance steps that
                    product manufacturers’ need or want, successful.</p>
                <form action="{{url('homeSearch')}}" method="post" role="search">
                @csrf
                <div class="find_search">
                    <input type="text" name="search" placeholder="Find Certification Information with Product iQ">
                </div>
            </form>
            </div>
        </div>
        <div class="home_page">
            <div class="reserv_lab">
                <a href="{{route('book_lab')}}" class="reserv_lab_box">
                    <div>
                        <img src="images/lab.svg">
                        
                            <p>Reserve Lab for<br />
                                Precertification Testing
                            </p>
                    </div>
                </a>
                <a href="{{route('submitrfq')}}" class="reserv_lab_box">
                    <div>
                        <img src="images/submit.svg">
                        
                            <p>Submit RFQ for<br />
                                Certification Test
                            </p>
                    </div>
                </a>

                <form class="contact_form" method="POST" action="{{ route('contactSendMail') }}">
                    @csrf
                    <div class="contact_form_img">
                        <img src="images/contact.svg">
                    </div>
                    <h2>CONTACT FORM</h2>
                    <label>Name</label>
                    <input type="text" name="name">
                    <label>Email address</label>
                    <input type="email" name="email">
                    <label>Message</label>
                    <textarea name="message"></textarea>
                    <button type="submit">Send</button>
                    @if(isset($mail_message))
                        <h3>{{$mail_message}}</h3>
                    @endif
                </form>
            </div>
            <div class="testing">
                <div class="testing_lef_area">
                    <h2>Reserve Lab for<br/>
                        Precertification Testing</h2>
                    <p class="justify">There’s a 50% chance that products fail Electromagnetic Compatibility (EMC) tests the first time,
                        according to at least one leading industry expert. These realities make pre-certification testing a
                        recommended step before committing to final certification efforts for many technology products,
                        with the benefit of improved confidence during certification tests, and reduced risk of redesign
                        at significant time and cost that hampers product launch to market.</p>
                    <p class="for_information">For more information  <a href="https://testlabhub.com/reserve-lab" target="_blank">click here.</a> </p>
                </div>
                <div class="testing_right_area">
                    <div class="box1">
                        <h3>Make Booking</h3>
                        <p>Direct booking with<br/>
                            selection of test items<br/>
                            from <a href="https://testlabhub.com/" class="text-dark">www.testlabhub.com</a></p>
                    </div>
                    <div class="box2">
                        <h4>day 1</h4>
                        <div class="line">
                            <span></span>
                        </div>
                        <h3>Plan Review</h3>
                        <p>Client reviews plan and<br/>
                            accepts / changes or cancels<br/>
                            3 days before scheduled start</p>
                    </div>
                    <div class="box2">
                        <h4>day 4</h4>
                        <div class="line">
                            <span></span>
                        </div>
                        <h3>Start Project</h3>
                        <p>Project start @ test lab.<br/>
                            Status viewable in WorkZone.<br/>
                            Standard viewable in TechStreet</p>
                    </div>
                </div>
            </div>
            <div class="scan">
                <div class="testing_lef_area">
                    <h2>
                        Use the scan camera for instant,<br>
                        AI assisted certification status discovery, recall risk and recycling/sustainability grade
                    </h2>
                    <p><b>
                            This app will let you scan barcode to discover the certification status
                        </b></p>
                    <p>
                        The testlabhub app is the ultimate tool to quickly access essential compliance status information for millions of tracked products with just a scan of their barcodes.
                    </p>
                    <p>
                        With testlabhub, you can effortlessly stay informed about the compliance of various products, ensuring that they meet the necessary regulations and standards. Whether you're a consumer, a retailer, or a regulatory professional, this app is your go-to resource for making informed choices and ensuring product safety.
                    </p>
                    <p><b>Key Features:</b>
                    <ul>
                        <li class="justify"><b>Barcode Scanning:</b> Simply scan the barcode of any product using your device's camera, and Product Compliance Scanner will rapidly retrieve the pertinent compliance status information. No manual input or extensive searching is required!</li>
                        <li class="justify"><b>Extensive Database:</b> testlabhub covers an extensive range of products, tracking millions of items from diverse industries. From electronics to cosmetics, household goods to food items, you'll find comprehensive compliance details at your fingertips.</li>
                        <li class="justify"><b>Compliance Status:</b> Get instant access to essential compliance details, including certifications, safety standards, and regulatory approvals. Identify any potential risks or non-compliance issues, enabling you to make informed decisions about the products you buy or sell.
                        </li>
                        <li class="justify"><b>User-Friendly Interface:</b> testlabhub offers a sleek and intuitive interface, making it easy to navigate and obtain the information you need. Enjoy a seamless scanning experience with accurate and real-time results.
                        </li>
                    </ul>
                    </p>
                    <p class="for_information">For more information, click on this link <a href="https://play.google.com/store/apps/details?id=telcron.app1&pli=1" target="_blank">Testlabhub - Apps on Google Play</a></p>
                </div>
                <div class="scan_img">
                    <img src="images/scanimg.png">
                </div>
            </div>
            <div class="testing">
                <div class="testing_lef_area">
                    <h2>Discover certification with product iQ via text based search</h2>
                    <p class="iq justify">We enable consumers and businesses to verify market acceptance for millions of products sold in e-commerce and social commerce platforms. Keeping unsafe products away from end users is one of our core missions. </p>
                    <p class="for_information">For more information <a href="https://testlabhub.com/submit-rfq" target="_blank"> click here.</a></p>
                </div>
                <div class="scan_img">
                    <img src="images/product.png">
                </div>
            </div>
        </div>
 

        <form class="contact_form upload-form" method="POST" action="{{ route('contactSendMail') }}">
            @csrf
            <div class="contact_form_img upload-img">
                <img src="images/uploading.png">
                <h2>Image/Video Upload</h2>
            </div>
            
            <!-- <label>Name</label>
            <input type="text" name="name">
            <label>Email address</label>
            <input type="email" name="email">
            <label>Message</label>
            <textarea name="message"></textarea> -->
            <button type="submit">Upload</button>
            @if(isset($mail_message))
                <h3>{{$mail_message}}</h3>
            @endif
        </form>

       <div class="find">
        <h2 class="your_business">Find what fits your business needs</h2>
        <div class="category">
            <div class="category_boxes">
                <a href="https://testlabhub.com/submit-rfq" target="_blank">
                    <img src="images/image3.png">
                    <p>Transportation</p>
                </a>
            </div>
            <div class="category_boxes">
                <a href="https://testlabhub.com/submit-rfq" target="_blank">
                    <img src="images/image2.png">
                    <p>Partner solutions</p>
                </a>
            </div>
            <div class="category_boxes">
                <a href="https://testlabhub.com/submit-rfq" target="_blank">
                    <img src="images/image1.png">
                    <p>Healthcare</p>
                </a>
            </div>
            <div class="category_boxes">
                <a href="https://testlabhub.com/submit-rfq" target="_blank">
                    <img src="images/retail.png">
                    <p>Retail</p>
                </a>
            </div>
            <div class="category_boxes">
                <a href="https://testlabhub.com/submit-rfq" target="_blank">
                    <img src="images/image5.png">
                    <p>Manufacturing</p>
                </a>
            </div>
            <div class="category_boxes">
                <a href="https://testlabhub.com/submit-rfq" target="_blank">
                    <img src="images/image7.png">
                    <p>Finance</p>
                </a>
            </div>
        </div>
    </div>

        <div class="success">
            <h2>your success is our best result</h2>
            <div class="rsult_line">
                <span class="left_result"></span>
                <span class="center_result"></span>
                <span class="right_result"></span>
            </div>
            <div class="second_result_line">
            <div class="second_result_line_left">
                <h2>Pre-certification</h2>
                <p>The set of manufacturer activities, product design and development testing/evaluation to reduce risk of market non-acceptance </p>
            </div>
            <div class="second_result_line_center">
                <h2>Certification</h2>
                <p>Activities including testing, documentation, filings, to meet go-to-market requirements </p>
            </div>
            <div class="second_result_line_right">
                <h2>Market</h2>
                <p>Release product to market in retail</p>
            </div>
        </div>
        </div>
@endsection







