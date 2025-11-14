<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devs-des1re - Privacy Policy</title>
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

    <!-- PRIVACY POLICY -->
    <main class="container mx-auto px-6 py-8 max-w-4xl">
        <h1 class="text-4xl font-extrabold text-[#1C1C1C] mb-4 text-center">Privacy Policy</h1>
        <p class="text-center text-[#4D4D4D] mb-8">Last updated: November 13, 2025</p>

        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            This Privacy Policy describes Our policies and procedures on the collection, use, and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the <a href="https://www.privacypolicies.com/privacy-policy-generator/" target="_blank" class="text-[#0099FF] transition-colors duration-300 transform hover:text-blue-500 hover:underline">Privacy Policy Generator</a>.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">Interpretation and Definitions</h2>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Interpretation</h3>
        <p class="mb-6 text-[#4D4D4D] leading-relaxed">
            The words whose initial letters are capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
        </p>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Definitions</h3>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">For the purposes of this Privacy Policy:</p>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Affiliate</strong> means an entity that controls, is controlled by, or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to devs-des1re.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Country</strong> refers to: United Kingdom</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Device</strong> means any device that can access the Service such as a computer, a cell phone or a digital tablet.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Service</strong> refers to the Website.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Website</strong> refers to devs-des1re, accessible from <a href="https://devs-des1re.com/" rel="external nofollow noopener" target="_blank" class="text-blue-600 hover:underline">https://devs-des1re.com/</a></p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
            </li>
        </ul>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">Collecting and Using Your Personal Data</h2>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Types of Data Collected</h3>

        <h4 class="text-xl font-medium text-[#4D4D4D] mb-3">Personal Data</h4>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:
        </p>
        <ul class="list-disc pl-8 mb-8 space-y-1 text-[#4D4D4D]">
            <li>Email address</li>
            <li>First name and last name</li>
            <li>Usage Data</li>
        </ul>

        <h4 class="text-xl font-medium text-[#4D4D4D] mb-3">Usage Data</h4>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">Usage Data is collected automatically when using the Service.</p>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.
        </p>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device's unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            We may also collect information that Your browser sends whenever You visit Our Service or when You access the Service by or through a mobile device.
        </p>

        <h4 class="text-xl font-medium text-[#4D4D4D] mb-3">Tracking Technologies and Cookies</h4>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies We use include beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:
        </p>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</p>
            </li>
        </ul>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies on the <a href="https://www.privacypolicies.com/blog/privacy-policy-template/#Use_Of_Cookies_Log_Files_And_Tracking" target="_blank" class="text-blue-600 hover:underline">Privacy Policies website</a> article.
        </p>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">We use both Session and Persistent Cookies for the purposes set out below:</p>
        <ul class="list-disc pl-8 mb-8 space-y-4 text-[#4D4D4D]">
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Necessary / Essential Cookies</strong></p>
                <p>Type: Session Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Cookies Policy / Notice Acceptance Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">Functionality Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
            </li>
        </ul>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.
        </p>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Use of Your Personal Data</h3>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">The Company may use Personal Data for the following purposes:</p>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">To provide You</strong> with news, special offers, and general information about other goods, services and events which We offer that are similar to those that you have already purchased or inquired about unless You have opted not to receive such information.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">To manage Your requests:</strong> To attend and manage Your requests to Us.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>
            </li>
            <li>
                <p><strong class="font-medium text-[#1C1C1C]">For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
            </li>
        </ul>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">We may share Your personal information in the following situations:</p>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li><strong class="font-medium text-[#1C1C1C]">With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>
            <li><strong class="font-medium text-[#1C1C1C]">For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
            <li><strong class="font-medium text-[#1C1C1C]">With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
            <li><strong class="font-medium text-[#1C1C1C]">With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
            <li><strong class="font-medium text-[#1C1C1C]">With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>
            <li><strong class="font-medium text-[#1C1C1C]">With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>
        </ul>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Retention of Your Personal Data</h3>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer periods.
        </p>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Transfer of Your Personal Data</h3>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ from those from Your jurisdiction.
        </p>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.
        </p>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Delete Your Personal Data</h3>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">You have the right to delete or request that We assist in deleting the Personal Data that We have collected about You.</p>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">Our Service may give You the ability to delete certain information about You from within the Service.</p>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            You may update, amend, or delete Your information at any time by signing in to Your Account, if you have one, and visiting the account settings section that allows you to manage Your personal information. You may also contact Us to request access to, correct, or delete any personal information that You have provided to Us.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            Please note, however, that We may need to retain certain information when we have a legal obligation or lawful basis to do so.
        </p>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Disclosure of Your Personal Data</h3>

        <h4 class="text-xl font-medium text-[#4D4D4D] mb-3">Business Transactions</h4>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.
        </p>

        <h4 class="text-xl font-medium text-[#4D4D4D] mb-3">Law enforcement</h4>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).
        </p>

        <h4 class="text-xl font-medium text-[#4D4D4D] mb-3">Other legal requirements</h4>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
        <ul class="list-disc pl-8 mb-8 space-y-1 text-[#4D4D4D]">
            <li>Comply with a legal obligation</li>
            <li>Protect and defend the rights or property of the Company</li>
            <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
            <li>Protect the personal safety of Users of the Service or the public</li>
            <li>Protect against legal liability</li>
        </ul>

        <h3 class="text-2xl font-semibold text-[#4D4D4D] mb-4">Security of Your Personal Data</h3>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially reasonable means to protect Your Personal Data, We cannot guarantee its absolute security.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">Children's Privacy</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">Links to Other Websites</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">Changes to this Privacy Policy</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.
        </p>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">
            We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.
        </p>
        <p class="mb-8 text-[#4D4D4D] leading-relaxed">
            You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
        </p>

        <h2 class="text-3xl font-bold text-[#1C1C1C] mb-6 mt-10">Contact Us</h2>
        <p class="mb-4 text-[#4D4D4D] leading-relaxed">If you have any questions about this Privacy Policy, You can contact us:</p>
        <ul class="list-disc pl-8 mb-8 space-y-2 text-[#4D4D4D]">
            <li>
                <p>By email: <a href="mailto:contact@devs-des1re.com" class="text-blue-600 hover:underline">contact@devs-des1re.com</a></p>
            </li>
            <li>
                <p>By visiting this page on our website: <a href="https://devs-des1re.com/contact" rel="external nofollow noopener" target="_blank" class="text-blue-600 hover:underline">https://devs-des1re.com/contact</a></p>
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