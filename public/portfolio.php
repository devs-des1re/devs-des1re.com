<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devs_des1re - Portfolio</title>

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

    <main class="max-w-[1500px] mx-auto">
        <section class="flex flex-col-reverse md:flex-row items-center justify-between px-5 md:px-12 my-12 gap-10">
            <div class="flex-[5] min-w-[300px]">
                <h2 class="text-[30px] md:text-[45px] font-bold mb-4">It's devs_des1re!</h2>
                <p class="text-[#3C3C3C] leading-relaxed">
                    Hey guys! Its devs_des1re and your asking who am I? I'm a young developer passionate become better than than my yesterday self. My goal is not the learn the most languages possible (even though I kinda do) but to learn it properly. I'm trying to improve my mindset which will enable me to get to this goal. Never give up guys and thanks for reading this!
                </p>

                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#skills" class="inline-flex items-center gap-2 px-3 py-1 border-2 border-[#0099FF] rounded-md text-[#0099FF] transition-colors duration-300 transform hover:text-blue-500 hover:border-blue-500 transition-colors duration-100">
                        <span>Skills</span>
                    </a>
                    
                    <a href="/contact" class="inline-flex items-center gap-2 px-3 py-1 border-2 border-[#0099FF] rounded-md text-[#0099FF] transition-colors duration-300 transform hover:text-blue-500 hover:border-blue-500 transition-colors duration-100">
                        <span>Contact</span>
                    </a>
                </div>
            </div>

            <div class="w-full md:flex-[1] flex justify-center md:justify-end">
                <img src="elements/images/pfp.png" alt="devs_des1re's pfp not loading :(" class="w-64 md:w-[350px] rounded-full object-cover flex-shrink-0">
            </div>
        </section>

        <section id="skills" class="px-5 md:px-12 mb-24">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">Skills</h2>
            <div class="text-center mb-6 text-[#3C3C3C]">
                These are all my coding skills! These are the languages I can code in, which is not too bad. I'm trying to learn more, slowly but surely to make sure I understand the language properly.
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <div class="flex items-center gap-2 w-40 p-3 mb-5 border border-[#3C3C3C] rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128"><linearGradient id="SVGo658XMjL" x1="70.252" x2="170.659" y1="1237.476" y2="1151.089" gradientTransform="matrix(.563 0 0 -.568 -29.215 707.817)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5a9fd4"/><stop offset="1" stop-color="#306998"/></linearGradient><linearGradient id="SVGNPSltbKo" x1="209.474" x2="173.62" y1="1098.811" y2="1149.537" gradientTransform="matrix(.563 0 0 -.568 -29.215 707.817)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd43b"/><stop offset="1" stop-color="#ffe873"/></linearGradient><path fill="url(#SVGo658XMjL)" d="M63.391 1.988c-4.222.02-8.252.379-11.8 1.007c-10.45 1.846-12.346 5.71-12.346 12.837v9.411h24.693v3.137H29.977c-7.176 0-13.46 4.313-15.426 12.521c-2.268 9.405-2.368 15.275 0 25.096c1.755 7.311 5.947 12.519 13.124 12.519h8.491V67.234c0-8.151 7.051-15.34 15.426-15.34h24.665c6.866 0 12.346-5.654 12.346-12.548V15.833c0-6.693-5.646-11.72-12.346-12.837c-4.244-.706-8.645-1.027-12.866-1.008M50.037 9.557c2.55 0 4.634 2.117 4.634 4.721c0 2.593-2.083 4.69-4.634 4.69c-2.56 0-4.633-2.097-4.633-4.69c-.001-2.604 2.073-4.721 4.633-4.721" transform="translate(0 10.26)"/><path fill="url(#SVGNPSltbKo)" d="M91.682 28.38v10.966c0 8.5-7.208 15.655-15.426 15.655H51.591c-6.756 0-12.346 5.783-12.346 12.549v23.515c0 6.691 5.818 10.628 12.346 12.547c7.816 2.297 15.312 2.713 24.665 0c6.216-1.801 12.346-5.423 12.346-12.547v-9.412H63.938v-3.138h37.012c7.176 0 9.852-5.005 12.348-12.519c2.578-7.735 2.467-15.174 0-25.096c-1.774-7.145-5.161-12.521-12.348-12.521h-9.268zM77.809 87.927c2.561 0 4.634 2.097 4.634 4.692c0 2.602-2.074 4.719-4.634 4.719c-2.55 0-4.633-2.117-4.633-4.719c0-2.595 2.083-4.692 4.633-4.692" transform="translate(0 10.26)"/><radialGradient id="SVGxM6OSbnB" cx="1825.678" cy="444.45" r="26.743" gradientTransform="matrix(0 -.24 -1.055 0 532.979 557.576)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#b8b8b8" stop-opacity="0.498"/><stop offset="1" stop-color="#7f7f7f" stop-opacity="0"/></radialGradient><path fill="url(#SVGxM6OSbnB)" d="M97.309 119.597c0 3.543-14.816 6.416-33.091 6.416c-18.276 0-33.092-2.873-33.092-6.416s14.815-6.417 33.092-6.417c18.275 0 33.091 2.872 33.091 6.417" opacity="0.444"/></svg>
                    <span class="text-base md:text-lg">Python</span>
                </div>

                <div class="flex items-center gap-2 w-40 p-3 mb-5 border border-[#3C3C3C] rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128"><path fill="#000080" d="M112.956.708c-7.912 0-14.335 6.424-14.335 14.336s6.424 14.335 14.335 14.335s14.335-6.41 14.335-14.335c0-7.912-6.424-14.336-14.335-14.336M64 15.058c-27.02 0-48.956 21.935-48.956 48.955S36.979 112.97 64 112.97c27.02 0 48.956-21.935 48.956-48.956c0-27.02-21.936-48.956-48.956-48.956"/><path fill="#fff" d="M84.285 29.392c-7.91 0-14.335 6.424-14.335 14.335s6.424 14.336 14.335 14.336s14.336-6.424 14.336-14.336s-6.424-14.335-14.335-14.335zM30.773 56.36v32.119h19.961v-3.611H34.87V56.359Zm57.584 8.37c-3.354 0-6.126.975-7.668 2.692c-1.055 1.19-1.488 2.516-1.582 4.801h3.705c.311-2.826 1.988-4.098 5.423-4.098c3.3 0 5.153 1.231 5.153 3.435v.974c0 1.542-.92 2.205-3.827 2.556c-5.193.663-5.991.839-7.398 1.407c-2.69 1.095-4.057 3.164-4.057 6.166c0 4.193 2.908 6.83 7.574 6.83c2.907 0 5.247-1.014 7.843-3.395c.257 2.34 1.407 3.395 3.787 3.395c.757 0 1.325-.081 2.515-.392v-2.773a3 3 0 0 1-.798.095c-1.284 0-1.988-.663-1.988-1.812V71.032c0-4.098-3.002-6.302-8.682-6.302m-33.742.664V83.19c0 3.84 2.867 6.302 7.357 6.302c3.395 0 5.545-1.19 7.709-4.233v3.219h3.3V65.393h-3.652v13.09c0 4.72-2.475 7.804-6.302 7.804c-2.907 0-4.76-1.772-4.76-4.544v-16.35Zm38.773 11.67v4.139c0 1.244-.365 1.988-1.46 3.002c-1.502 1.366-3.3 2.07-5.464 2.07c-2.867 0-4.544-1.367-4.544-3.706c0-2.42 1.636-3.665 5.558-4.233c3.881-.528 4.68-.703 5.91-1.271z"/><path fill="#808080" d="M61.733 0a64 64 0 0 0-5.57.436l.179 1.458a63 63 0 0 1 5.442-.426zm5.585.046l-.075 1.468a62 62 0 0 1 5.433.52L72.88.578a64 64 0 0 0-5.561-.532Zm-16.665 1.31a63 63 0 0 0-5.409 1.398l.43 1.405a62 62 0 0 1 5.284-1.367Zm27.72.237l-.33 1.431a63 63 0 0 1 5.262 1.455l.452-1.397a64 64 0 0 0-5.384-1.489M39.98 4.623a64 64 0 0 0-5.081 2.323l.668 1.308a62 62 0 0 1 4.964-2.27zm49.012.41l-.573 1.353a63 63 0 0 1 4.929 2.346l.688-1.298a64 64 0 0 0-5.044-2.4ZM30.04 9.706a64 64 0 0 0-4.6 3.17l.886 1.173a63 63 0 0 1 4.494-3.098zm-8.906 6.728a64 64 0 0 0-3.983 3.918l1.075 1.001a63 63 0 0 1 3.891-3.827zm-7.61 8.165a64 64 0 0 0-3.247 4.546l1.231.8a63 63 0 0 1 3.172-4.44zm-6.086 9.357a64 64 0 0 0-2.408 5.042l1.352.574a62 62 0 0 1 2.352-4.925zm113.623.973l-1.31.667a63 63 0 0 1 2.263 4.967l1.362-.55a64 64 0 0 0-2.315-5.083zM3.075 44.23a63 63 0 0 0-1.49 5.385l1.432.328a62 62 0 0 1 1.455-5.26Zm122.166 1.049l-1.404.429a63 63 0 0 1 1.366 5.285l1.437-.306a64 64 0 0 0-1.399-5.409zM.574 55.108a64 64 0 0 0-.528 5.561l1.467.075a63 63 0 0 1 .516-5.434Zm126.988 1.088l-1.458.179a63 63 0 0 1 .428 5.441l1.468-.05a64 64 0 0 0-.438-5.57M1.468 66.205L0 66.255a64 64 0 0 0 .435 5.57l1.458-.179a63 63 0 0 1-.425-5.441m125.018 1.071a63 63 0 0 1-.518 5.434l1.455.203a64 64 0 0 0 .53-5.561zM2.79 77.031l-1.437.304a63 63 0 0 0 1.398 5.41l1.405-.43A62 62 0 0 1 2.79 77.03Zm122.188 1.046a62 62 0 0 1-1.457 5.26l1.397.454a63 63 0 0 0 1.492-5.384zM5.981 87.459l-1.362.551a63 63 0 0 0 2.323 5.082l1.307-.669a62 62 0 0 1-2.268-4.964m115.627.99a62 62 0 0 1-2.354 4.925l1.296.69a64 64 0 0 0 2.41-5.04zM10.944 97.17l-1.245.78a64 64 0 0 0 3.17 4.6l1.172-.885a63 63 0 0 1-3.097-4.495m105.534.904a63 63 0 0 1-3.173 4.44l1.156.906a64 64 0 0 0 3.249-4.545zm-98.96 7.8l-1.092.983a64 64 0 0 0 3.917 3.983l1.002-1.074a63 63 0 0 1-3.827-3.892m92.24.79a63 63 0 0 1-3.893 3.826l.983 1.092a64 64 0 0 0 3.984-3.916zm-84.263 6.648l-.906 1.157a64 64 0 0 0 4.546 3.248l.8-1.232a63 63 0 0 1-4.44-3.173m76.16.654a63 63 0 0 1-4.495 3.096l.78 1.245a64 64 0 0 0 4.6-3.17zm-67.018 5.294l-.691 1.296a64 64 0 0 0 5.04 2.409l.575-1.352a62 62 0 0 1-4.924-2.353m57.775.496a62 62 0 0 1-4.964 2.268l.551 1.362a63 63 0 0 0 5.082-2.322zm-47.74 3.77l-.453 1.396a63 63 0 0 0 5.385 1.49l.329-1.43a62 62 0 0 1-5.26-1.456zm37.632.322a62 62 0 0 1-5.284 1.365l.304 1.437a63 63 0 0 0 5.41-1.398zm-27.003 2.122l-.203 1.455a64 64 0 0 0 5.561.529l.075-1.467a63 63 0 0 1-5.433-.517m16.335.139a63 63 0 0 1-5.442.424l.05 1.468a64 64 0 0 0 5.57-.434z"/></svg>
                    <span class="text-base md:text-lg">Lua</span>
                </div>

                <div class="flex items-center gap-2 w-40 p-3 mb-5 border border-[#3C3C3C] rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45.52" height="24" viewBox="0 0 256 135"><defs><radialGradient id="SVGJUxgBb3l" cx=".837" cy="-125.811" r="363.057" gradientTransform="translate(76.464 81.918)scale(.463)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset=".5" stop-color="#4c6b97"/><stop offset="1" stop-color="#231f20"/></radialGradient></defs><ellipse cx="128" cy="67.3" fill="url(#SVGJUxgBb3l)" rx="128" ry="67.3"/><ellipse cx="128" cy="67.3" fill="#6181b6" rx="123" ry="62.3"/><path fill="#fff" d="m152.9 87.5l6.1-31.4c1.4-7.1.2-12.4-3.4-15.7c-3.5-3.2-9.5-4.8-18.3-4.8h-10.6l3-15.6c.1-.6 0-1.2-.4-1.7s-.9-.7-1.5-.7h-14.6c-1 0-1.8.7-2 1.6l-6.5 33.3c-.6-3.8-2-7-4.4-9.6c-4.3-4.9-11-7.4-20.1-7.4H52.1c-1 0-1.8.7-2 1.6L37 104.7c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8q5.85-1.95 10.5-6.3c2.5-2.3 4.6-4.9 6.2-7.7l-2.6 13.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.6c1 0 1.8-.7 2-1.6l7.2-37h10c4.3 0 5.5.8 5.9 1.2c.3.3.9 1.5.2 5.2L134.1 87c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h15c.9-.3 1.7-1 1.9-1.9m-67.6-26c-.9 4.7-2.6 8.1-5.1 10s-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.3 1.6 1.6 4.7.8 8.9m130-18.6c-4.3-4.9-11-7.4-20.1-7.4h-28.3c-1 0-1.8.7-2 1.6l-13.1 67.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8q5.85-1.95 10.5-6.3c2.6-2.4 4.8-5.1 6.4-8s2.8-6.1 3.5-9.6c1.7-8.7.4-15.5-3.9-20.5M200 61.5c-.9 4.7-2.6 8.1-5.1 10s-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.4 1.6 1.7 4.7.8 8.9"/><path fill="#000004" d="M74.8 48.2c5.6 0 9.3 1 11.2 3.1s2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2q-4.35 3.3-13.2 3.3h-8.9l5.5-28.2zM39 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8s6.8-3.1 9.8-5.9q3.75-3.45 6-7.5c1.5-2.7 2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7H52.1zm74.3-85.4h14.6l-3.5 17.9h13c8.2 0 13.8 1.4 16.9 4.3s4 7.5 2.8 13.9L151 87.1h-14.8l5.8-29.9c.7-3.4.4-5.7-.7-6.9s-3.6-1.9-7.3-1.9h-11.7l-7.5 38.7h-14.6zm76.2 28.6c5.6 0 9.3 1 11.2 3.1s2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2q-4.35 3.3-13.2 3.3H174l5.5-28.2zM153.7 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8s6.8-3.1 9.8-5.9q3.75-3.45 6-7.5c1.5-2.7 2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7h-28.3z"/></svg>
                    <span class="text-base md:text-lg">PHP</span>
                </div>

                <div class="flex items-center gap-2 w-40 p-3 mb-5 border border-[#3C3C3C] rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#f7df1e" rx="60"/><path fill="#000000" d="m67.312 213.932l19.59-11.856c3.78 6.701 7.218 12.371 15.465 12.371c7.905 0 12.889-3.092 12.889-15.12v-81.798h24.058v82.138c0 24.917-14.606 36.259-35.916 36.259c-19.245 0-30.416-9.967-36.087-21.996m85.07-2.576l19.588-11.341c5.157 8.421 11.859 14.607 23.715 14.607c9.969 0 16.325-4.984 16.325-11.858c0-8.248-6.53-11.17-17.528-15.98l-6.013-2.579c-17.357-7.388-28.871-16.668-28.871-36.258c0-18.044 13.748-31.792 35.229-31.792c15.294 0 26.292 5.328 34.196 19.247l-18.731 12.029c-4.125-7.389-8.591-10.31-15.465-10.31c-7.046 0-11.514 4.468-11.514 10.31c0 7.217 4.468 10.139 14.778 14.608l6.014 2.577c20.449 8.765 31.963 17.699 31.963 37.804c0 21.654-17.012 33.51-39.867 33.51c-22.339 0-36.774-10.654-43.819-24.574"/></g></svg>
                    <span class="text-base md:text-lg">JavaScript</span>
                </div>

                <div class="flex items-center gap-2 w-40 p-3 mb-5 border border-[#3C3C3C] rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128"><path fill="url(#SVGjGElAeWH)" d="M66.958.825a6.07 6.07 0 0 0-6.035 0L11.103 29.76c-1.895 1.072-2.96 3.095-2.96 5.24v57.988c0 2.143 1.183 4.167 2.958 5.24l49.82 28.934a6.07 6.07 0 0 0 6.036 0l49.82-28.935c1.894-1.072 2.958-3.096 2.958-5.24V35c0-2.144-1.183-4.167-2.958-5.24z"/><path fill="url(#SVGKiWaKbNE)" d="M116.897 29.76L66.841.825A8 8 0 0 0 65.302.23L9.21 96.798a6.3 6.3 0 0 0 1.657 1.43l50.057 28.934c1.42.833 3.076 1.072 4.615.595l52.66-96.925a3.7 3.7 0 0 0-1.302-1.072"/><path fill="url(#SVGUN7mteel)" d="M116.898 98.225c1.42-.833 2.485-2.262 2.958-3.81L65.066.108c-1.42-.238-2.959-.119-4.26.715L11.104 29.639l53.606 98.355c.71-.12 1.54-.358 2.25-.715z"/><defs><linearGradient id="SVGjGElAeWH" x1="34.513" x2="27.157" y1="15.535" y2="30.448" gradientTransform="translate(-129.242 -73.715)scale(6.18523)" gradientUnits="userSpaceOnUse"><stop stop-color="#3f873f"/><stop offset=".33" stop-color="#3f8b3d"/><stop offset=".637" stop-color="#3e9638"/><stop offset=".934" stop-color="#3da92e"/><stop offset="1" stop-color="#3dae2b"/></linearGradient><linearGradient id="SVGKiWaKbNE" x1="30.009" x2="50.533" y1="23.359" y2="8.288" gradientTransform="translate(-129.242 -73.715)scale(6.18523)" gradientUnits="userSpaceOnUse"><stop offset=".138" stop-color="#3f873f"/><stop offset=".402" stop-color="#52a044"/><stop offset=".713" stop-color="#64b749"/><stop offset=".908" stop-color="#6abf4b"/></linearGradient><linearGradient id="SVGUN7mteel" x1="21.917" x2="40.555" y1="22.261" y2="22.261" gradientTransform="translate(-129.242 -73.715)scale(6.18523)" gradientUnits="userSpaceOnUse"><stop offset=".092" stop-color="#6abf4b"/><stop offset=".287" stop-color="#64b749"/><stop offset=".598" stop-color="#52a044"/><stop offset=".862" stop-color="#3f873f"/></linearGradient></defs></svg>
                    <span class="text-base md:text-lg">Node.js</span>
                </div>

                <div class="flex items-center gap-2 w-40 p-3 mb-5 border border-[#3C3C3C] rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="#e65100" d="m4 4l2 22l10 2l10-2l2-22Zm19.72 7H11.28l.29 3h11.86l-.802 9.335L15.99 25l-6.635-1.646L8.93 19h3.02l.19 2l3.86.77l3.84-.77l.29-4H8.84L8 8h16Z"/></svg>
                    <span class="text-base md:text-lg">HTML</span>
                </div>

                <div class="flex items-center gap-2 w-40 p-3 mb-5 border border-[#3C3C3C] rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="#1572b6" d="M5.902 27.201L3.656 2h24.688l-2.249 25.197L15.985 30z"/><path fill="#33a9dc" d="m16 27.858l8.17-2.265l1.922-21.532H16z"/><path fill="#fff" d="M16 13.191h4.09l.282-3.165H16V6.935h7.75l-.074.829l-.759 8.518H16z"/><path fill="#ebebeb" d="m16.019 21.218l-.014.004l-3.442-.93l-.22-2.465H9.24l.433 4.853l6.331 1.758l.015-.004z"/><path fill="#fff" d="m19.827 16.151l-.372 4.139l-3.447.93v3.216l6.336-1.756l.047-.522l.537-6.007z"/><path fill="#ebebeb" d="M16.011 6.935v3.091H8.545l-.062-.695l-.141-1.567l-.074-.829zM16 13.191v3.091h-3.399l-.062-.695l-.14-1.567l-.074-.829z"/></svg>
                    <span class="text-base md:text-lg">CSS</span>
                </div>
            </div>
        </section>
    </main>

    <?php include("elements/html/footer.html"); ?>
</body>
</html>