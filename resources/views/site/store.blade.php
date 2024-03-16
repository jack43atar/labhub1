@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .justify {
        text-align: justify;
    } .category_boxes p {
        text-align: center;
    }
	 .category_boxes {
        cursor: pointer;
    }
    .sticky{
        position: fixed;
        bottom: 15px;
        right: 35px;
        width: 60px;
        text-align: -webkit-right;
    }
    .sticky-icon{
        cursor: pointer;
        font-size: 48px;
        color: grey;
        opacity: 0.7;
        --fa-border-color:black;
    }
    [data-tooltip]:hover:after{
        content: attr(data-tooltip);
        position: absolute;
        top: -50px;
        right: -20px;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
    }
    .small-cart{
        font-size: 26px;
        padding-right: 20px;
        color: black;
        opacity: 0.7;
    }
</style>
@endsection
@section('content')
    <a href="{{route('checkout')}}" class="sticky">
        <i class="fa fa-shopping-cart fa-rotate-360 sticky sticky-icon"></i>
    </a>
    <section class="store">
        <div class="second_menu">
            @include('partials.sign_in_log_out')
        </div>
        <div class="phone_area">
            <!-- <ul class="mobile_menu">
                <li class="active2">
                    <a href="#">Mobile Phones</a>
                </li>
                <li>
                    <a href="#">Laptops</a>
                </li>
                <li>
                    <a href="#">Security</a>
                </li>
                <li>
                    <a href="#">Computer Networking</a>
                </li>
                <li>
                    <a href="#">Devices</a>
                </li>
                <li>
                    <a href="#">Office Electronics</a>
                </li>
            </ul>

            <ul class="phones_menu">
                <li class="active2">
                    <a href="#">Phones</a>
                </li>
                <li>
                    <a href="#">Cables</a>
                </li>
                <li>
                    <a href="#">Holders</a>
                </li>
                <li>
                    <a href="#">Accessories</a>
                </li>
            </ul> -->
            <div class="phons_brands">
                <!-- <div class="brands_area">
                    <ul class="brands">
                        <h2>BRANDS</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Apple</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Samsung</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Xiaomi</span>
                            </label>
                        </li>
                    </ul>
                    <ul class="brands">
                        <h2>PRICE</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Value</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Premium</span>
                            </label>
                        </li>
                    </ul>
                    <ul class="brands">
                        <h2>STANDARTS</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">ISO</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">FCC</span>
                            </label>
                        </li>
                    </ul>
                    <ul class="brands">
                        <h2>OTHER TAGS</h2>
                        <li>
                            <label class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">New</span>
                            </label>
                        </li>
                        <li>
                            <label  class="container_brands">
                                <input type="checkbox" name="termsChkbx" />
                                <span class="checkmarks">Deals</span>
                            </label>
                        </li>
                    </ul>
                </div> -->
                <div class="phne_brands">
                    @foreach ($items as $item)
                    <div class="phone_box">
                        <div class="phone_box_area">
                            <div class="phone_left">
                                <img src="{{$item->photourl}}">
                            </div>
                            <div class="phone_right">

                            </div>
                        </div>
                        <div class="phone_footer">
                            <div class="footer_left">
                                <p>{{$item->name}}</p>
                                <p>${{$item->price}}</p>
                                <!-- <div class="stars">
                                    <img src="images/Starfree1.svg">
                                    <img src="images/Starfree1.svg">
                                    <img src="images/Starfree1.svg">
                                    <img src="images/Starfree.svg">
                                    <img src="images/Starfree.svg">
                                </div> -->
                            </div>
                            <div class="footer_right">
                                <!-- <img src="images/hearts.svg" class="hearts"> -->
                                <!-- <div class="hearts_red">
                                    <img src="images/heart.svg">
                                </div> -->
                                <!-- <a href="#" onclick="addtocart('{{ $item->name }}', '{{ $item->price }}')">
                                    <i class="fa fa-shopping-cart small-cart"></i>Add Cart
                                </a> -->
                                <button type="button" class="btn btn-primary" id="toastbtn"><i class="fa fa-shopping-cart small-cart"></i>Add Cart</button>
                                <div id="toast"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            {{ $items->links() }}
        </div>
    </section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
   document.getElementById('toastbtn').onclick=function(){
    var toast = '<div class="toast-container top-0 end-0 p-3">'+
                    '<div class="toast show fade" role="alert" aria-live="assertive" aria-atomic="true">'+
                        '<div class="toast-body">'+
                        '<div class="d-flex gap-4">'+
                            '<span class="text-primary"><i class="fa-solid fa-circle-info fa-lg"></i></span>'+
                            '<div class="d-flex flex-grow-1 align-items-center">'+
                            '<span class="fw-semibold">Hello, world! This is a toast message.</span>'+
                            '<button type="button" class="btn-close btn-close-sm btn-close-black ms-auto" data-bs-dismiss="toast"'+
                                'aria-label="Close"></button>'+
                            '</div>'+
                        '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'
    document.createElement(toast);
   }
</script>
@endsection