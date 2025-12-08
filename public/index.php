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
        <h1 class="text-2xl font-bold text-center mb-6">Information</h1>

        <div class="flex flex-wrap justify-center gap-10 text-center">
            <div class="w-full sm:w-80 px-4 py-3 bg-[#FFFFFF] rounded-md shadow-md">
                <h1 class="mt-2 text-lg font-semibold text-center">Portfolio</h1>
                <p class="mt-2 text-sm text-[#3C3C3C]">
                    View my portfolio to see projects, designs, and coding skills across
                    different technologies. Each creation reflects creativity, precision,
                    and real problem-solving. Explore my work—you might even want to hire
                    me!
                </p>
                <a href="https://devs-des1re.com/portfolio" class="flex justify-center items-center mt-2 text-[#0099FF] transition-colors duration-300 hover:text-[#0033FF]">Visit</a>
            </div>

            <div class="w-full sm:w-80 px-4 py-3 bg-[#FFFFFF] rounded-md shadow-md">
                <h1 class="mt-2 text-lg font-semibold text-center">Contact</h1>
                <p class="mt-2 text-sm text-[#3C3C3C]">
                    Contact me for collaborations, questions, or technical help.
                    I’m open to working on creative projects, solving coding challenges,
                    and building useful tools. Let’s connect and create something meaningful together.
                </p>
                <a href="https://devs-des1re.com/contact" class="flex justify-center items-center mt-2 text-[#0099FF] transition-colors duration-300 hover:text-[#0033FF]">Visit</a>
            </div>

            <div class="w-full sm:w-80 px-4 py-3 bg-[#FFFFFF] rounded-md shadow-md">
                <h1 class="mt-2 text-lg font-semibold text-center">Donate</h1>
                <p class="mt-2 text-sm text-[#3C3C3C]">
                    If you like what you see and want to keep it going, consider donating!
                    Your support helps improve and maintain the project,
                    keeping it free and open for everyone.
                    Every contribution counts!
                </p>
                <a href="https://devs-des1re.com/donate" class="flex justify-center items-center mt-2 text-[#0099FF] transition-colors duration-300 hover:text-[#0033FF]">Visit</a>
            </div>

            <div class="w-full sm:w-80 px-4 py-3 bg-[#FFFFFF] rounded-md shadow-md">
                <h1 class="mt-2 text-lg font-semibold text-center">APIs</h1>
                <p class="mt-2 text-sm text-[#3C3C3C]">
                    If you’re looking for free, open-source APIs, I provide them at no charge. 
                    My website hosts multiple APIs designed to be simple to use, 
                    fully accessible, and constantly improving to meet the needs developers.
                </p>
                <a href="https://api.devs-des1re.com/" class="flex justify-center items-center mt-2 text-[#0099FF] transition-colors duration-300 hover:text-[#0033FF]">Visit</a>
            </div>
        </div>
    </main>

    <?php include("elements/html/footer.html"); ?>
</body>
</html>