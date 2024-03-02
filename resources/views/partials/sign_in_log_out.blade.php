<ul></ul>
<div class="business_signup">
    @if(\Illuminate\Support\Facades\Auth::user())
        <div class="sign_up_bg">
            <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            <a class="sign_out_a" href="{{route('logout')}}">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    @else
        <div class="sign_up_bg">
            <a class="sign_up_a" href="{{route('userLogin')}}">SIGN UP</a>
        </div>
    @endif
</div>