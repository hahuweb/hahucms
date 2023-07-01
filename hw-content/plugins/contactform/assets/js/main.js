/**
 * Main
 * 
 */

$(document).ready(function () {
    $("form").submit(function (event) {
        event.preventDefault();
        var form = $(this);
        //var formData = {
        email = document.forms["uc"]["email"].value;
        subject = document.forms["uc"]["subject"].value;
        message = document.forms["uc"]["message"].value;
        firstname = document.forms["uc"]["firstname"].value;
        // };

        if (email == "") {
            $("#email-group").addClass("has-error");
            $("#email-group").append(
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">Email is required.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
            );
            return false;
        } else if (subject == "") {
            $("#subject-group").addClass("has-error");
            $("#subject-group").append(
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">Subject is required.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
            );
            return false;
        } else if (message == "") {
            $("#message-group").addClass("has-error");
            $("#message-group").append(
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">Message is required.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
            );
            return false;
        } else if (firstname != "") {
            return false;
        } else {
            $.ajax({
                type: 'POST',
                async: true,
                url: "hw-content/plugins/contactform/send.php",
                data: {
                    email: email,
                    subject: subject,
                    message: message,
                    firstname: firstname
                },
                datatype: 'json',
                cache: true,
                global: false,
                beforeSend: function () {
                    $('#loader').show();
                },
                success: function (data) {
                  
                    $('.contact-msg').html(data);
                },
                complete: function () {
                    $('#loader').hide();
                }
            });

        }
    });
});


