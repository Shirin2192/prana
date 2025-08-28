$(document).ready(function() {
    $('#appointmentForm').on('submit', function(e) {
        e.preventDefault(); // prevent default form submit

        // Clear previous errors
        $('#nameError').text('');
        $('#phoneError').text('');
        $('#slotError').text('');
        $('#response').html('');

        $.ajax({
            url: 'live_longer_appointment.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.success) {
                    $('#response').html('<div class="alert alert-success">' + res.message + '</div>');
                    $('#appointmentForm')[0].reset();
                    window.location.href = "thankyou.php";
                } else if(res.errors) {
                    if(res.errors.name) $('#nameError').text(res.errors.name);
                    if(res.errors.phone) $('#phoneError').text(res.errors.phone);
                    if(res.errors.slot) $('#slotError').text(res.errors.slot);
                }
            },
            error: function() {
                $('#response').html('<div class="alert alert-danger">Something went wrong!</div>');
            }
        });
    });
});