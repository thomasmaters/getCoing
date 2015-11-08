$(document).ready(function () {
    $("#login_btn").click(function () {
        $("#loginModal .error").css('display', 'none', 'important');
        var post_data = {
            'user'        : $("#username_login").val(),
            'psw'      : $("#password_login").val()
        };

        $.post('/Back-end/login.php', post_data, function(response) {
            console.log(response);
            if(response.type == 'error'){
                $("#loginModal .error").css('display', 'block', 'important');
            } else {
                $("#loginModal .error").css('display', 'none', 'important');
                $('#loginModal').modal('hide');
                $(location).attr('href', 'http://hackathon.egordmitriev.net/profile.php')
            }
        }, 'json');
        return false;
    });

    $("#signup_btn").click(function () {
        $("#registerModal .error").css('display', 'none', 'important');
        var post_data = {
            'user'        : $("#username_register").val(),
            'psw'      : $("#password_register").val(),
            'email'           : $("#email_register").val(),
            'phone'       : $("#phone_register").val()
        };

        $.post('/Back-end/register.php', post_data, function(response) {
            console.log(response);
            if(response.type == 'error'){
                $("#registerModal .error").css('display', 'block', 'important');
            } else {
                $("#registerModal .error").css('display', 'none', 'important');
                $('#registerModal').modal('hide');
                $(location).attr('href', 'http://hackathon.egordmitriev.net/profile.php')
            }
        }, 'json');
        return false;
    });
});