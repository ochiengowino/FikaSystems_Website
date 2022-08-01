$(document).ready(function() {
    $("#sendContactBtn").on('click', function(e) {

        // if ($('#send-contact-form')[0].checkValidity()) {

        e.preventDefault();
        // console.log('clicked')
        $('#sendContactBtn').val('Please wait...');
        $('.loading').show();

        $.ajax({
            type: "POST",
            url: "/contact-us",
            data: $("#send-contact-form").serialize(),
            error: function(response) {
                // $('#sendContactBtn').val('Send Message');
                // $('.loading').hide();
                $('#name-error').text(response.responseJSON.errors.name);
                $('#email-error').text(response.responseJSON.errors.email);
                $('#mobile-number-error').text(response.responseJSON.errors.phone);
                $('#subject-error').text(response.responseJSON.errors.subject);
                $('#message-error').text(response.responseJSON.errors.message);
            },
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

        });

        // }
    });
});