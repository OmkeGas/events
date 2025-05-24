<?php
$title = "Dashboard - User";
include '../../src/layouts/user/header.php';
?>

<!-- <h2>Selamat datang di Dashboard User</h2> -->

<?php
include '../../src/components/user/navbar.php';
include '../../src/components/user/sidebar.php';
?>

</>
<main class=" pt-24 sm:ml-64 px-6 ">
    
    <!-- Event Dashboard Header -->
    <div class="flex items-center justify-between ml-2 mb-6">
        <div class="flex items-center gap-3">
            <div class="bg-blue-900 text-white p-2 rounded-md">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                </svg>
            </div>
            <h1 class="text-2xl font-semibold text-gray-800">History Event</h1>
        </div>
        <button class="bg-blue-900 hover:bg-blue-500 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
            </svg>
            Event Listing
        </button>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-1">Past Event</h2>
        <p class="text-sm text-gray-600 mb-6">List of events you have attended :</p>

        <div class="overflow-hidden border border-gray-200 rounded-lg">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Date
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-gray-900">Nama Eventnya</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-600">23 Februari 2026</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-blue-900 hover:bg-blue-500 text-white px-3 py-1 rounded text-sm font-medium flex items-center">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4"/>
                                </svg>
                                Print Certificate
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include '../../src/layouts/user/footer.php'; ?>