@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .number-btn{
    padding: 0;
    border: none;
    background: none;
    width: 15px;
  }
  .number-btn:focus{
    border:none;
  }
</style>
@section('content')
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="{{ route('store') }}" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>
                @foreach($items as $item)
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <!-- <img
                              src="{{ $item->photourl }}"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;"> -->
                          </div>
                          <div class="ms-3">
                            <h5>{{ $item->name }}</h5>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 120px;" class="d-flex">
                            <h5 id="count_{{$item->id}}" class="fw-normal mb-0">
                              {{ $item->count }}
                            </h5>
                            <div class="position-relative">
                              <button type="button" class="number-btn position-absolute increase" onclick="onIncrease({{$item->id}})">
                                <i class="fa fa-sort-up"></i>
                              </button>
                              <button type="button" class="number-btn position-absolute mt-2 decrease" onclick="onDecrease({{$item->id}})">
                                <i class="fa fa-sort-down"></i>  
                              </button>
                            </div>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0" id="unitprice_{{$item->id}}" >${{ $item->price }}</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0" id="totalprice_{{$item->id}}" >${{ ($item->price)*($item->count) }}</h5>
                          </div>
                          <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" value="{{$item->price}}" class="hidden" id="price_{{$item->id}}"/>
                @endforeach

              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="card_number" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="card_number">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="pass" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="pass">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2" id="subtotal">$</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">$20.00</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">$4818.00</p>
                    </div>

                    <button type="button" class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>$4818.00</span>
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('js')
<script>

function onIncrease(item_id){

  var count = $('#count_'+item_id)[0].innerText;
  $.ajax({
    url:'/add',
    method:'POST',
    data:{
      count: count,
      item_id: item_id
    },
    success: function(response){
      count++;
      $('#count_'+item_id)[0].innerHTML=count;
      var price = $('#price_'+item_id)[0].value;
      var totalprice = price*count;
      $('#totalprice_'+item_id)[0].innerText='$'+ totalprice;
    },
    error: function(xhr, status, error) {
      console.error('Error item count:', error);
    }
  });
}

      // //minus function
      // $('.decrease').click(function(){
      //   var count = $('#count')[0].innerText;
      //   var item_id = $('#hidden_id')[0].value;
      //   $.ajax({
      //     url:'/minus',
      //     method:'POST',
      //     data:{
      //       count: count,
      //       item_id: item_id
      //     },
      //     success: function(response){
      //       count--;
      //       $('#count')[0].innerHTML=count;
      //       var price = $('#price')[0].value;
      //       var totalprice = price*count;
      //       $('#totalprice')[0].innerText='$'+ totalprice;
      //     },
      //     error: function(xhr, status, error) {
      //       console.error('Error item count:', error);
      //     }
      //   })
      // })
       // Function to update subtotal
      //  function updateSubtotal() {
      //   var subtotal = 0;
      //   $('.card').each(function() {
      //     var count = parseInt($(this).find('#count').text());
      //     console.log("count",count);
      //     var price = parseFloat($(this).find('#price').val());
      //     console.log("price",price);
      //     subtotal += count * price;
      //     console.log("subtotal",subtotal);
      //   });
      //   $('#subtotal').text('$' + subtotal.toFixed(2));
      // }

      // // Initial call to update subtotal when the page loads
      // updateSubtotal();

</script>
@endsection