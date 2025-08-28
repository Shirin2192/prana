<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include 'database.php'; // mysqli connection $conn

header('Content-Type: application/json');

$errors = [];

$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$services = trim($_POST['services'] ?? '');
$date     = trim($_POST['date'] ?? '');
$time     = trim($_POST['time'] ?? '');

// Validation
if(empty($name)) $errors['name'] = "Name is required";
if(empty($email)) $errors['email'] = "Email is required";
if(empty($phone)) $errors['phone'] = "Phone is required";
if(empty($services)) $errors['services'] = "Select a service";
if(empty($date)) $errors['date'] = "Date is required";
if(empty($time)) $errors['time'] = "Time is required";

if(!empty($errors)){
    echo json_encode(['errors' => $errors]);
    exit;
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, services, date, time) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $phone, $services, $date, $time);

if($stmt->execute()){

    // ✅ Shared Email Template Wrapper
    function buildEmailTemplate($title, $contentHtml){
        return '
        <!DOCTYPE html>
        <html>
        <head>
          <meta charset="UTF-8">
          <title>'.$title.'</title>
        </head>
        <body style="margin:0; padding:0; font-family: Arial, sans-serif; background:#f4f4f4;">
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td align="center" style="padding:20px 0;">
                <table border="0" cellpadding="0" cellspacing="0" width="600" 
                       style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                  
                  <!-- Header -->
                  <tr>
                    <td align="center" style="background:#3d5641; padding:20px;">
                      <img src="https://hbot.in/images/logo/prana-logo-light.png" 
                           alt="Prana Clinic" style="max-width:180px;">
                    </td>
                  </tr>
                  
                  <!-- Body -->
                  <tr>
                    <td style="padding:20px; color:#333; font-size:15px; line-height:1.6;">
                      '.$contentHtml.'
                    </td>
                  </tr>

                  <!-- Footer -->
                  <tr>
                    <td align="center" style="background:#f4f4f4; padding:15px; font-size:12px; color:#666;">
                      &copy; '.date("Y").' Prana. All rights reserved.
                    </td>
                  </tr>

                </table>
              </td>
            </tr>
          </table>
        </body>
        </html>';
    }

    // 1️⃣ Admin Email Notification
    $toAdmin  = "contact@hbot.in, sanju@sda-zone.com, rekha@sda-zone.com, shirin@sda-zone.com";  
    $subjectAdmin = "📅 Appointment Request from Prana website";
    $contentAdmin = "
        <h2 style='color:#3d5641; margin-top:0;'>Appointment Request</h2>
        <p><strong>Name:</strong> ".htmlspecialchars($name)."</p>
        <p><strong>Email:</strong> ".htmlspecialchars($email)."</p>
        <p><strong>Phone:</strong> ".htmlspecialchars($phone)."</p>
        <p><strong>Service:</strong> ".htmlspecialchars($services)."</p>
        <p><strong>Date:</strong> ".htmlspecialchars($date)."</p>
        <p><strong>Time:</strong> ".htmlspecialchars($time)."</p>
    ";
    $bodyAdmin = buildEmailTemplate("Appointment Request", $contentAdmin);

    $headersAdmin = "MIME-Version: 1.0\r\n";
    $headersAdmin .= "Content-type:text/html;charset=UTF-8\r\n";
    $headersAdmin .= "From: no-reply@pranaclinic.com\r\n";

    mail($toAdmin, $subjectAdmin, $bodyAdmin, $headersAdmin);


    // 2️⃣ Customer Confirmation Email
    $toUser  = $email;  
    $subjectUser = "Appointment Confirmation";
    $contentUser = "
        <h2 style='color:#3d5641; margin-top:0;'>Appointment Confirmed</h2>
        <p>Dear <strong>".htmlspecialchars($name)."</strong>,</p>
        <p>Thank you for booking your appointment with <strong>Prana</strong>. Here are your appointment details:</p>
        <p><strong>Service:</strong> ".htmlspecialchars($services)."</p>
        <p><strong>Date:</strong> ".htmlspecialchars($date)."</p>
        <p><strong>Time:</strong> ".htmlspecialchars($time)."</p>
        <br>
        <p style='margin:0;'>We will contact you if we need further information.</p>
        <p style='margin:0;'>See you soon!</p>
        <br>
        <p style='margin:0;'>Regards,</p>
        <p style='margin:0; font-weight:bold;'>Team Prana</p>
    ";
    $bodyUser = buildEmailTemplate("Appointment Confirmation", $contentUser);

    $headersUser = "MIME-Version: 1.0\r\n";
    $headersUser .= "Content-type:text/html;charset=UTF-8\r\n";
    $headersUser .= "From: no-reply@pranaclinic.com\r\n";

    mail($toUser, $subjectUser, $bodyUser, $headersUser);

    echo json_encode(['success' => "✅ Appointment booked successfully! A confirmation email has been sent."]);

} else {
    echo json_encode(['errors' => ['form' => "❌ Something went wrong. Please try again."]]);
}

$stmt->close();
$conn->close();
?>
