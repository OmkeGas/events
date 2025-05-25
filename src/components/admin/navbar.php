<?php
function renderNavbar() {
    return '
    <nav class="border-gray-200 px-4 lg:px-6 py-2.5" style="background-color: #7DBAFF;">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="index.php" class="flex items-center">
                <img src="../../src/images/Logo.png" alt="Logo Webinar" class="w-auto h-12"/>
            </a>
            <div class="flex items-center lg:order-2">
                <button class="group text-blue-800 hover:bg-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
                    <i class="fas fa-bell text-white group-hover:text-blue-900 transition duration-200"></i>
                </button>
            </div>
        </div>
    </nav>';
}
?>