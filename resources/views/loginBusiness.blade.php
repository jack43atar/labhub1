<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>business login</title>
    <link rel="icon" href="http://www.telcron.net/wp-content/themes/theme1490/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/business_login.css">
</head>
<body>
<section class="business_login">
    <div class="login_area">
        <div class="box_middle_second">
            <div class="login_box">
                <div class="box_middle" id="password1">
                    <img src="images/user.svg">
                    <h2>Login</h2>
                    <form class="login_inputs" method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="hidden" value="2" name="type">
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
                    </form>
                </div>
                <div class="password_area1" id="password2">
                    <img src="images/note.svg">
                    <h1>SIGN UP</h1>
                    <form class="sign_up" method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="type" value="2">
                        <input type="text" placeholder="Company Name" name="company_name">
                        <input type="text" placeholder="Company Role" name="role">
                        <input type="text" placeholder="Company Contact's Name  " name="contact_name">
                        <input type="email" placeholder="Email Address" name="email">
                        <input type="password" placeholder="Password" class="password_icon" name="password">
                        <p>The password must be between 8 and 20 characters</p>
                        <input type="password" placeholder="Retype Password" class="password_icon" name="password_confirmation">
                        <div class="forget">
                            <div class="check_login">
                                <label class="container_check">I have accepted the <a href="#"> Term and Conditions</a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <button type="submit">SIGN UP</button>
                    </form>
                </div>
                <div class="forget_your_password" id="forget">
                    <img src="images/user1.svg">
                    <h1> Forgot your password ?</h1>
                    <form class="login_inputs_1">
                        <p>Enter your e-mail address and we’ll<br/>
                            send you a link to reset your password</p>
                        <input type="email" placeholder="Enter Your Email Address">
                        <div class="reset_area">
                            <button class="cancel">CANCEL</button>
                            <button class="reset" type="button">RESET</button>
                        </div>

                    </form>
                </div>
                <div class="reset_your_password" id="reset">
                    <img src="images/user.svg">
                    <h1>Reset your password</h1>
                    <form class="login_inputs reset_inputs">
                        <input type="password" placeholder="Password" class="password_icon">
                        <p>The password must be between 8 and 20 characters</p>
                        <input type="password" placeholder="Retype Password" class="password_icon">
                        <button >SAVE</button>
                    </form>
                </div>
            </div>
            <ul class="login_buttons">
                <li class="active" id="login_id">Login</li>
                <li id="sign_up_id"> Sign Up</li>
            </ul>
        </div>
        <div class="plan">
            <p>Plan your business with</p>
            <h2>TELCRON</h2>
        </div>
    </div>

</section>
<script src="libs/js/jquery-3.3.1.min.js"></script>
<script src="libs/js/popper.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script src="libs/js/wow.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>