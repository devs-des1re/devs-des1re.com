document.addEventListener("DOMContentLoaded", function() {
    function updateCopyright() {
        const copyright = document.getElementById("copyright");
        const year = new Date().getFullYear();

        if (copyright) copyright.innerHTML = `© Copyright ${year}. All Rights Reserved.`;
    }
    
    updateCopyright();
})