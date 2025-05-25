<?php
function renderEventSlider($title, $events, $base_url) {
    // Generate unique ID setiap slide
    $sliderId = 'slider_' . uniqid();
    
    $eventCards = '';
    foreach($events as $event) {
        // Cek gambar, jika tidak ada digantikan placeholder
        $imageContent = '';
        if (isset($event['link_poster']) && !empty($event['link_poster'])) {
            $imageContent = '<img src="' . htmlspecialchars($base_url . $event['link_poster']) . '" alt="' . htmlspecialchars($event['nama_event']) . '" class="w-full h-40 object-cover rounded-lg mb-3">';
        } else {
            $imageContent = '
            <div class="h-40 bg-gray-100 rounded-lg mb-3 flex items-center justify-center">
                <span class="text-gray-400">Event Image</span>
            </div>';
        }
        
        $eventCards .= '
        <div class="flex-none w-80 bg-white border border-gray-200 rounded-lg shadow-sm p-4">
            ' . $imageContent . '
            <h3 class="text-lg font-semibold text-gray-900 mb-2">' . htmlspecialchars($event['nama_event']) . '</h3>
            <p class="text-blue-600 text-sm font-medium mb-2">Pemateri: ' . htmlspecialchars($event['nama_pemateri']) . '</p>
            <p class="text-gray-600 text-sm mb-3">' . htmlspecialchars($event['deskripsi_event']) . '</p>
            <div class="flex items-center justify-between">
                <span class="text-green-600 text-sm font-medium">Sisa Kuota: ' . htmlspecialchars($event['sisa_kuota']) . '</span>
                <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs px-3 py-1 rounded-lg transition-colors">
                    Lihat Peserta
                </button>
            </div>
        </div>';
    }
    
    if (empty($events)) {
        $eventCards = '
        <div class="flex-none w-80 bg-white border border-gray-200 rounded-lg shadow-sm p-4">
            <div class="h-40 bg-gray-50 rounded-lg mb-3 flex items-center justify-center">
                <svg class="w-8 h-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 9v2m-6.938 4h13.856c.993 0 1.897-.617 2.258-1.563l.542-1.423A2 2 0 0018.262 13H5.738a2 2 0 00-1.856 1.014l-.542 1.423c-.361.946-1.265 1.563-2.258 1.563z"/>
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Tidak ada event</h3>
            <p class="text-gray-600 text-sm mb-3">Belum ada event yang tersedia saat ini.</p>
        </div>';
    }
    
    return '
    <div>
        <div class="flex items-center mb-4">
            <div class="bg-gray-700 p-2 rounded-lg mr-3">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h2 class="text-xl font-semibold text-gray-800">' . htmlspecialchars($title) . '</h2>
        </div>
        
        <div class="relative">
            <!-- Slider Container -->
            <div class="overflow-hidden">
                <div id="' . $sliderId . '" class="flex gap-4 overflow-x-auto pb-4 scrollbar-hide scroll-smooth" style="scrollbar-width: none; -ms-overflow-style: none;">
                    ' . $eventCards . '
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <button type="button" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white border border-gray-300 rounded-full w-10 h-10 flex items-center justify-center shadow-lg z-10 transition-all duration-200" onclick="scrollSlider(\'' . $sliderId . '\', -320)">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button type="button" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white border border-gray-300 rounded-full w-10 h-10 flex items-center justify-center shadow-lg z-10 transition-all duration-200" onclick="scrollSlider(\'' . $sliderId . '\', 320)">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <style>
        #' . $sliderId . '::-webkit-scrollbar {
            display: none;
        }
    </style>';
}

// JavaScript function untuk scroll slider
function getSliderScript() {
    return '
    <script>
    function scrollSlider(sliderId, distance) {
        const slider = document.getElementById(sliderId);
        if (slider) {
            slider.scrollBy({
                left: distance,
                behavior: "smooth"
            });
        }
    }
    </script>';
}
?>