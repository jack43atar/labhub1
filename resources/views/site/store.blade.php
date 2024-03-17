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
    .cart-count{
        color: #121212;
        font-weight: 600;
        background-color: #fcfcfd;
        text-align: center;
        border-radius: 50px;
        width: 22px;
        margin-bottom: 28px;
        margin-right: 7px;
    }
    .cart-icon{
        color: #93afef;
        z-index: -1;
    }
</style>
@endsection
@section('content')
    <a href="{{route('checkout')}}" class="sticky">
        <div class="cart-count">{{ $cartcount }}</div>
        <i class="fa fa-shopping-cart fa-rotate-360 sticky sticky-icon cart-icon"></i>
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
                                    <button type="button" class="btn btn-primary add-to-cart" data-item="{{ json_encode($item) }}">
                                        <i class="fa fa-shopping-cart small-cart"></i>Add Cart
                                    </button>
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
<script>
    $(document).ready(function(){
        // Attach click event handler to Add Cart buttons
        $('.add-to-cart').click(function(){
            // Extract item data from the data attribute
            var itemData = $(this).data('item');
            // Send item data via Ajax to the server
            $.ajax({
                url: '/cart',
                method: 'POST',
                data: {
                    item: itemData
                },
                success: function(response){
                    // Handle success response
                    console.log('Item added to cart successfully');
                },
                error: function(xhr, status, error){
                    // Handle error response
                    console.error('Error adding item to cart:', error);
                }
            });
        });
    });
</script>
@endsection