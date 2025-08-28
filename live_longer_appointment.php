<?php
include 'database.php'; // mysqli connection $conn
header('Content-Type: application/json');
$response = [];
$errors = [];

// Get POST data
$name  = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$slot  = trim($_POST['slot'] ?? '');

// Validation
if (empty($name)) {
    $errors['name'] = 'Name is required';
} elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    $errors['name'] = 'Only letters and spaces allowed';
}

if (empty($phone)) {
    $errors['phone'] = 'Phone is required';
} elseif (!preg_match("/^[0-9+ ]{10,15}$/", $phone)) {
    $errors['phone'] = 'Invalid phone number';
}

if (empty($slot)) {
    $errors['slot'] = 'Date & Time is required';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Insert into DB
$stmt = $conn->prepare("INSERT INTO live_longer (name, phone, slot) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $phone, $slot);

if ($stmt->execute()) {

    // ------------------ Admin Email ------------------
    $toAdmin = "contact@hbot.in, sanju@sda-zone.com, rekha@sda-zone.com, shirin@sda-zone.com";
    $subjectAdmin = "Appointment booked from Prana website - Live Longer";

    $bodyAdmin = '
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8">
      <title>Appointment</title>
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
                       alt="Prana" style="max-width:180px;">
                </td>
              </tr>
              
              <!-- Body -->
              <tr>
                <td style="padding:20px; color:#333;">
                  <h2 style="margin:0 0 15px; color:#3d5641;">Appointment Booked</h2>
                  <p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>
                  <p><strong>Phone:</strong> ' . htmlspecialchars($phone) . '</p>
                  <p><strong>Preferred Date & Time:</strong> ' . htmlspecialchars($slot) . '</p>
                </td>
              </tr>
              <!-- Footer -->
              <tr>
                <td align="center" style="background:#f4f4f4; padding:15px; font-size:12px; color:#666;">
                  &copy; ' . date("Y") . ' Prana. All rights reserved.
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
    echo json_encode(['success' => true, 'message' => 'Appointment booked successfully!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to book appointment']);
}

$stmt->close();
$conn->close();
?>
