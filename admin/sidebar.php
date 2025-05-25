<?php
function renderSidebar($activePage = 'events') {
    $eventClass = $activePage === 'events' ? 'text-blue-600 bg-blue-50 border-r-2 border-blue-600' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600';
    $userClass = $activePage === 'users' ? 'text-blue-600 bg-blue-50 border-r-2 border-blue-600' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600';
    
    return '
    <aside class="w-64 h-screen bg-white border-r border-gray-200 flex-shrink-0">
        <div class="p-4 h-full flex flex-col">
            <!-- Header -->
            <div class="flex items-center mb-6">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mr-3 shadow-md">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="text-gray-800 font-bold text-xl">ATMINT</span>
            </div>
            
            <!-- Navigation Menu -->
            <nav class="space-y-2 flex-1">
                <a href="index.php" class="flex items-center p-3 ' . $eventClass . ' rounded-lg group transition-all duration-200">
                    <svg class="w-5 h-5 mr-3 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                    </svg>
                    <span class="font-medium">List Event</span>
                </a>
                
                <a href="users.php" class="flex items-center p-3 ' . $userClass . ' rounded-lg group transition-all duration-200">
                    <svg class="w-5 h-5 mr-3 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                    </svg>
                    <span class="font-medium">List User</span>
                </a>
            </nav>
            
            <!-- Footer (Optional) -->
            <div class="mt-auto pt-4 border-t border-gray-200">
                <div class="text-xs text-gray-500 text-center">
                    © 2024 ATMINT System
                </div>
            </div>
        </div>
    </aside>';
}

// Function untuk mendeteksi halaman aktif secara otomatis
function getCurrentPage() {
    $currentFile = basename($_SERVER['PHP_SELF'], '.php');
    
    switch($currentFile) {
        case 'index':
            return 'events';
        case 'users':
            return 'users';
        default:
            return 'events';
    }
}
?>