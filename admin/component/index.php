<?php
    require ("../../src/layouts/admin/header.php");
    require ("../../src/components/admin/navbar.php");
    require ("../../src/components/admin/sidebar.php");
    require ("../../src/components/admin/slider.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DI PENS - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">
    <?php echo renderNavbar(); ?>
    
    <div class="flex">
        <?php echo renderSidebar('events'); ?>
        
        <main class="flex-1 p-6">
            <?php
            
            // Sample data untuk event dengan struktur baru
            $eventTerdekat = [
                [
                    'nama_event' => 'How To Spend Million in 17',
                    'nama_pemateri' => 'Rindang Tulus, Yoga Prastyo',
                    'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus',
                    'sisa_kuota' => 50,
                    'link_poster' => '/src/images/1.jpg' 
                ],
                [
                    'nama_event' => 'Talkshow Asbunatif',
                    'nama_pemateri' => 'Tarissa Dewi, Rasyiid Wierastama',
                    'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
                    'sisa_kuota' => 25,
                    'link_poster' => '/src/images/2.jpg' 
                ],
                [
                    'nama_event' => 'Kembangkan Skill Promptmu Seminarmu',
                    'nama_pemateri' => 'Janesh, Amel, Navyz',
                    'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
                    'sisa_kuota' => 10,
                    'link_poster' => '/src/images/3.jpg' 
                ],
                [
                    'nama_event' => 'Tips and Trick Become IT Girl',
                    'nama_pemateri' => 'Tarissa, Rindang',
                    'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
                    'sisa_kuota' => 10,
                    'link_poster' => '/src/images/4.jpg' 
                ]
            ];
            
            $riwayatEvent = [
                [
                    'nama_event' => 'Tech and Weeb Synergy',
                    'nama_pemateri' => 'Yoga, Tama',
                    'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
                    'sisa_kuota' => 10,
                    'link_poster' => '/src/images/5.jpg' 
                ],
                [
                    'nama_event' => 'Penasaran Digidaw',
                    'nama_pemateri' => 'Amel, Janesh',
                    'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
                    'sisa_kuota' => 10,
                    'link_poster' => '/src/images/6.jpg' 
                ],
                [
                    'nama_event' => 'Mastering Game Tactics',
                    'nama_pemateri' => 'Navyz',
                    'deskripsi_event' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.',
                    'sisa_kuota' => 10,
                    'link_poster' => '/src/images/7.jpg' 
                ]
            ];
            
            echo renderEventSlider('Event Terdekat', $eventTerdekat, $base_url);          
            echo renderEventSlider('Riwayat Event', $riwayatEvent, $base_url);
            ?>
        </main>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        function scrollSlider(sliderId, distance) {
    const slider = document.getElementById(sliderId);
    if (slider) {
        slider.scrollBy({
            left: distance,
            behavior: 'smooth'
        });
    }
}

// Auto-hide navigation buttons when not needed
document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('[data-carousel="static"]');
    
    sliders.forEach(slider => {
        const container = slider.parentElement;
        const prevBtn = container.querySelector('button[onclick*="-320"]');
        const nextBtn = container.querySelector('button[onclick*="320"]');
        
        function updateButtons() {
            if (slider.scrollLeft <= 0) {
                prevBtn?.classList.add('opacity-50', 'cursor-not-allowed');
            } else {
                prevBtn?.classList.remove('opacity-50', 'cursor-not-allowed');
            }
            
            if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth - 10) {
                nextBtn?.classList.add('opacity-50', 'cursor-not-allowed');
            } else {
                nextBtn?.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        }
        
        slider.addEventListener('scroll', updateButtons);
        updateButtons(); // Initial state
    });
});
    </script>
</body>
</html>
