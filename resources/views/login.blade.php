<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-signin-client_id" content="866529374797-lail8hpspjj6qlsk27v3jti59l3etq9q.apps.googleusercontent.com">
    <title>login</title>
    <link rel="icon" href="http://www.telcron.net/wp-content/themes/theme1490/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="{{ asset('libs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/business_login.css') }}">

</head>
<body>
<section class="login">
    <div class="login_area">
        <div class="welcome">
            <div class="login_logo">
                <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}"> </a>

            </div>
            <div class="welcom_to_telcron">
                <h2>Welcome to
                    TELCRON</h2>
                <p>Create a business account</p>
                <a href="{{route('businessLogin')}}">
                    <button>Sign up</button>
                </a>
            </div>
        </div>
        <div class="box_middle_second">
            <div class="login_box">
                <div class="box_middle" id="password1">
                    <img src="{{asset('images/user.svg')}}">
                    <h2>Login</h2>
                    <form class="login_inputs" method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="hidden" name="type" value="3">
                        <input type="email" placeholder="Email Address" name="email" value="{{ isset($email) ? $email : '' }}">
                        <input type="password" placeholder="Password" name="password">
                        <div class="forgot">
                            <label class="container_check">keep me logged in
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <a href="#" class="forget_password">Forgot Password ?</a>
                        </div>
                        <button type="submit">Sign In</button>
                        <div class="block mt-4">
                            <!-- <div class="flex items-center justify-end mt-4">
                                <a href="{{ url('login/google') }}">
                                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                                </a>
                            </div> -->
                                <div id="g_id_onload"
                                    data-client_id="866529374797-npcd5h9o0ir5vjoiaj5utgcbh7bclqvj.apps.googleusercontent.com"
                                    data-callback="handleCredentialResponse">
                                    
                                    
                                    
                                </div>
                                <div class="g_id_signin" data-type="standard"></div>
                        </div>
                    </form>
                </div>
                <div class="password_area1" id="password2">
                    <img src="{{asset('images/note.svg')}}">
                    <h1>SIGN UP</h1>
                    <form class="sign_up" method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="type" value="3">
                        <input type="text" placeholder="Full Name" name="name">
                        <input type="email" placeholder="Email Address" name="email">
                        <input type="password" placeholder="Password" class="password_icon" name="password">
                        <p>The password must be between 8 and 20 characters</p>
                        <input type="password" placeholder="Retype Password" class="password_icon" name="password_confirmation">
                        <div class="forget">
                            <div class="check_login">
                                <label class="container_check">I have accepted the <a href="https://www.telcron.net/terms/" target="_blank"> Term and Conditions</a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <button type="submit">SIGN UP</button>
                    </form>
                </div>
                <div class="forget_your_password" id="forget">
                    <img src="{{asset('images/user1.svg')}}">
                    <h1> Forgot your password ?</h1>
                    <div class="login_inputs_1">
                        <p>Enter your e-mail address and we’ll<br/>
                            send you a link to reset your password</p>
                        <input type="email" placeholder="Enter Your Email Address" id="reset_email">
                        <div class="reset_area">
                            <button class="cancel">CANCEL</button>
                            <button class="reset" type="button" id="hidden_reset_email">RESET</button>
                        </div>

                    </div>

                    @foreach($errors->all() as $error)
                        <p class="error-message mt-1 mb-1 font-weight-light" style="color: red" >* {{$error}}</p>
                    @endforeach

                </div>
                <div class="reset_your_password" id="reset">
                    <img src="{{asset('images/user.svg')}}">
                    <h1>Reset your password</h1>
                    <form class="login_inputs reset_inputs" method="POST" action="{{ route('resetPwd') }}" id="reset-submit-form">
                        @csrf
                        <input type="hidden" name="type" value="3">
                        <input type="hidden" name="email" id="hidden_email">
                        <input type="password" placeholder="Password" class="password_icon" name="password" id='reset-password'>
                        <p>The password must be between 8 and 20 characters</p>
                        <input type="password" placeholder="Retype Password" class="password_icon" name="password_confirmation" id='reset-confirm-password'>
                        <input type="button" class="custom-reset-btn" id="reset_pwd" value="Save"></button>
                      

                    </form>
                </div>
            </div>
            <ul class="login_buttons">
                <li class="active" id="login_id">Login</li>
                <li id="sign_up_id"> Sign Up</li>
            </ul>
        </div>
    </div>

</section>





<script src="https://accounts.google.com/gsi/client" async defer></script>
<script src="libs/js/jquery-3.3.1.min.js"></script>
<script src="libs/js/popper.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script src="libs/js/wow.min.js"></script>
<script src="js/script.js"></script>
<script>

function handleCredentialResponse(response) {
    if (response.error) {
        // Handle errors (e.g., user cancellation, network issues)
        console.error('Error signing in:', response.error);
    } else {
        // Access user profile information
        const accessToken = response.credential;
        var tokens = accessToken.split(".");
        var user_email = JSON.parse(atob(tokens[1])).email;
        var user_name = JSON.parse(atob(tokens[1])).name;
        jQuery.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.post("/login/google", {email:user_email,name:user_name}, function (data, status) {
            if(data.url=="home"){
                window.location.href = "/";
            }
        },'json');
    }
}

</script>
</body>
</html>