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