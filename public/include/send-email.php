<?php 
require __DIR__ . '/../../devs-des1re.com/ftpmanager/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$name = $_POST["name"] ?? '';
$email = $_POST["email"] ?? '';
$message = $_POST["message"] ?? '';

$env = parse_ini_file(__DIR__ . '/../../devs-des1re.com/ftpmanager/.env');
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = $env["SMTP_HOST"];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $env["SMTP_PORT"];

    $mail->Username = $env["SMTP_USERNAME"];
    $mail->Password = $env["SMTP_PASSWORD"];

    $mail->setFrom($env['SMTP_USERNAME'], 'Your Website');
    $mail->addAddress("contact@devs-des1re.com", "devs_des1re");
    $mail->addReplyTo($email, $name);

    $mail->Subject = "New Inquiry";
    $mail->Body = "From: " . $email . "\n\n" . $message;

    $mail->send();

    // Redirect to success
    session_start();
    $_SESSION["redirected"] = true;

    header("Location: success");
    exit;
} catch (Exception $error) {
    session_start();
    $_SESSION["redirected"] = true;

    error_log("Error while sending mail: " . $mail->ErrorInfo);
    header("Location: error");
    exit;
}