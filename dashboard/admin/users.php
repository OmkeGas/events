<?php
if (basename($_SERVER['PHP_SELF']) == 'users.php') {
    include("../../src/components/admin/navbar.php");
    include("../../src/components/admin/sidebar.php");

    // Contoh array data user
    $users = [
        [
            'nama' => 'John Doe',
            'email' => 'john@example.com',
            'hp' => '085228503781'
        ],
        [
            'nama' => 'Jane Smith',
            'email' => 'jane@domain.com',
            'hp' => '081234567890'
        ],
        [
            'nama' => 'Amelia Puspita',
            'email' => 'amelia@pens.ac.id',
            'hp' => '082233445566'
        ]
    ];
?>

    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DI PENS - List User</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </head>

    <body class="bg-gray-100 overflow-x-hidden">
        <?php echo renderNavbar(); ?>

        <div class="flex">
            <?php echo renderSidebar(); ?>

            <main class="flex-1 p-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h1 class="text-2xl font-bold text-gray-900 mb-6">List User</h1>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-700 border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-blue-100 text-blue-800 uppercase text-xs">
                                <tr>
                                    <th class="px-6 py-3">Nama</th>
                                    <th class="px-6 py-3">Email</th>
                                    <th class="px-6 py-3">No. HP</th>
                                    <th class="px-6 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <?php foreach ($users as $user): ?>
                                    <tr class="bg-white hover:bg-gray-50 transition">
                                        <td class="px-6 py-4 font-medium text-gray-900"><?= htmlspecialchars($user['nama']) ?></td>
                                        <td class="px-6 py-4"><?= htmlspecialchars($user['email']) ?></td>
                                        <td class="px-6 py-4"><?= htmlspecialchars($user['hp']) ?></td>
                                        <td class="px-6 py-4 text-center space-x-2">
                                            <button style="background-color: #518BCF;" onmouseover="this.style.backgroundColor='#5398e8';" 
                                            onmouseout="this.style.backgroundColor='#518BCF';" class="text-white px-3 py-1 rounded text-xs transition">
                                                Riwayat Event
                                            </button>

                                            <button style="background-color: #32AD66;" onmouseover="this.style.backgroundColor='#277A4A';"
                                            onmouseout="this.style.backgroundColor='#32AD66';" class="text-white px-3 py-1 rounded text-xs transition">
                                                Edit
                                            </button>

                                            <button style="background-color: #CFC03E;" onmouseover="this.style.backgroundColor='#A69A33';"
                                            onmouseout="this.style.backgroundColor='#CFC03E';" class="text-white px-3 py-1 rounded text-xs transition">
                                                Hapus
                                            </button>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </body>

    </html>

<?php
}
?>