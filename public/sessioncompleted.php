<?php
require __DIR__ . "/../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(404);
    header("Location: 404");
    exit;
}

$env = parse_ini_file(__DIR__ . "/../.env");
\Stripe\Stripe::setApiKey($env["STRIPE_KEY"]);

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'] ?? null;
$endpoint_secret = $env['STRIPE_WEBHOOK_SECRET'];

try {
    $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
} catch (\Exception $e) {
    http_response_code(400);
    exit;
}

if ($event->type === 'checkout.session.completed') {
    $session = $event->data->object;
    $email = $session->customer_details->email;
    $name = $session->metadata->name;

    $noreply_email = new PHPMailer(true);

    $noreply_email->isSMTP();
    $noreply_email->SMTPAuth = true;

    $noreply_email->Host = $env["SMTP_HOST"];
    $noreply_email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $noreply_email->Port = 587;

    $noreply_email->Username = $env["NOREPLY_EMAIL"];
    $noreply_email->Password = $env["NOREPLY_PASSWORD"];
    
    $noreply_email->setFrom("noreply@devs-des1re.com", "devs-des1re");
    $noreply_email->addAddress($email, $name);

    $noreply_email->Subject = "Thank you for donating!";

    $noreply_template = file_get_contents(__DIR__ .  "/elements/emails/noreply.html");
    $donation_template = file_get_contents(__DIR__ . "/elements/messages/donation.txt");
    $noreply_template = str_replace(
        ["{{name}}", "{{message}}"],
        [$name, $donation_template],
        $noreply_template
    );

    $noreply_email->isHTML(true);
    $noreply_email->Body = $noreply_template;

    $noreply_email->send();
}

http_response_code(200);