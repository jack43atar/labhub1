<?php
$link = $_SERVER['REQUEST_URI'];
?>
<header class="business_messaging">
    <nav class="navbar navbar-expand-lg navbar-light nav_header">
        <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar_telcron" id="navbarTogglerDemo02">
            <div class="menu-menu-1-container">
                <ul class="navbar-nav">
                    <!-- ******************************************************************************************************* -->
                    <li id="menu-item-lab_res" class="nav-item">
                        <a class="nav-link {{strpos($link, 'lab-reservation') ? 'active_nav_menu' : ''}}" href="">Lab Reservation</a>
                        <ul class="sub-menu-0">
                            <ul class="vertical-menu">
                                <li class="head_name ">Lab Reservation</li>

                                <li><a href="{{route('lav_reservation.schedule_testing')}}" class="p-t_0">Schedule Testing</a>

                                </li>
                                <li><a href="{{url('lab-reservation/faqs')}}">FAQs</a>

                                </li>
                                <li><a href="{{url('lab-reservation/submit-lab-review')}}">Submit Lab Review</a>

                                </li>
                                <li><a href="{{url('lab-reservation/rewards')}}" class="p-b_0">Rewards</a>

                                </li>
                            </ul>
                        </ul>
                    </li>
                   <!-- <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6 ">
                        <a href="#" class="{{strpos($link, 'product') ? 'active_nav_menu' : ''}}">Products &amp; Industries</a>
                        <ul class="sub-menu-0">

                            <ul class="nav nav-pills second_navbar_area" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                       role="tab" aria-controls="pills-home" aria-selected="true">PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                       role="tab" aria-controls="pills-profile" aria-selected="false">INDUSTRIES</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane products_tab fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <ul class="vertical-menu">
                                        <li><a href="{{route('product_include.mobility_service')}}"> Mobility Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('product_include.mobility_service.business_messaging')}}"> Business Messaging</a></li>
                                                <li><a href="#"> Device Management Programs</a></li>
                                                <li><a href="#"> Field Management</a></li>
                                                <li><a href="#"> In-Building Wireless</a></li>
                                                <li><a href="#"> Mobile Devices</a></li>
                                                <li><a href="#"> Mobility Rate Plans</a></li>
                                                <li><a href="#"> Mobile Remote Access</a></li>
                                            </ul>
                                            <ul class="sub-menu second_sub_menu">
                                                <li><a href="#"> Mobility Features</a></li>
                                                <li><a href="#"> Mobile business solutions</a></li>
                                                <li><a href="#"> Mobility Professional Services</a></li>
                                                <li><a href="#"> Device Financing and Trade-in</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> Internet & Networking Services</a>

                                        </li>
                                        <li><a href="#"> Internet of Things</a>
                                            <ul>
                                                <li><a href="#"> North</a></li>
                                                <li><a href="#"> South</a></li>
                                                <li><a href="#"> East</a></li>
                                                <li><a href="#"> West</a></li>
                                                <li><a href="#"> Center</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> Voice and Collaboration</a></li>
                                        <li><a href="#"> Cybersecurity services</a></li>
                                        <li><a href="#"> Cloud solutions</a></li>
                                        <li><a href="#"> directv for business</a></li>
                                    </ul>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">...
                                </div>
                            </div>
                        </ul>
                    </li> -->
					<li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6 ">
                        <a href="#" class="{{strpos($link, 'product') ? 'active_nav_menu' : ''}}">Products</a>
                        <ul class="sub-menu-0">
                            <ul class="nav nav-pills second_navbar_area" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">PRODUCTS</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane products_tab fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <ul class="vertical-menu">
                                        <li style="font: bold; color: black;">
                                            <a href="{{route('submitrfq')}}">Electronics</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('submitrfq')}}">Accessories & Supplies</a></li>
                                                <li><a href="{{route('submitrfq')}}">Camera &amp; Photo</a></li>
                                                <li><a href="{{route('submitrfq')}}">Car &amp; Vehicle Electronics</a></li>
                                                <li><a href="{{route('submitrfq')}}">Cell Phones &amp; Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Computers &amp; Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">GPS &amp; Navigation</a></li>
                                                <li><a href="{{route('submitrfq')}}">Headphones</a></li>
                                                <li><a href="{{route('submitrfq')}}">Home Audio</a></li>
                                                <li><a href="{{route('submitrfq')}}">Office Electronis</a></li>
                                            </ul>
                                            <ul class="sub-menu second_sub_menu">
                                                <li><a href="{{route('submitrfq')}}">Portable Audio &amp; Video</a></li>
                                                <li><a href="{{route('submitrfq')}}">Security &amp; Surveillance</a></li>
                                                <li><a href="{{route('submitrfq')}}">Service Plans</a></li>
                                                <li><a href="{{route('submitrfq')}}">Television &amp; Audio</a></li>
                                                <li><a href="{{route('submitrfq')}}">Video Game Consoles &amp; Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Video Projectors</a></li>
                                                <li><a href="{{route('submitrfq')}}">Wearable Technology</a></li>
                                                <li><a href="{{route('submitrfq')}}">eBook Readers &amp; Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('submitrfq')}}">Computers</a>
                                            <ul>
                                                <li><a href="{{route('submitrfq')}}">Computer Accessories &amp; Peripherals</a></li>
                                                <li><a href="{{route('submitrfq')}}">Computer Components</a></li>
                                                <li><a href="{{route('submitrfq')}}">Computer &amp; Tablets</a></li>
                                                <li><a href="{{route('submitrfq')}}">Data Storage</a></li>
                                                <li><a href="{{route('submitrfq')}}">External Components</a></li>
                                                <li><a href="{{route('submitrfq')}}">Laptop Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Monitors</a></li>
                                                <li><a href="{{route('submitrfq')}}">Networking Products</a></li>
                                            </ul>
                                            <ul class="sub-menu second_sub_menu">
                                                <li><a href="{{route('submitrfq')}}">Power Strips &amp; Surge Protectors</a></li>
                                                <li><a href="{{route('submitrfq')}}">Printers</a></li>
                                                <li><a href="{{route('submitrfq')}}">Scanners</a></li>
                                                <li><a href="{{route('submitrfq')}}">Servers</a></li>
                                                <li><a href="{{route('submitrfq')}}">Tablet Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Tablet Replacement Parts</a></li>
                                                <li><a href="{{route('submitrfq')}}">Warranties &amp; Services</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('submitrfq')}}">Smart Home</a>
                                            <ul>
                                                <li><a href="{{route('submitrfq')}}">Telcron Smart Home</a></li>
                                                <li><a href="{{route('submitrfq')}}">Smart Home Lighting</a></li>
                                                <li><a href="{{route('submitrfq')}}">Smart Locks and Entry</a></li>
                                                <li><a href="{{route('submitrfq')}}">Security Cameras and Systems</a></li>
                                                <li><a href="{{route('submitrfq')}}">Plugs and Outlets</a></li>
                                                <li><a href="{{route('submitrfq')}}">New Smart Devices</a></li>
                                                <li><a href="{{route('submitrfq')}}">Heating and Cooling</a></li>
                                                <li><a href="{{route('submitrfq')}}">Detector and Sensors</a></li>
                                            </ul>
                                            <ul class="sub-menu second_sub_menu">
                                                <li><a href="{{route('submitrfq')}}">Home Entertainment</a></li>
                                                <li><a href="{{route('submitrfq')}}">Pet</a></li>
                                                <li><a href="{{route('submitrfq')}}">Voice Assistants and Hubs</a></li>
                                                <li><a href="{{route('submitrfq')}}">Kitchen</a></li>
                                                <li><a href="{{route('submitrfq')}}">Vacuums and Mops</a></li>
                                                <li><a href="{{route('submitrfq')}}">Lawn and Garden</a></li>
                                                <li><a href="{{route('submitrfq')}}">WIFI and Networking</a></li>
                                            </ul>
                                        </li>
<!--                                        <li><a href="{{route('submitrfq')}}">Home, Garden &amp; Tools</a></li>
                                        <li>
                                            <a href="{{route('submitrfq')}}">Pet Supplies</a>
                                            <ul>
                                                <li><a href="{{route('submitrfq')}}">Dogs</a></li>
                                                <li><a href="{{route('submitrfq')}}">Cats</a></li>
                                                <li><a href="{{route('submitrfq')}}">Fish &amp; Aquatic Pets</a></li>
                                                <li><a href="{{route('submitrfq')}}">Birds</a></li>
                                                <li><a href="{{route('submitrfq')}}">Horses</a></li>
                                                <li><a href="{{route('submitrfq')}}">Reptiles &amp; Amphibians</a></li>
                                                <li><a href="{{route('submitrfq')}}">Small Animals</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('submitrfq')}}">Food &amp; Grocery</a></li>
                                        <li>
                                            <a href="{{route('submitrfq')}}">Beauty &amp; Health</a>
                                            <ul>
                                                <li><a href="{{route('submitrfq')}}">Makeup</a></li>
                                                <li><a href="{{route('submitrfq')}}">Skin Care</a></li>
                                                <li><a href="{{route('submitrfq')}}">Hair Cate</a></li>
                                                <li><a href="{{route('submitrfq')}}">Fragrance</a></li>
                                                <li><a href="{{route('submitrfq')}}">Foot, Hand &amp; Nail Care</a></li>
                                            </ul>
                                            <ul class="sub-menu second_sub_menu">
                                                <li><a href="{{route('submitrfq')}}">Tools &amp; Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Shave &amp; Hair Removal</a></li>
                                                <li><a href="{{route('submitrfq')}}">Personal Care</a></li>
                                                <li><a href="{{route('submitrfq')}}">Oral Care</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('submitrfq')}}">Toys, Kids &amp; Baby</a></li>
                                        <li><a href="{{route('submitrfq')}}">Handmade</a></li>
                                        <li>
                                            <a href="{{route('submitrfq')}}">Sports &amp; Outdoors</a>
                                            <ul>
                                                <li><a href="{{route('submitrfq')}}">Sports &amp; Outdoors</a></li>
                                                <li><a href="{{route('submitrfq')}}">Outdoor Recreation</a></li>
                                                <li><a href="{{route('submitrfq')}}">Sports &amp; Fitness</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('submitrfq')}}">Outdoors</a></li>
                                        <li>
                                            <a href="{{route('submitrfq')}}">Automotive &amp; Industrial</a>
                                            <ul>
                                                <li><a href="{{route('submitrfq')}}">Car Care</a></li>
                                                <li><a href="{{route('submitrfq')}}">Car Electronics &amp; Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Exterior Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Interior Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Lights &amp; Lighting Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Motorcycle &amp; Powersports</a></li>
                                                <li><a href="{{route('submitrfq')}}">Oils &amp; Fluids</a></li>
                                                <li><a href="{{route('submitrfq')}}">Paint &amp; Paint Supplies</a></li>
                                            </ul>
                                            <ul class="sub-menu second_sub_menu">
                                                <li><a href="{{route('submitrfq')}}">Performance Parts &amp; Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Replacement Parts</a></li>
                                                <li><a href="{{route('submitrfq')}}">RV Parts &amp; Accessories</a></li>
                                                <li><a href="{{route('submitrfq')}}">Tires &amp; Wheels</a></li>
                                                <li><a href="{{route('submitrfq')}}">Tools &amp; Equipment</a></li>
                                                <li><a href="{{route('submitrfq')}}">Automotive Enthusiast Merchandise</a></li>
                                                <li><a href="{{route('submitrfq')}}">Heavy Duty &amp; Commercial Vehicle Equipment</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{route('submitrfq')}}">Industrial &amp; Scientific</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6 ">
                        <a href="#" class="{{strpos($link, 'product') ? 'active_nav_menu' : ''}}">Industries</a>
                        <ul class="sub-menu-0">
                            <ul class="nav nav-pills second_navbar_area" id="pills-tab" role="tablist">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Industries</a>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane products_tab fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <ul class="vertical-menu">
                                        <li><a href="{{route('submitrfq')}}">Retail</a></li>
                                        <li><a href="{{route('submitrfq')}}">Manufacturing</a></li>
                                        <li><a href="{{route('submitrfq')}}">Finance</a></li>
                                        <li><a href="{{route('submitrfq')}}">Transportation</a></li>
                                        <li><a href="{{route('submitrfq')}}">Healthcare</a></li>
                                        <li><a href="{{route('submitrfq')}}">Partner Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6">
                        <a href="#" class="{{strpos($link, 'services') ? 'active_nav_menu' : ''}}">Services</a>
                        <ul class="sub-menu-0">
                            <ul class="vertical-menu">
                                <li><a href="{{route('services.compliance_management')}}"> compliance management</a>

                                </li>
                                <li><a href="{{route('services.consulting')}}">consulting</a>

                                </li>
                                <li><a href="{{route('services.eSource')}}">esource</a>

                                </li>
                                <li><a href="#">resources</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('services.resources.emc')}}"> EMC</a></li>
                                        <li><a href="{{route('services.resources.product_safety')}}"> Poduct Safety</a></li>
                                        <li><a href="{{route('services.resources.rf_exposure')}}"> RF eXPOSURE</a></li>
                                        <li><a href="{{route('services.resources.reference_link')}}"> Reference Links</a></li>
                                        <li><a href="{{route('services.resources.products')}}">Products</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{strpos($link, 'store') ? 'active_nav_menu' : ''}}" href="{{route('store')}}">Store</a>
                    </li>
                    <li id="menu-item-about" class="nav-item">
                        <a class="nav-link {{strpos($link, 'about') ? 'active_nav_menu' : ''}}" href="#">About</a>
                        <ul class="sub-menu-0">
                            <ul class="vertical-menu">
                                <li class="head_name">ABOUT</li>

                                <li><a href="#" class="p-t_0">Our Company</a>

                                </li>
                                <li><a href="{{route('about.our_team')}}">Our Team</a>

                                </li>
                                <li><a href="{{route('about.our_partners')}}">Our Partners</a>

                                </li>
                                <li><a href="{{route('about.our_capabilities')}}">Our Capabilities</a>

                                </li>
                                <li><a href="{{route('about.blog')}}">Blog</a>

                                </li>
                                <li><a href="{{route('contactus')}}" class="p-b_0">Contacts</a>

                                </li>
                            </ul>
                        </ul>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link {{strpos($link, 'lab-reservation/booking') ? 'active_nav_menu' : ''}} " href="{{route('labReservationOne')}}">Lab Ratings / Directory</a>--}}
{{--                    </li>--}}

                    @if(\Illuminate\Support\Facades\Auth::check())

                        @if(\Illuminate\Support\Facades\Auth::user()->type == \App\User::TYPES['business'])
                            <li class="nav-item">
                                <a class="nav-link {{strpos($link, 'lab-reservation/booking') ? 'active_nav_menu' : ''}} " href="{{url('lab-rating-directory')}}">Lab Ratings / Directory</a>
                            </li>
                        @else

                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('lab-rating-directory')}}">Lab Ratings / Directory</a>
                        </li>
                    @endif


                @if(strpos($link, 'store'))
                        <li class="nav-item">
                            <div class="images">
                                <img src="images/hearts.svg" class="hearts">
                                <div class="hearts_red">
                                    <img src="images/heart.svg">
                                </div>
                                <div class="sac">
                                    <img src="images/sac.svg">
                                    <span>1</span>
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
            <ul class="business_personal">
                @if(\Illuminate\Support\Facades\Auth::user())
                    @if(\Illuminate\Support\Facades\Auth::user()->type == \App\User::TYPES['user'])
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Business</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Personal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Business</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">Personal</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>


{{--    <!--  Modal Banner class="modal" -->--}}
{{--    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"--}}
{{--         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document" >--}}
{{--            <div class="modal-content">--}}

{{--                <div class="row justify-content-center">--}}
{{--                    <a href="{{route('businessLogin')}}">--}}

{{--                        <div class="login_modal ">--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images/login.png')}}" alt="Login" title="Login">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h4>Login or Sign Up business account</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </a>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</header>
