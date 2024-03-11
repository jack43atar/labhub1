
@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div>hello world</div>
<div>


</div>
@endsection


@section('js')
<script>
    var data=[];
    for(var i =0;i<$(".woocommerce-LoopProduct-link img").length;i++){
        var tmp = {
            "photourl":$(".woocommerce-LoopProduct-link img")[i].src,
            "name":$(".woocommerce-LoopProduct-link")[i].children[1].innerHTML,
            "price":$(".woocommerce-LoopProduct-link")[i].children[3].children[0].children[0].children[0].nextSibling.data
        }
        data.push(tmp);
    }
    console.log(data);
        $.ajax({
        method: "POST",
        url: "/custom_save",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                "content"
            ),
        },
        data: {data:data},
    }).done(function (response) {
        if (response === "success") {
            console.log(123);
            
        }
    });
</script>

@endsection
