<?php 
require __DIR__ . "/../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$env = parse_ini_file(__DIR__ . "/../.env");

$site_key = $env["CLOUDFLARE_SITEKEY"];
$secret_key = $env["CLOUDFLARE_SECRETKEY"];

$success = false;
$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $response_token = $_POST["cf-turnstile-response"] ?? "";
    $remote_ip = $_SERVER["REMOTE_ADDR"];

    if ($response_token) {
        $data = [
            "secret" => $secret_key,
            "response" => $response_token,
            "remoteip" => $remote_ip
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://challenges.cloudflare.com/turnstile/v0/siteverify");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response, true);

        if ($result && isset($result["success"]) && $result["success"] === true) {
            $message_email = new PHPMailer(true);
            $noreply_email = new PHPMailer(true);

            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            try {
                // CONTACT MESSAGE
                $message_email->isSMTP();
                $message_email->SMTPAuth = true;

                $message_email->Host = $env["SMTP_HOST"];
                $message_email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $message_email->Port = 587;

                $message_email->Username = $env["NOREPLY_EMAIL"];
                $message_email->Password = $env["NOREPLY_PASSWORD"];
                
                $message_email->setFrom($email, $name);
                $message_email->addAddress("noreply@devs-des1re.com", "devs-des1re");

                $message_email->Subject = "Contact Message";

                $noreply_from_template = file_get_contents(__DIR__ .  "/elements/emails/noreply.html");
                $contact_from_template = file_get_contents(__DIR__ . "/elements/messages/contact_from.txt");

                $contact_from_template = str_replace(
                    ["{{from}}", "{{email}}", "{{message}}"],
                    [$name, $email, $message],
                    $contact_from_template
                );

                $noreply_from_template = str_replace(
                    ["{{name}}", "{{message}}"],
                    ["devs_des1re", $contact_from_template],
                    $noreply_from_template
                );

                $message_email->isHTML(true);
                $message_email->Body = $noreply_from_template;

                $message_email->send();

                // TO CONTACT
                $noreply_email->isSMTP();
                $noreply_email->SMTPAuth = true;

                $noreply_email->Host = $env["SMTP_HOST"];
                $noreply_email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $noreply_email->Port = 587;

                $noreply_email->Username = $env["NOREPLY_EMAIL"];
                $noreply_email->Password = $env["NOREPLY_PASSWORD"];
                
                $noreply_email->setFrom("noreply@devs-des1re.com", "devs-des1re");
                $noreply_email->addAddress($email, $name);

                $noreply_email->Subject = "Thank you for contacting!";

                $noreply_to_template = file_get_contents(__DIR__ .  "/elements/emails/noreply.html");
                $contact_to_template = file_get_contents(__DIR__ . "/elements/messages/contact_to.txt");
                $noreply_to_template = str_replace(
                    ["{{name}}", "{{message}}"],
                    [$name, $contact_to_template],
                    $noreply_to_template
                );

                $noreply_email->isHTML(true);
                $noreply_email->Body = $noreply_to_template;

                $noreply_email->send();
                
                header("Location: /contact?success=1");
                exit;
            } catch (Exception $e) {
                echo $e;
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devs_des1re - Contact</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cascadia+Mono:ital,wght@0,200..700;1,200..700&display=swap" rel="stylesheet">
    <link rel="icon" href="/elements/images/favicon.ico?v=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>

    <script><?php include("elements/js/copyright.js"); ?></script>
</head>
<body class=" flex flex-col min-h-screen bg-[#F5F5F5] font-['Cascadia_Mono']">
    <?php include("elements/html/navbar.html"); ?>

    <main class="flex-grow flex items-center justify-center px-10 py-10">
        <section class="w-full">
            <div class="container px-6 mx-auto">
                <div class="lg:flex lg:items-center lg:-mx-6">
                    <div class="lg:w-1/2 lg:mx-6">
                        <h1 class="text-2xl font-semibold capitalize lg:text-3xl">
                            Contact me for <br> more info
                        </h1>

                        <div class="mt-6 space-y-8 md:mt-8">
                            <p class="flex items-start -mx-2">
                                <svg class="fill-current mx-2" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.317 4.37a19.8 19.8 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.3 18.3 0 0 0-5.487 0a13 13 0 0 0-.617-1.25a.08.08 0 0 0-.079-.037A19.7 19.7 0 0 0 3.677 4.37a.1.1 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.08.08 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.08.08 0 0 0 .084-.028a14 14 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13 13 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10 10 0 0 0 .372-.292a.07.07 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.07.07 0 0 1 .078.01q.181.149.373.292a.077.077 0 0 1-.006.127a12.3 12.3 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.08.08 0 0 0 .084.028a19.8 19.8 0 0 0 6.002-3.03a.08.08 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.06.06 0 0 0-.031-.03M8.02 15.33c-1.182 0-2.157-1.085-2.157-2.419c0-1.333.956-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.956 2.418-2.157 2.418m7.975 0c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.955-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.946 2.418-2.157 2.418"/></svg>

                                <span class="mx-2 text-[#1C1C1C] truncate w-72">
                                    @devs_des1re
                                </span>
                            </p>

                            <p class="flex items-start -mx-2">
                                <svg class="fill-current mx-2" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2"/></svg>

                                <span class="mx-2 text-[#1C1C1C] truncate w-72">@devs-des1re</span>
                            </p>

                            <p class="flex items-start -mx-2">
                                <svg class="fill-current mx-2" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64L12 9.548l6.545-4.91l1.528-1.145C21.69 2.28 24 3.434 24 5.457"/></svg>

                                <span class="mx-2 text-[#1C1C1C] truncate w-72">contact@devs-des1re.com</span>
                            </p>
                        </div>

                        <div class="mt-6 w-80 md:mt-8">
                            <h3 class=" mb-1">Follow Me</h3>

                            <div class="flex -mx-2 my-2 md:my-0">
                                <a class="mx-2 transition-colors duration-300 hover:text-[#0099FF]" href="https://www.youtube.com/@devs_des1re" target="_blank"><svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.498 6.186a3.02 3.02 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.02 3.02 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.02 3.02 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.02 3.02 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814M9.545 15.568V8.432L15.818 12z"/></svg></a>
                                <a class="mx-2 transition-colors duration-300 hover:text-[#0099FF]" href="https://www.discord.com/users/1096369071961952377" target="_blank"><svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.317 4.37a19.8 19.8 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.3 18.3 0 0 0-5.487 0a13 13 0 0 0-.617-1.25a.08.08 0 0 0-.079-.037A19.7 19.7 0 0 0 3.677 4.37a.1.1 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.08.08 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.08.08 0 0 0 .084-.028a14 14 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13 13 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10 10 0 0 0 .372-.292a.07.07 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.07.07 0 0 1 .078.01q.181.149.373.292a.077.077 0 0 1-.006.127a12.3 12.3 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.08.08 0 0 0 .084.028a19.8 19.8 0 0 0 6.002-3.03a.08.08 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.06.06 0 0 0-.031-.03M8.02 15.33c-1.182 0-2.157-1.085-2.157-2.419c0-1.333.956-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.956 2.418-2.157 2.418m7.975 0c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.955-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.946 2.418-2.157 2.418"/></svg></a>
                                <a class="mx-2 transition-colors duration-300 hover:text-[#0099FF]" href="https://www.facebook.com/devsdes1re/" target="_blank"><svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978c.401 0 .955.042 1.468.103a9 9 0 0 1 1.141.195v3.325a9 9 0 0 0-.653-.036a27 27 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.7 1.7 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103l-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647"/></svg></a>
                                <a class="mx-2 transition-colors duration-300 hover:text-[#0099FF]" href="https://www.x.com/devs_des1re" target="_blank"><svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.234 10.162L22.977 0h-2.072l-7.591 8.824L7.251 0H.258l9.168 13.343L.258 24H2.33l8.016-9.318L16.749 24h6.993zm-2.837 3.299l-.929-1.329L3.076 1.56h3.182l5.965 8.532l.929 1.329l7.754 11.09h-3.182z"/></svg></a>
                                <a class="mx-2 transition-colors duration-300 hover:text-[#0099FF]" href="https://www.tiktok.com/@devs_des1re" target="_blank"><svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02c.08 1.53.63 3.09 1.75 4.17c1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97c-.57-.26-1.1-.59-1.62-.93c-.01 2.92.01 5.84-.02 8.75c-.08 1.4-.54 2.79-1.35 3.94c-1.31 1.92-3.58 3.17-5.91 3.21c-1.43.08-2.86-.31-4.08-1.03c-2.02-1.19-3.44-3.37-3.65-5.71c-.02-.5-.03-1-.01-1.49c.18-1.9 1.12-3.72 2.58-4.96c1.66-1.44 3.98-2.13 6.15-1.72c.02 1.48-.04 2.96-.04 4.44c-.99-.32-2.15-.23-3.02.37c-.63.41-1.11 1.04-1.36 1.75c-.21.51-.15 1.07-.14 1.61c.24 1.64 1.82 3.02 3.5 2.87c1.12-.01 2.19-.66 2.77-1.61c.19-.33.4-.67.41-1.06c.1-1.79.06-3.57.07-5.36c.01-4.03-.01-8.05.02-12.07"/></svg></a>
                                <a class="mx-2 transition-colors duration-300 hover:text-[#0099FF]" href="https://www.instagram.com/devs_des1re/" target="_blank"><svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7.03.084c-1.277.06-2.149.264-2.91.563a5.9 5.9 0 0 0-2.124 1.388a5.9 5.9 0 0 0-1.38 2.127C.321 4.926.12 5.8.064 7.076s-.069 1.688-.063 4.947s.021 3.667.083 4.947c.061 1.277.264 2.149.563 2.911c.308.789.72 1.457 1.388 2.123a5.9 5.9 0 0 0 2.129 1.38c.763.295 1.636.496 2.913.552c1.278.056 1.689.069 4.947.063s3.668-.021 4.947-.082c1.28-.06 2.147-.265 2.91-.563a5.9 5.9 0 0 0 2.123-1.388a5.9 5.9 0 0 0 1.38-2.129c.295-.763.496-1.636.551-2.912c.056-1.28.07-1.69.063-4.948c-.006-3.258-.02-3.667-.081-4.947c-.06-1.28-.264-2.148-.564-2.911a5.9 5.9 0 0 0-1.387-2.123a5.9 5.9 0 0 0-2.128-1.38c-.764-.294-1.636-.496-2.914-.55C15.647.009 15.236-.006 11.977 0S8.31.021 7.03.084m.14 21.693c-1.17-.05-1.805-.245-2.228-.408a3.7 3.7 0 0 1-1.382-.895a3.7 3.7 0 0 1-.9-1.378c-.165-.423-.363-1.058-.417-2.228c-.06-1.264-.072-1.644-.08-4.848c-.006-3.204.006-3.583.061-4.848c.05-1.169.246-1.805.408-2.228c.216-.561.477-.96.895-1.382a3.7 3.7 0 0 1 1.379-.9c.423-.165 1.057-.361 2.227-.417c1.265-.06 1.644-.072 4.848-.08c3.203-.006 3.583.006 4.85.062c1.168.05 1.804.244 2.227.408c.56.216.96.475 1.382.895s.681.817.9 1.378c.165.422.362 1.056.417 2.227c.06 1.265.074 1.645.08 4.848c.005 3.203-.006 3.583-.061 4.848c-.051 1.17-.245 1.805-.408 2.23c-.216.56-.477.96-.896 1.38a3.7 3.7 0 0 1-1.378.9c-.422.165-1.058.362-2.226.418c-1.266.06-1.645.072-4.85.079s-3.582-.006-4.848-.06m9.783-16.192a1.44 1.44 0 1 0 1.437-1.442a1.44 1.44 0 0 0-1.437 1.442M5.839 12.012a6.161 6.161 0 1 0 12.323-.024a6.162 6.162 0 0 0-12.323.024M8 12.008A4 4 0 1 1 12.008 16A4 4 0 0 1 8 12.008"/></svg></a>
                                <a class="mx-2 transition-colors duration-300 hover:text-[#0099FF]" href="https://www.reddit.com/user/devs_desire/" target="_blank"><svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12c0 3.314 1.343 6.314 3.515 8.485l-2.286 2.286A.72.72 0 0 0 1.738 24H12c6.627 0 12-5.373 12-12S18.627 0 12 0m4.388 3.199a1.999 1.999 0 1 1-1.947 2.46v.002a2.37 2.37 0 0 0-2.032 2.341v.007c1.776.067 3.4.567 4.686 1.363a2.802 2.802 0 1 1 2.908 4.753c-.088 3.256-3.637 5.876-7.997 5.876c-4.361 0-7.905-2.617-7.998-5.87a2.8 2.8 0 0 1 1.189-5.34c.645 0 1.239.218 1.712.585c1.275-.79 2.881-1.291 4.64-1.365v-.01a3.23 3.23 0 0 1 2.88-3.207a2 2 0 0 1 1.959-1.595m-8.085 8.376c-.784 0-1.459.78-1.506 1.797s.64 1.429 1.426 1.429s1.371-.369 1.418-1.385s-.553-1.841-1.338-1.841m7.406 0c-.786 0-1.385.824-1.338 1.841s.634 1.385 1.418 1.385c.785 0 1.473-.413 1.426-1.429c-.046-1.017-.721-1.797-1.506-1.797m-3.703 4.013c-.974 0-1.907.048-2.77.135a.222.222 0 0 0-.183.305a3.2 3.2 0 0 0 2.953 1.964a3.2 3.2 0 0 0 2.953-1.964a.222.222 0 0 0-.184-.305a28 28 0 0 0-2.769-.135"/></svg></a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 lg:w-1/2 lg:mx-6">
                        <div class="w-full px-8 py-8 mx-auto overflow-hidden bg-white rounded-lg shadow-2xl lg:max-w-xl shadow-gray-300/50">
                            <h1 class="text-lg font-medium">What do you want to ask?</h1>

                            <form class="mt-6" method="POST" action="contact.php">

                                <div class="flex-1">
                                    <label class="block mb-2 text-sm ">Full Name:</label>
                                    <input type="text" name="name" required placeholder="devs_des1re" class="block w-full px-5 py-3 mt-2 placeholder-[#666666] bg-white border border-gray-200 rounded-md focus:border-[#0099FF] focus:ring-[#0099FF] focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                <div class="flex-1 mt-6">
                                    <label class="block mb-2 text-sm ">Email address:</label>
                                    <input type="email" name="email" required placeholder="contact@devs-des1re.com" class="block w-full px-5 py-3 mt-2 placeholder-[#666666] bg-white border border-gray-200 rounded-md focus:border-[#0099FF] focus:ring-[#0099FF] focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                <div class="w-full mt-6">
                                    <label class="block mb-2 text-sm ">Message:</label>
                                    <textarea required name="message" class="block w-full h-32 px-5 py-3 mt-2 placeholder-[#666666] bg-white border border-gray-200 rounded-md md:h-48 focus:border-[#0099FF] focus:ring-[#0099FF] focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                                </div>

                                <div class="cf-turnstile mt-2" data-sitekey="<?php echo $site_key; ?>" data-theme="light"></div>

                                <button class="w-full px-6 py-3 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#0099FF] rounded-md hover:bg-[#007ACC] focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">Send</button>
                            </form>

                            <?php if(isset($_GET["success"])): ?>
                                <h2 class="text-center text-[#007700] mt-5">The message has been sent successfully!</h2>
                            <?php endif; ?>

                            <?php if(isset($_GET["error"])): ?>
                                <h2 class="text-center text-[#FF0000] mt-5">There was an error while sending your message. Please try again later!</h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("elements/html/footer.html"); ?>
</body>
</html>