<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include 'database.php';

$response = ['errors' => [], 'success' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname   = trim($_POST['fname']);
    $lname   = trim($_POST['lname']);
    $email   = trim($_POST['email']);
    $phone   = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Validation
    if (empty($fname)) $response['errors']['fname'] = "First name is required";
    if (empty($lname)) $response['errors']['lname'] = "Last name is required";
    if (empty($email)) $response['errors']['email'] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $response['errors']['email'] = "Invalid email format";
    if (empty($phone)) $response['errors']['phone'] = "Phone number is required";


    if (empty($response['errors'])) {
        $stmt = $conn->prepare("INSERT INTO contacts (fname,lname,email,phone,message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $email, $phone, $message);

        if ($stmt->execute()) {
            $response['success'] = "✅ Message sent successfully! A confirmation email has been sent.";

            // ---------- Admin Email ----------
            $toAdmin  = "contact@hbot.in, sanju@sda-zone.com, rekha@sda-zone.com, shirin@sda-zone.com";
            $subjectAdmin = "Enquiry Request from Prana Website";
            // New Contact Form Submission
            $bodyAdmin = '
            <!DOCTYPE html>
            <html>
            <head>
              <meta charset="UTF-8">
              <title>Contact Request</title>
            </head>
            <body style="margin:0; padding:0; font-family: Arial, sans-serif; background:#f4f4f4;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:20px 0;">
                    <table border="0" cellpadding="0" cellspacing="0" width="600" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                      
                      <!-- Header -->
                      <tr>
                        <td align="center" style="background:#3d5641; padding:20px;">
                          <img src="https://hbot.in/images/logo/prana-logo-light.png" alt="Prana Clinic" style="max-width:180px;">
                        </td>
                      </tr>
                      
                      <!-- Body -->
                      <tr>
                        <td style="padding:20px; color:#333;">
                          <h2 style="margin:0 0 10px; color:#3d5641;">Contact Request</h2>
                          <p><strong>First Name:</strong> '.$fname.'</p>
                          <p><strong>Last Name:</strong> '.$lname.'</p>
                          <p><strong>Email:</strong> '.$email.'</p>
                          <p><strong>Phone:</strong> '.$phone.'</p>
                          <p><strong>Message:</strong><br>'.$message.'</p>
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

            $headersAdmin = "MIME-Version: 1.0\r\n";
            $headersAdmin .= "Content-type:text/html;charset=UTF-8\r\n";
            $headersAdmin .= "From: no-reply@pranaclinic.com\r\n";
            mail($toAdmin, $subjectAdmin, $bodyAdmin, $headersAdmin);


            // ---------- User Thank You Email ----------
            $toUser = $email;
            $subjectUser = "Thank you for contacting Prana";

            $bodyUser = '
            <!DOCTYPE html>
            <html>
            <head>
              <meta charset="UTF-8">
              <title>Thank You</title>
            </head>
            <body style="margin:0; padding:0; font-family: Arial, sans-serif; background:#f4f4f4;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:20px 0;">
                    <table border="0" cellpadding="0" cellspacing="0" width="600" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 5px rgba(0,0,0,0.1);">

                      <!-- Header -->
                      <tr>
                        <td align="center" style="background:#3d5641; padding:20px;">
                          <img src="https://sda.in.net/web/prana/v7/images/logo/prana-logo-light.png" alt="Prana" style="max-width:180px;">
                        </td>
                      </tr>

                      <!-- Body -->
                      <tr>
                        <td style="padding:20px; color:#333;">
                          <h2 style="color:#3d5641; margin-top:0;">Thank you for reaching out!</h2>
                          <p>Dear '.$fname.' '.$lname.',</p>
                          <p>We have received your message and will get back to you shortly.</p>
                          <p><strong>Your message:</strong><br>'.$message.'</p>
                          <br>
                          <p style="margin:0;">Regards,</p>
                          <p style="margin:0; font-weight:bold;">Team Prana</p>
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

            $headersUser = "MIME-Version: 1.0\r\n";
            $headersUser .= "Content-type:text/html;charset=UTF-8\r\n";
            $headersUser .= "From: no-reply@pranaclinic.com\r\n"; 
            mail($toUser, $subjectUser, $bodyUser, $headersUser);

        } else {
            $response['errors']['form'] = "❌ Something went wrong. Please try again.";
        }

        $stmt->close();
    }

    $conn->close();
    echo json_encode($response);
}
?>
