$(function () {

    $("#name_error").hide();
    $("#email_error").hide();
    $("#message_error").hide();

    var name_error = false;
    var email_error = false;
    var message_error = false;

    $("#name").focusout(function () {

        check_username();

    });

    $("#email").focusout(function () {

        check_email();

    });

    $("#message").focusout(function () {

        check_message();

    });


    function check_username() {

        var username_length = $("#name").val().length;

        if (username_length < 5 || username_length > 20) {
            $("#name_error").html("Should be between 5-20 characters");
            $("#name_error").show();
            name_error = true;
        } else {
            $("#name_error").hide();
        }

    }

    function check_message() {
        var message_length = $("#message").val().length;

        if (message_length < 5 || message_length > 20) {
            $("#message_error").html("Should be between 5-20 characters");
            $("#message_error").show();
            message_error = true;
        } else {
            $("#message_error").hide();
        }
    }

    function check_email() {

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

        if (pattern.test($("#email").val())) {
            $("#email_error").hide();
        } else {
            $("#email_error").html("Invalid email address");
            $("#email_error").show();
            email_error = true;
        }

    }

    $("#form").submit(function () {
        name_error = false;
        email_error = false;
        message_error = false;
        check_username();
        check_message();
        check_email();

        if (name_error == false && email_error == false && message_error == false) {
            return true;
        } else {
            return false;
        }

    });

});
