$(document).ready(function () {
    jQuery.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#login_id").on("click", function () {
        $("#password1").removeClass("password_area1");
        $("#password2").addClass("password_area1");
        $("#forget").addClass("forget_your_password");
        $("#reset").addClass("reset_your_password");
    });

    $("#sign_up_id").on("click", function () {
        $("#password2").removeClass("password_area1");
        $("#password1").addClass("password_area1");
        $("#forget").addClass("forget_your_password");
        $("#reset").addClass("reset_your_password");
    });

    $(".forget_password").on("click", function () {
        $("#password1").addClass("password_area1");
        $("#forget").removeClass("forget_your_password");
        $("#password2").addClass("password_area1");
        $("#reset").addClass("reset_your_password");
    });

    $(".reset_area .reset").on("click", function () {
        $("#password1").addClass("password_area1");
        $("#reset").removeClass("reset_your_password");
        $("#forget").addClass("forget_your_password");
        $("#password2").addClass("password_area1");
    });

    $(".industries").click(function () {
        $(".second_nav_bar").toggle();
        $(".third_nav_bar").hide();
    });
    $(".services_link").click(function () {
        $(".third_nav_bar").toggle();
        $(".second_nav_bar").hide();
    });
    $("#hidden_reset_email").on("click", function () {
        $("#hidden_email")[0].value = $("#reset_email")[0].value;
    });
    $("#reset_pwd").on("click", function () {
        if (
            $("#reset-password")[0].value !=
            $("#reset-confirm-password")[0].value
        ) {
            alert("Confirm Password are mismatching!");
            return;
        }
        if ($("#reset-password")[0].value.length < 8) {
            alert("Password should be between 8 and 20 length.");
            return;
        }

        var data = {
            email: $("#hidden_email")[0].value,
            type: 3,
            password: $("#reset-password")[0].value,
        };
        $.post("/reset-pwd", data, function (data, status) {
            window.location.href = "/login-user";
        });
    });
    $("#reset_pwd_business").on("click", function () {
        if (
            $("#reset-password")[0].value !=
            $("#reset-confirm-password")[0].value
        ) {
            alert("Confirm Password are mismatching!");
            return;
        }
        if ($("#reset-password")[0].value.length < 8) {
            alert("Password should be between 8 and 20 length.");
            return;
        }

        var data = {
            email: $("#hidden_email")[0].value,
            type: 2,
            password: $("#reset-password")[0].value,
        };
        $.post("/reset-pwd", data, function (data, status) {
            window.location.href = "/login-business";
        });
    });
});

function submit_reset(e) {
    return false;
    e.preventDefault();
    if (
        $("#reset-password")[0].value != $("#reset-confirm-password")[0].value
    ) {
        alert("Confirm Password are mismatching!");
        return;
    }
    if ($("#reset-password").length < 8) {
        alert("Password should be between 8 and 20 length.");
        return;
    }
}
$(".login_buttons").on("click", "li", function () {
    $(".login_buttons .active").removeClass("active");
    $(this).addClass("active");
});

$(".hearts").click(function () {
    $(".hearts").hide();
    $(".hearts_red").show();
});

$(".hearts_red").click(function () {
    $(".hearts_red").hide();
    $(".hearts").show();
});

$(".owl-carousel").owlCarousel({
    margin: 10,
    nav: true,
    navText: [
        "<div class='nav-btn prev-slide'></div>",
        "<div class='nav-btn next-slide'></div>",
    ],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 3,
        },
    },
});
