$(document).ready(function() {
    $("#sendContactBtn").on('click', function(e) {

        if ($('#send-contact-form')[0].checkValidity()) {
            e.preventDefault();
            // $('#sendContactBtn').val('Please wait...');
            // $('.loading').show();

            // console.log('clicked')
            if ($('#send-contact-form').length > 1) {

                $('#sendContactBtn').val('Please wait...');
                $('.loading').show();
            }

            $.ajax({
                type: "POST",
                url: "/contact-us",
                data: $("#send-contact-form").serialize(),

                success: function(response) {
                    // console.log(response);
                    $('#sendContactBtn').val('Send Message');

                    if (response != null) {
                        $('.sent-message').fadeIn().delay(3000).fadeOut();
                    } else {
                        $('.error-message').fadeIn().delay(3000).fadeOut();
                    }
                    $('.loading').hide();

                    resetForm();

                    function resetForm() {
                        document.getElementById('name').value = '';
                        document.getElementById('email').value = '';
                        document.getElementById('phone').value = '';
                        document.getElementById('subject').value = '';
                        document.getElementById('message').value = '';
                    }
                },
                error: function(response) {
                    // $('#sendContactBtn').val('Send Message');
                    // $('.loading').hide();
                    // console.log(response)
                    $('#name-error').text(response.responseJSON.errors.name);
                    $('#email-error').text(response.responseJSON.errors.email);
                    $('#mobile-number-error').text(response.responseJSON.errors.phone);
                    $('#subject-error').text(response.responseJSON.errors.subject);
                    $('#message-error').text(response.responseJSON.errors.message);
                }
            });

        }
    });
});


// $(document).ready(function() {
//     $('#name').on('input', function() {
//         checkname();
//     });
//     $('#email').on('input', function() {
//         checkemail();
//     });
//     $('#phone').on('input', function() {
//         checkphone();
//     });
//     $('#subject').on('input', function() {
//         checksubject();
//     });


//     $('#sendContactBtn').click(function() {

//         if (!checkname() && !checkemail() && !checkphone() && !checksubject()) {
//             console.log("er1");
//             $("#contact-message").html(`<div class="alert alert-warning">Please fill all the required fields</div>`);
//         } else if (!checkname() || !checkemail() || !checkphone() || !checksubject()) {
//             $("#contact-message").html(`<div class="alert alert-warning">Please fill all the required fields</div>`);
//             console.log("er");
//         } else {
//             console.log("ok");
//             $("#contact-message").html("");
//             // var form = $('#send-contact-form')[0];
//             // var data = new FormData(form);
//             $.ajax({
//                 type: "POST",
//                 url: "/contact-us",
//                 data: $("#send-contact-form").serialize(),
//                 success: function(data) {
//                     console.log(data)
//                     $('#contact-message').html(data);
//                     $('#sendContactBtn').val('Send Message');
//                 }

//             });
//         }
//     });
// });


function checkname() {
    var pattern = /^[A-Za-z0-9]+$/;
    var user = $('#name').val();
    var validuser = pattern.test(user);
    if ($('#name').val().length < 4) {
        $('#name-error').html('name length is too short');
        return false;
    } else if (!validuser) {
        $('#name-error').html('name should be a-z ,A-Z only');
        return false;
    } else {
        $('#name-error').html('');
        return true;
    }
}

function checkemail() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#email').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#email-error').html('required field');
        return false;
    } else if (!validemail) {
        $('#email-error').html('invalid email');
        return false;
    } else {
        $('#email-error').html('');
        return true;
    }
}

function checkphone() {
    if (!$.isNumeric($("#phone").val())) {
        $("#mobile-number-error").html("only number is allowed");
        return false;
    } else if ($("#phone").val().length != 10) {
        $("#mobile-number-error").html("10 digit required");
        return false;
    } else {
        $("#mobile-number-error").html("");
        return true;
    }
}


function checksubject() {
    var pattern = /^[A-Za-z0-9]+$/;
    var user = $('#subject').val();
    var validuser = pattern.test(user);
    if ($('#subject').val().length < 4) {
        $('#subject-error').html('subject length is too short');
        return false;
    } else if (!validuser) {
        $('#subject-error').html('subject should be a-z ,A-Z only');
        return false;
    } else {
        $('#subject-error').html('');
        return true;
    }
}


// $(document).ready(function() {
//     $("#sendInquiryBtn").on('click', function(e) {

//         if ($('#send-inquiry-form')[0].checkValidity()) {

//             e.preventDefault();
//             // console.log('clicked')
//             if ($('#send-inquiry-form').length > 1) {
//                 $('#sendInquiryBtn').val('Please wait...');
//                 $('.loading').show();
//             }


//             $.ajax({
//                 type: "POST",
//                 url: "/inquiry",
//                 data: $("#send-inquiry-form").serialize(),
//                 error: function(response) {
//                     $('#name-error').text(response.responseJSON.errors.name);
//                     $('#email-error').text(response.responseJSON.errors.email);
//                     $('#mobile-number-error').text(response.responseJSON.errors.phone);
//                     $('#message-error').text(response.responseJSON.errors.message);
//                 },
//                 success: function(response) {
//                     // console.log(response);
//                     $('#sendInquiryBtn').val('Send Message');

//                     if (response != null) {
//                         $('.sent-message').fadeIn().delay(3000).fadeOut();
//                     } else {
//                         $('.error-message').fadeIn().delay(3000).fadeOut();
//                     }
//                     $('.loading').hide();

//                     resetForm();

//                     function resetForm() {
//                         document.getElementById('name').value = '';
//                         document.getElementById('email').value = '';
//                         document.getElementById('phone').value = '';
//                         document.getElementById('message').value = '';
//                     }
//                 },

//             });

//         }
//     });
// });