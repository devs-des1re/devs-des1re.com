<?php
require __DIR__ . "/../vendor/autoload.php";

$env = parse_ini_file(__DIR__ . "/../.env");
\Stripe\Stripe::setApiKey($env["STRIPE_KEY"]);

if (!isset($_GET['session_id'])) {
    http_response_code(404);
    header("Location: 404");
    exit;
}

$session_id = $_GET['session_id'];

try {
    $session = \Stripe\Checkout\Session::retrieve($session_id);

    if ($session->payment_status !== "paid") {
        http_response_code(404);
        header("Location: 404");
        exit;
    }

} catch (\Stripe\Exception\ApiErrorException $e) {
    http_response_code(404);
    header("Location: 404");
    exit;
}
?>
<?php 
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devs_des1re - Success</title>

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

    <main class="flex-grow flex items-center justify-center px-10 py-10">
        <section class="w-full">
            <div class="container flex items-center px-6 py-12 mx-auto">
                <div class="flex flex-col items-center max-w-sm mx-auto text-center">
                    <p class="p-3 text-sm font-medium text-blue-500 rounded-full bg-blue-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>
                    </p>
                    <h1 class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl">Successfully donated!</h1>
                    <p class="mt-4 text-gray-500">Thank you for donating. It motivates me to create bigger better products. Much appreciated! Have a wonderful day!</p>

                    <div class="flex items-center w-full mt-6 gap-x-3 shrink-0 sm:w-auto">
                        <button onclick="history.back()" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>

                            <span>Go back</span>
                        </button>

                        <a class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600" href="/">Take me home</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("elements/html/footer.html"); ?>
</body>
</html>