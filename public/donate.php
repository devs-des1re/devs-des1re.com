<?php
require __DIR__ . "/../vendor/autoload.php";

$env = parse_ini_file(__DIR__ . "/../.env");
$stripe_key = $env["STRIPE_KEY"];
\Stripe\Stripe::setApiKey($stripe_key);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://devs-des1re.com/payment/success?session_id={CHECKOUT_SESSION_ID}",
        "cancel_url" => "http://devs-des1re.com/",
        "locale" => "auto",
        "customer_email" => $_POST["email"],
        "metadata" => [
            "name" => $_POST["name"]
        ],
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "usd",
                    "unit_amount" => $_POST["amount"] * 100,
                    "product_data" => [
                        "name" => "Donation"
                    ]
                ]
            ]
        ]
    ]);  

    header("Location: " . $session->url);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devs_des1re</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cascadia+Mono:ital,wght@0,200..700;1,200..700&display=swap" rel="stylesheet">
    <link rel="icon" href="/elements/images/favicon.ico?v=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script><?php include("elements/js/copyright.js"); ?></script>
</head>
<body class=" flex flex-col min-h-screen bg-[#F5F5F5] font-['Cascadia_Mono']">
    <?php include("elements/html/navbar.html"); ?>

    <main class="flex-grow px-10 py-10">
        <section class="max-w-100 p-6 mx-auto bg-[#FFFFFF] rounded-md shadow-md">
            <h2 class="text-lg font-semibold capitalize text-center mb-5">Thank you for donating!</h2>
            <h3 class="text-sm text-center mb-5">You can donate a minimum of $0.50, due to the Stripe API and a maximum of $1000.</h3>

            <form method="POST" action="donate.php">
                <div class="text-center mx-auto space-y-4">
                    <div>
                        <label class="[#333333]" for="name">Full Name:</label>
                        <input required name="name" type="text" class="block mx-auto max-w-100 px-4 py-2 mt-2 bg-white border border-gray-200 rounded-md focus:border-[#0099FF] focus:ring-[#0099FF] focus:ring-opacity-40 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="[#333333]" for="emailAddress">Email Address:</label>
                        <input required name="email" type="email" class="block mx-auto max-w-100 px-4 py-2 mt-2 [#333333] bg-white border border-gray-200 rounded-md focus:border-[#0099FF] focus:ring-[#0099FF] focus:ring-opacity-40 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="[#333333]" for="password">Amount:</label>
                        <input required name="amount" type="number" step="0.01" max="1000" min="0.5" class="block mx-auto px-4 py-2 mt-2 [#333333] bg-white border border-gray-200 rounded-md focus:border-[#0099FF] focus:ring-[#0099FF] focus:ring-opacity-40 focus:outline-none focus:ring">
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button class="px-8 py-2.5 mx-auto leading-5 text-white transition-colors duration-300 transform bg-[#0099FF] rounded-md hover:bg-[#007ACC]">Donate</button>
                </div>
            </form>
        </section>
    </main>

    <?php include("elements/html/footer.html"); ?>
</body>
</html>