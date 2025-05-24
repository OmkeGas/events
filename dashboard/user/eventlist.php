<?php
$title = "Event List - User";   
include '../../src/layouts/user/header.php';
?>

<?php
include '../../src/components/user/navbar.php';
include '../../src/components/user/eventlist_sidebar.php'; 
?>

<?php
$events = [
    [
        'nama_event' => 'How To Spend Million in 17',
        'nama_pemateri' => 'Rindang Tulus, Yoga Prastyo',
        'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus',
        'sisa_kuota' => 50,
        'link_poster' => $base_url . '/src/images/1.jpg' 
    ],
    [
        'nama_event' => 'Talkshow Asbunatif',
        'nama_pemateri' => 'Tarissa Dewi, Rasyiid Wierastama',
        'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
        'sisa_kuota' => 25,
        'link_poster' => $base_url . '/src/images/2.jpg' 
    ],
    [
        'nama_event' => 'Kembangkan Skill Promptmu Seminarmu',
        'nama_pemateri' => 'Janesh, Amel, Navyz',
        'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
        'sisa_kuota' => 10,
        'link_poster' => $base_url . '/src/images/3.jpg' 
    ],
    [
        'nama_event' => 'Tips and Trick Become IT Girl',
        'nama_pemateri' => 'Tarissa, Rindang',
        'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
        'sisa_kuota' => 10,
        'link_poster' => $base_url . '/src/images/4.jpg' 
    ],
    [
        'nama_event' => 'Tech and Weeb Synergy',
        'nama_pemateri' => 'Yoga, Tama',
        'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
        'sisa_kuota' => 10,
        'link_poster' => $base_url . '/src/images/5.jpg' 
    ],
    [
        'nama_event' => 'Penasaran Digidaw',
        'nama_pemateri' => 'Amel, Janesh',
        'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
        'sisa_kuota' => 10,
        'link_poster' => $base_url . '/src/images/6.jpg' // Ganti dengan path poster asli Anda
    ],
    [
        'nama_event' => 'Mastering Game Tactics',
        'nama_pemateri' => 'Navyz',
        'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
        'sisa_kuota' => 10,
        'link_poster' => $base_url . '/src/images/7.jpg' 
    ],
   
];
?>

<main class="bg-gray-100 pt-8 px-6 sm:ml-64 min-h-screen">
    <div class="flex justify-center items-center py-8">
        <div class="relative w-full max-w-4xl">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                </svg>
            </div>
            <input
                type="text"
                placeholder="Search event..."
                class="w-full pl-10 pr-4 py-2 border bg-white border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            />
        </div>
    </div>

    <div class="flex flex-col gap-6 pb-8 max-w-4xl mx-auto">
        <?php if (empty($events)): ?>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 text-center text-gray-600">
                <p>Belum ada event yang tersedia saat ini.</p>
            </div>
        <?php else: ?>
            <?php foreach ($events as $event): ?>
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-full md:w-1/3 flex-shrink-0">
                        <img
                            src="<?= htmlspecialchars($event['link_poster']) ?>"
                            alt="<?= htmlspecialchars($event['nama_event']) ?> Poster"
                            class="w-full h-auto object-cover rounded-lg shadow-md"
                        />
                    </div>

                    <div class="flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2"><?= htmlspecialchars($event['nama_event']) ?></h3>
                        <p class="text-gray-700 text-sm mb-1">Oleh: <span class="font-medium"><?= htmlspecialchars($event['nama_pemateri']) ?></span></p>
                        <p class="text-gray-600 text-sm mb-4"><?= nl2br(htmlspecialchars($event['deskripsi_event'])) ?></p>
                        <p class="text-sm text-gray-500 mb-4">Sisa kuota: <span class="font-semibold text-blue-800"><?= htmlspecialchars($event['sisa_kuota']) ?></span></p>
                        <button class="bg-blue-800 hover:bg-blue-900 text-white px-5 py-2 rounded-md text-base font-medium transition duration-300">
                            Detail Event
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<?php include '../../src/layouts/user/footer.php'; ?>