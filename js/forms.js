$(".spinner-border").hide();


$('#contact-form').click(function() {
    const fname = $('input[name="name"]').val();
    const email = $('input[name="email"]').val();
    const phone = $('input[name="phone"]').val();
    const subject = $('input[name="subject"]').val();
    const message = $('textarea[name="message"]').val();
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (fname == '') {
        $('#name').addClass('is-invalid');
        return false;
    } else {
        $('#name').removeClass('is-invalid');
    }

    
    if (email == '') {
        $('#email').addClass('is-invalid');
        return false;
    } 
    if (!email.match(mailformat)) {
        $('#email').addClass('is-invalid');
        return false;
    } else {
        $('#email').removeClass('is-invalid');
    }
    if (phone == '') {
        $('#phone').addClass('is-invalid');
        return false;
    } 
    if (isNaN(phone))  {
        $('#phone').addClass('is-invalid');
        return false;
    } else {
        $('#phone').removeClass('is-invalid');
    }
    

    if (subject == '') {
        $('#subject').addClass('is-invalid');
        return false;
    } else {
        $('#subject').removeClass('is-invalid');
    }

    if (message == '') {
        $('#message').addClass('is-invalid');
        return false;
    } else {
        $('#message').removeClass('is-invalid');
    }

    // $(".spinner-border").addClass('show');
    $(".spinner-border").show();

    $.post("send_email.php", {
            form: "contact",
            f_name: fname,
            email: email,
            phone: phone,
            subject: subject,
            msg: message,
            g_recaptcha_response: grecaptcha.getResponse(),
        }, 

        function(data, status) {
            console.log(data);
            if (data == 'success') {
                $("#success-msg").fadeIn(300).delay(3000).fadeOut(200);
                $("input").val('');
                $("textarea").val('');
                $('.captcha-error').text('');
            } else if (data == 'captcha-error') {
                $('.captcha-error').text('Captcha is required');
            } else {
                $("#fail-msg").fadeIn(300).delay(3000).fadeOut(200);
            }
        });

    $(document).ajaxComplete(function() {
        $(".spinner-border").fadeOut();
    });

});









$('#register-form').click(function() {

    const fname = $('input[name="name"]').val();
    const email = $('input[name="email"]').val();
    const phone = $('input[name="phone"]').val();
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   
    if (fname == '') {
        $('#name').addClass('is-invalid');
        return false;
    } else {
        $('#name').removeClass('is-invalid');
    }

    if (email == '') {
        $('#email').addClass('is-invalid');
        return false;
    } 
    if (!email.match(mailformat)) {
        $('#email').addClass('is-invalid');
        return false;
    } else {
        $('#email').removeClass('is-invalid');
    }

    if (phone == '') {
        $('#phone').addClass('is-invalid');
        return false;
    } 
    if (isNaN(phone))  {
        $('#phone').addClass('is-invalid');
        return false;
    } else {
        $('#phone').removeClass('is-invalid');
    }

    $(".spinner-border").show();

    $.post("send_email.php", {
            form: "register",
            f_name: fname,
            email: email,
            phone: phone,
            g_recaptcha_response: grecaptcha.getResponse(),
        },

        function(data, status) {
            if (data == 'success') {
                $("#success-msg").fadeIn(300).delay(3000).fadeOut(300);
                $('.captcha-error').text('');
                $("input").val('');
            } else if (data == 'captcha-error') {
                $('.captcha-error').text('Captcha is required');
            } else {
                $("#fail-msg").fadeIn(300).delay(3000).fadeOut(300);
            }
        });

    $(document).ajaxComplete(function() {
        $(".spinner-border").fadeOut();
    });
});