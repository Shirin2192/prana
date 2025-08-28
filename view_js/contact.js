	/* Contact form validation */
	$(document).ready(function() {
    $('#contactForms').on('submit', function(e) {
        e.preventDefault(); // prevent default form submit

        // Clear previous errors
        $('.text-danger').html('');
        $('#success_message').html('');

        $.ajax({
            type: "POST",
            url: "contact_submit.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if(response.errors) {
                    $.each(response.errors, function(key, value) {
                        $('#error_' + key).html(value);
                    });
                }
                if(response.success) {
                    // $('#success_message').html(response.success);
                    $('#contactForms')[0].reset(); // clear form
                    window.location.href = "thankyou.php";
                }
            },
            error: function() {
                $('#error_form').html("⚠️ Something went wrong with AJAX request.");
            }
        });
    });
});