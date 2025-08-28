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

document.getElementById("slot").addEventListener("change", function () {
    let dateTimeInput = this.value; // e.g. "2025-08-28T08:30"
    let errorMsg = document.getElementById("slotError");

    if (dateTimeInput) {
        // Extract time part from datetime-local value
        let timePart = dateTimeInput.split("T")[1]; // "08:30"
        let [hours, minutes] = timePart.split(":").map(Number);
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