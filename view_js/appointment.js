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
document.getElementById("time").addEventListener("change", function () {
    let timeInput = this.value;
    let errorMsg = document.getElementById("error_time");

    if (timeInput) {
        let [hours, minutes] = timeInput.split(":").map(Number);
        let totalMinutes = hours * 60 + minutes;

        let minMinutes = 9 * 60;   // 9:00 AM
        let maxMinutes = 21 * 60;  // 9:00 PM

        if (totalMinutes < minMinutes || totalMinutes > maxMinutes) {
            errorMsg.textContent = "Please select a time between 9:00 AM and 9:00 PM.";
            this.value = ""; // clear invalid time
        } else {
            errorMsg.textContent = "";
        }
    }
});