$(document).ready(function () {
    $("#login_btn").click(function () {
        var username = $("#username_login").val();
        var password = $("#password_login").val();
        console.log("Logging in");
        $("#loginModal .error").css('display', 'none', 'important');
        $.ajax({
            type: "POST",
            url: "Back-end/login.php",
            data: "user=" + username + "&psw=" + password,
            success: function (html) {
                if (html == 'true') {
                    window.location = "profile.php";
                    return true;
                }
                else {
                    $("#loginModal .error").css('display', 'block', 'important');
                }
            }
        });

        $("#registerModal .error").css('display', 'block', 'important');
        return false;
    });

    $("#signup_btn").click(function () {
        var username = $("#username_register").val();
        var password = $("#password_register").val();
        var email = $("#email_register").val();
        var phone = $("#phone_register").val();
        console.log("Signing up");
        $("#registerModal .error").css('display', 'none', 'important');
        $.ajax({
            type: "POST",
            url: "Back-end/register.php",
            data: "user=" + username + "&psw=" + password + "&phone=" + phone + "&email=" + email,
            success: function (html) {
                console.log(html);
                if (html == 'true') {
                    window.location = "profile.php";
                    return true;
                }
                else {
                    $("#registerModal .error").css('display', 'block', 'important');
                }
            }
        });

        $("#registerModal .error").css('display', 'block', 'important');
        return false;
    });


});