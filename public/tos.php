<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devs-des1re - Terms Of Service</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- STYLING -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cascadia+Mono:ital,wght@0,200..700;1,200..700&display=swap" rel="stylesheet">

    <!-- JAVASCRIPT -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function updateCopyright() {
                const copyright = document.getElementById("copyright");
                const year = new Date().getFullYear();

                if (copyright) copyright.innerHTML = `© Copyright ${year}. All Rights Reserved.`;
            }
            
            updateCopyright();
        })
    </script>
</head>
<body class="bg-[#F5F5F5] font-['Cascadia_Mono'] min-h-screen flex flex-col">
    <!-- NAVBAR -->
    <nav x-data="{ isOpen: false }" class="relative">
        <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="/" class="text-[#1C1C1C] text-3xl font-bold">devs_des1re</a>

                <!-- MOBILE MENU -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-[#1C1C1C]" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block" :: Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" 
                class="absolute bg-[#F5F5F5] inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out md:mt-0 md:p-0 md:top-0 md:relative md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-2 text-xl text-[#1C1C1C] transition-colors duration-300 transform hover:text-[#0099FF] md:mx-4 md:my-0" href="/">Home</a>
                    <a class="my-2 text-xl text-[#1C1C1C] transition-colors duration-300 transform hover:text-[#0099FF] md:mx-4 md:my-0" href="/portfolio">Portfolio</a>
                    <a class="my-2 text-xl text-[#1C1C1C] transition-colors duration-300 transform hover:text-[#0099FF] md:mx-4 md:my-0" href="/contact">Contact</a>
                    <a class="my-2 text-xl text-[#1C1C1C] transition-colors duration-300 transform hover:text-[#0099FF] md:mx-4 md:my-0" href="https://github.com/devs-des1re/devs-des1re.com" target="_blank">Repository</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- TERMS OF SERVICE -->
    <main class="container mx-auto px-6 py-8 max-w-4xl">
        <h1 class="text-4xl font-extrabold text-[#1C1C1C] mb-4 text-center">Terms of Service</h1>
        <p class="text-center text-[#4D4D4D] mb-8">Last updated: November 13, 2025</p>

        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Welcome to <strong class="font-medium text-[#1C1C1C]">devs-des1re</strong> (“we,” “our,” “us”). These Terms of Service (“Terms”) govern your use of our website located at 
            <a href="https://devs-des1re.com" target="_blank" class="text-[#0099FF] hover:underline">https://devs-des1re.com</a> (“Website”) and any related services (collectively, the “Service”).
            By accessing or using the Service, you agree to be bound by these Terms. If you do not agree, you must discontinue use immediately.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">1. Use of Our Service</h2>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li>You must be at least <strong class="text-[#1C1C1C]">13 years old</strong> to use the Service.</li>
            <li>You agree to use the Service only for lawful purposes and in accordance with these Terms.</li>
            <li>You are responsible for maintaining the confidentiality of any information related to your use of the Service.</li>
        </ul>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">2. Intellectual Property</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            All content on <strong class="font-medium text-[#1C1C1C]">devs-des1re</strong>, including text, graphics, logos, and code, is owned by or licensed to us and is protected by copyright and intellectual property laws.
            You may not copy, modify, or distribute any content without prior written permission.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">3. User Content</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            If you submit or upload content to the Service, you grant us a non-exclusive, royalty-free, worldwide license to use, display, and distribute it solely to provide and improve the Service.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            You represent that your content does not infringe on any third-party rights or violate any laws.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">4. Prohibited Activities</h2>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li>Use the Service for any illegal, harmful, or abusive purpose.</li>
            <li>Attempt to gain unauthorized access to our systems or other users’ data.</li>
            <li>Interfere with or disrupt the Service, servers, or connected networks.</li>
        </ul>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">5. Links to Other Websites</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Our Service may contain links to third-party websites not operated by us. We have no control over and assume no responsibility for their content, privacy policies, or practices.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            You acknowledge and agree that <strong class="font-medium text-[#1C1C1C]">devs-des1re</strong> is not liable for any loss or damage resulting from your use of such third-party sites.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">6. Disclaimer of Warranties</h2>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            The Service is provided on an <strong class="font-medium text-[#1C1C1C]">“as-is” and “as-available”</strong> basis. We make no warranties, expressed or implied, regarding the operation, reliability, or accuracy of the Service.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">7. Limitation of Liability</h2>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            To the maximum extent permitted by law, <strong class="font-medium text-[#1C1C1C]">devs-des1re</strong> shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of the Service.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">8. Indemnification</h2>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            You agree to indemnify and hold harmless <strong class="font-medium text-[#1C1C1C]">devs-des1re</strong> from any claims, damages, or expenses resulting from your use of the Service or violation of these Terms.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">9. Termination</h2>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            We may suspend or terminate your access to the Service immediately, without notice, if you violate these Terms or engage in harmful conduct.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">10. Changes to These Terms</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            We reserve the right to update or modify these Terms at any time. Updates will be posted on this page with a new “Last updated” date.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            Continued use of the Service after changes are posted constitutes acceptance of the new Terms.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">11. Governing Law</h2>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            These Terms shall be governed by and construed in accordance with the laws of the <strong class="font-medium text-[#1C1C1C]">United Kingdom</strong>, without regard to conflict of law principles.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">12. Contact Us</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            If you have any questions about these Terms, you can contact us:
        </p>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li>
                <p>By email: <a href="mailto:contact@devs-des1re.com" class="text-blue-600 hover:underline">contact@devs-des1re.com</a></p>
            </li>
            <li>
                <p>By visiting our contact page: 
                    <a href="https://devs-des1re.com/contact" target="_blank" class="text-blue-600 hover:underline">https://devs-des1re.com/contact</a>
                </p>
            </li>
        </ul>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#F5F5F5] mt-auto">
        <div class="container px-6 py-8 mx-auto">
            <div class="flex flex-col items-center text-center">
                <a href="#" class="text-[#1C1C1C] text-3xl font-bold">devs_des1re</a>

                <div class="flex flex-wrap justify-center mt-6 -mx-4">
                    <a href="#" class="mx-4 text-sm text-[#1C1C1C] transition-colors duration-300 hover:text-[#0099FF]" aria-label="Reddit"> Home </a>
                    <a href="/portfolio" class="mx-4 text-sm text-[#1C1C1C] transition-colors duration-300 hover:text-[#0099FF]" aria-label="Reddit"> Portfolio </a>
                    <a href="/contact" class="mx-4 text-sm text-[#1C1C1C] transition-colors duration-300 hover:text-[#0099FF]" aria-label="Reddit"> Contact </a>
                    <a href="/privacy" class="mx-4 text-sm text-[#1C1C1C] transition-colors duration-300 hover:text-[#0099FF]" aria-label="Reddit"> Privacy </a>
                    <a href="/tos" class="mx-4 text-sm text-[#1C1C1C] transition-colors duration-300 hover:text-[#0099FF]" aria-label="Reddit"> Terms Of Service </a>
                </div>
            </div>

            <hr class="my-6 border-[#C2C2C2] md:my-10" />

            <div class="flex flex-col items-center sm:flex-row sm:justify-between">
                <p class="text-sm text-[#1C1C1C]" id="copyright">.</p>

                <div class="flex -mx-2">
                    <a href="https://github.com/devs-des1re" target="_blank" class="mx-2 text-[#1C1C1C]" aria-label="Discord">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000000" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2"/></svg>
                    </a>

                    <a href="https://www.youtube.com/@devs_des1re" target="_blank" class="mx-2 text-[#1C1C1C]" aria-label="Youtube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FF0000" d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73"/></svg>
                    </a>

                    <a href="discord.com/users/1096369071961952377" target="_blank" class="mx-2 text-[#1C1C1C]" aria-label="Discord">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#5865F2" d="M19.27 5.33C17.94 4.71 16.5 4.26 15 4a.1.1 0 0 0-.07.03c-.18.33-.39.76-.53 1.09a16.1 16.1 0 0 0-4.8 0c-.14-.34-.35-.76-.54-1.09c-.01-.02-.04-.03-.07-.03c-1.5.26-2.93.71-4.27 1.33c-.01 0-.02.01-.03.02c-2.72 4.07-3.47 8.03-3.1 11.95c0 .02.01.04.03.05c1.8 1.32 3.53 2.12 5.24 2.65c.03.01.06 0 .07-.02c.4-.55.76-1.13 1.07-1.74c.02-.04 0-.08-.04-.09c-.57-.22-1.11-.48-1.64-.78c-.04-.02-.04-.08-.01-.11c.11-.08.22-.17.33-.25c.02-.02.05-.02.07-.01c3.44 1.57 7.15 1.57 10.55 0c.02-.01.05-.01.07.01c.11.09.22.17.33.26c.04.03.04.09-.01.11c-.52.31-1.07.56-1.64.78c-.04.01-.05.06-.04.09c.32.61.68 1.19 1.07 1.74c.03.01.06.02.09.01c1.72-.53 3.45-1.33 5.25-2.65c.02-.01.03-.03.03-.05c.44-4.53-.73-8.46-3.1-11.95c-.01-.01-.02-.02-.04-.02M8.52 14.91c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.84 2.12-1.89 2.12m6.97 0c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.83 2.12-1.89 2.12"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>