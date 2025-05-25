<?php
function renderNavbar() {
    return '
    <nav class="border-gray-200 px-4 lg:px-6 py-2.5" style="background-color: #7DBAFF;">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="index.php" class="flex items-center">
                <img src="../../src/images/Logo.png" alt="Logo Webinar" class="w-auto h-12"/>
            </a>
            <div class="flex items-center lg:order-2">
                <button type="button" class="text-blue-800 hover:bg-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 lg:py-2.5 mr-2 focus:outline-none">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 00.515 1.076 9.91 9.91 0 002.256.48c.308 1.283 1.47 2.21 2.986 2.21s2.678-.927 2.986-2.21a9.91 9.91 0 002.256-.48.75.75 0 00.515-1.076A8.065 8.065 0 0016 8a6 6 0 00-6-6zM6 8a4 4 0 118 0c0 .889-.334 1.693-.885 2.318a.75.75 0 00-.115.682c0 .889.334 1.693.885 2.318a.75.75 0 00.115-.682 4 4 0 11-8 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>';
}
?>