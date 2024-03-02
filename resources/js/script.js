$(document).ready(function () {
    $('#login_id').on('click', function () {
        $('#password1').removeClass('password_area1');
        $('#password2').addClass('password_area1');
        $('#forget').addClass('forget_your_password');
        $('#reset').addClass('reset_your_password');
    });

    $('#sign_up_id').on('click', function () {
        $('#password2').removeClass('password_area1');
        $('#password1').addClass('password_area1');
        $('#forget').addClass('forget_your_password');
        $('#reset').addClass('reset_your_password');

    });

    $('.forget_password').on('click', function () {
        $('#password1').addClass('password_area1');
        $('#forget').removeClass('forget_your_password');
        $('#password2').addClass('password_area1');
        $('#reset').addClass('reset_your_password');
    });

    $('.reset_area .reset').on('click', function () {
        $('#password1').addClass('password_area1');
        $('#reset').removeClass('reset_your_password');
        $('#forget').addClass('forget_your_password');
        $('#password2').addClass('password_area1');
    });
});


$('.login_buttons').on('click', 'li', function() {
    $('.login_buttons .active').removeClass('active');
    $(this).addClass('active');
});

$(".hearts").click(function(){
    $(".hearts").hide();
    $(".hearts_red").show();
});

$(".hearts_red").click(function(){
    $(".hearts_red").hide();
    $(".hearts").show();
});


$('.owl-carousel').owlCarousel({
    margin: 10,
    nav: true,
    navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});




