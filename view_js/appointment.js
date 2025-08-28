	/* Appointment form validation */
	$(document).ready(function(){
    $('#appointmentForm').on('submit', function(e){
        e.preventDefault();
        $('.help-block').html(''); // Clear previous errors
        $('#msgSubmit').html('');

        $.ajax({
            type: "POST",
            url: "appointment_submit.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response){
                if(response.errors){
                    // Display errors under each field
                    $.each(response.errors, function(key, val){
                        $('#error_' + key).html(val);
                    });
                } else if(response.success){
                    // $('#msgSubmit').html(response.success);
                    $('#appointmentForm')[0].reset();
                    window.location.href = "thankyou.php";
                }
            },
            error: function(){
                alert("An error occurred. Please try again.");
            }
        });
    });
});