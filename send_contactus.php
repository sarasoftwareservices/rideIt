<?php
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "adityalohar5838@gmail.com";
    $subject = "Contact Us Form Submission";
    $message = "<html><body>";
    $message .= "<div style='background-color: #cdb130; padding: 10px;color: white;'>";
    $message .= "<div style='display: flex; align-items: center;'>";
    $message .= "<div style='border-radius: 50%; overflow: hidden; margin-right: 10px;'>";
    // $message .= "<img src='https://media.licdn.com/dms/image/C510BAQEpnHCgHMlmVA/company-logo_200_200/0/1631425502826/nmconsultants_logo?e=2147483647&v=beta&t=BuIUkWAK1rWfNzJHfjSiCXPecjvXrLYp4oKz_QyMQ_w' alt='Image' style='width: 50px; height: 50px; border-radius: 50%;'>";
    $message .= "</div>";
    $message .= "<div style='flex: 1;'>";   
    $message .= "<strong style='font-size: 23px; font-weight: bold;'>Hello RideIt Team</strong>";
    $message .= "</div>";
    $message .= "</div>";
    $message .= "</div>";
    $message .= "<p>I hope this email finds you well. I wanted to inform you that an inquiry has been submitted through the website regarding your school.</p>";
    $message .= "<p><strong>Below are the details provided by the user:</strong></p>";
    $message .= "<ul>";
    $message .= "<li><strong>Name:</strong> " . $_POST['name'] . "</li>";
    $message .= "<li><strong>Last Name:</strong> " . $_POST['last'] . "</li>";
    $message .= "<li><strong>Email:</strong> " . $_POST['email'] . "</li>";
    $message .= "<li><strong>Subject:</strong> " . $_POST['subject'] . "</li>";
    $message .= "<li><strong>Message:</strong> " . $_POST['message'] . "</li>";
    $message .= "</ul>";
    $message .= "<p>Please review the inquiry and respond accordingly. If you have any questions or require further information, feel free to reach out.</p>";
    $message .= "<p>Thank you for your attention to this matter.</p>";
    $message .= "<p>Best regards,</p>";
    $message .= $_POST['name'];
    $message .= "</body></html>";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->SMTPDebug = 4;
    $mail->isSMTP();
   // $mail->Host = 'smtp.office365.com'; // Outlook SMTP server
   $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = "adityalohar5838@gmail.com"; // Your Outlook email
    $mail->Password = "xlsl lqod sfxo lqem"; // Your Outlook email password
    $mail->SMTPSecure = 'tls'; // TLS encryption
    $mail->Port = 587; // Port for TLS
    $mail->isHTML(true);

    // No need to set the 'From' email since it's not provided by the form
    $mail->addAddress($to);

    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
} else {
    // Handle invalid request
    echo "Invalid request";
}
?>
