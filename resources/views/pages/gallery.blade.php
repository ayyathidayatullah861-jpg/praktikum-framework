@extends('layouts.main')

@section('title', 'Galeri - Kabinet Ciptakara HIMTI')

@section('content')

<!-- PAGE HEADER -->
<section class="relative py-32 px-6 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-yellow-500/5 rounded-full blur-3xl"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,215,0,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255,215,0,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <p class="text-yellow-400 text-sm tracking-widest uppercase mb-4">Dokumentasi Kegiatan</p>
        <h1 class="text-5xl md:text-7xl font-bold font-serif mb-6">
            <span class="text-white">Galeri</span> <span class="text-gradient-gold">Kami</span>
        </h1>
        <p class="text-gray-400 text-xl max-w-2xl mx-auto">
            Momen-momen berharga dari berbagai kegiatan dan program yang telah kami selenggarakan.
        </p>
    </div>
</section>

<!-- GALLERY FILTER -->
<section class="py-8 px-6 bg-black/30 sticky top-20 z-40 backdrop-blur-md border-b border-gray-800">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-wrap justify-center gap-3">
            @php
            $filters = ['Semua', 'Workshop', 'Seminar', 'Kompetisi', 'Sosial'];
            @endphp
            @foreach($filters as $i => $filter)
            <button onclick="filterGallery('{{ strtolower($filter) }}')"
                class="gallery-filter-btn px-6 py-2 rounded-full text-sm font-medium transition {{ $i === 0 ? 'gradient-gold text-black' : 'border border-gray-600 text-gray-400 hover:border-yellow-400 hover:text-yellow-400' }}"
                data-filter="{{ strtolower($filter) }}">
                {{ $filter }}
            </button>
            @endforeach
        </div>
    </div>
</section>

<!-- GALLERY GRID -->
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6" id="gallery-grid">

            @php
            $gallery = [
                ['title' => 'Tech Summit 2025', 'category' => 'seminar', 'color' => 'from-yellow-900/40 to-yellow-800/20', 'border' => 'yellow', 'height' => 'h-64', 'emoji' => '🎤', 'desc' => 'Pembicara utama dari Google Indonesia'],
                ['title' => 'Hackathon 2025', 'category' => 'kompetisi', 'color' => 'from-gray-700/40 to-gray-800/20', 'border' => 'gray', 'height' => 'h-80', 'emoji' => '💻', 'desc' => 'Tim pemenang hackathon 24 jam'],
                ['title' => 'Workshop Python', 'category' => 'workshop', 'color' => 'from-yellow-900/40 to-yellow-800/20', 'border' => 'yellow', 'height' => 'h-72', 'emoji' => '🐍', 'desc' => 'Pelatihan Python untuk data science'],
                ['title' => 'Bakti Sosial', 'category' => 'sosial', 'color' => 'from-gray-700/40 to-gray-800/20', 'border' => 'gray', 'height' => 'h-56', 'emoji' => '❤️', 'desc' => 'Literasi digital untuk UMKM'],
                ['title' => 'Seminar Karir IT', 'category' => 'seminar', 'color' => 'from-yellow-900/40 to-yellow-800/20', 'border' => 'yellow', 'height' => 'h-80', 'emoji' => '🚀', 'desc' => 'Sharing karir dari alumni sukses'],
                ['title' => 'Coding Competition', 'category' => 'kompetisi', 'color' => 'from-gray-700/40 to-gray-800/20', 'border' => 'gray', 'height' => 'h-64', 'emoji' => '🏆', 'desc' => 'Olimpiade pemrograman tingkat nasional'],
                ['title' => 'UI/UX Workshop', 'category' => 'workshop', 'color' => 'from-yellow-900/40 to-yellow-800/20', 'border' => 'yellow', 'height' => 'h-56', 'emoji' => '🎨', 'desc' => 'Desain antarmuka yang intuitif'],
                ['title' => 'Donor Darah', 'category' => 'sosial', 'color' => 'from-gray-700/40 to-gray-800/20', 'border' => 'gray', 'height' => 'h-72', 'emoji' => '🩸', 'desc' => 'Kegiatan sosial donor darah rutin'],
                ['title' => 'Webinar Cloud', 'category' => 'seminar', 'color' => 'from-yellow-900/40 to-yellow-800/20', 'border' => 'yellow', 'height' => 'h-64', 'emoji' => '☁️', 'desc' => 'Cloud computing dan DevOps'],
            ];
            @endphp

            @foreach($gallery as $item)
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer"
                 data-category="{{ $item['category'] }}"
                 onclick="openLightbox('{{ $item['title'] }}', '{{ $item['desc'] }}', '{{ $item['emoji'] }}')">
                <div class="{{ $item['height'] }} bg-gradient-to-br {{ $item['color'] }} border border-{{ $item['border'] }}-400/20 rounded-2xl overflow-hidden relative hover:border-{{ $item['border'] }}-400/60 transition-all duration-300 group-hover:scale-[1.02]">
                    <!-- Placeholder Image Area -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <div class="text-6xl mb-4 group-hover:scale-110 transition-transform duration-300">{{ $item['emoji'] }}</div>
                        <div class="w-16 h-0.5 {{ $item['border'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} mb-3 opacity-60"></div>
                    </div>

                    <!-- Overlay on Hover -->
                    <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6">
                        <div class="text-4xl mb-3">{{ $item['emoji'] }}</div>
                        <h3 class="text-white font-bold text-lg text-center mb-2">{{ $item['title'] }}</h3>
                        <p class="text-gray-300 text-sm text-center">{{ $item['desc'] }}</p>
                        <div class="mt-4 w-10 h-10 {{ $item['border'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Tag -->
                    <div class="absolute top-4 left-4">
                        <span class="text-xs bg-{{ $item['border'] }}-400/20 text-{{ $item['border'] }}-400 px-3 py-1 rounded-full backdrop-blur-sm border border-{{ $item['border'] }}-400/30">
                            {{ ucfirst($item['category']) }}
                        </span>
                    </div>
                </div>
                <div class="mt-3 px-1">
                    <h3 class="font-semibold text-white">{{ $item['title'] }}</h3>
                    <p class="text-gray-400 text-sm">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- LIGHTBOX MODAL -->
<div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 backdrop-blur-sm p-6">
    <div class="relative max-w-2xl w-full bg-gradient-to-br from-gray-800 to-gray-900 border border-yellow-400/20 rounded-3xl overflow-hidden">
        <button onclick="closeLightbox()" class="absolute top-4 right-4 w-10 h-10 bg-gray-700 hover:bg-gray-600 rounded-full flex items-center justify-center z-10 transition">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="h-64 bg-gradient-to-br from-yellow-900/40 to-gray-800/40 flex items-center justify-center">
            <div id="lightbox-emoji" class="text-8xl"></div>
        </div>
        <div class="p-8">
            <h3 id="lightbox-title" class="text-2xl font-bold text-white mb-3 font-serif"></h3>
            <p id="lightbox-desc" class="text-gray-400 leading-relaxed"></p>
            <div class="mt-6 flex gap-3">
                <button onclick="closeLightbox()" class="gradient-gold text-black px-6 py-2 rounded-full font-semibold hover:scale-105 transition text-sm">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- VIDEO SECTION -->
<section class="py-20 px-6 bg-black/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Sorotan</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-white">Highlight</span> <span class="text-gradient-gold">Video</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            @php
            $videos = [
                ['title' => 'Recap Tech Summit 2025', 'duration' => '5:32', 'emoji' => '🎬', 'color' => 'yellow'],
                ['title' => 'Hackathon HIMTI 2025 Highlights', 'duration' => '3:45', 'emoji' => '🎥', 'color' => 'gray'],
            ];
            @endphp
            @foreach($videos as $video)
            <div class="hover-lift bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $video['color'] }}-400/20 rounded-2xl overflow-hidden backdrop-blur-sm">
                <div class="h-48 bg-gradient-to-br from-{{ $video['color'] }}-900/30 to-gray-800/30 flex items-center justify-center relative group cursor-pointer">
                    <div class="text-6xl">{{ $video['emoji'] }}</div>
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black/50">
                        <div class="w-16 h-16 {{ $video['color'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-black ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">{{ $video['duration'] }}</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-white">{{ $video['title'] }}</h3>
                    <p class="text-gray-400 text-sm mt-1">HIMTI Official Channel</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
function filterGallery(category) {
    const items = document.querySelectorAll('.gallery-item');
    const buttons = document.querySelectorAll('.gallery-filter-btn');

    buttons.forEach(btn => {
        if (btn.dataset.filter === category) {
            btn.classList.remove('border', 'border-gray-600', 'text-gray-400', 'hover:border-yellow-400', 'hover:text-yellow-400');
            btn.classList.add('gradient-gold', 'text-black');
        } else {
            btn.classList.remove('gradient-gold', 'text-black');
            btn.classList.add('border', 'border-gray-600', 'text-gray-400', 'hover:border-yellow-400', 'hover:text-yellow-400');
        }
    });

    items.forEach(item => {
        if (category === 'semua' || item.dataset.category === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

function openLightbox(title, desc, emoji) {
    document.getElementById('lightbox-title').textContent = title;
    document.getElementById('lightbox-desc').textContent = desc;
    document.getElementById('lightbox-emoji').textContent = emoji;
    const lb = document.getElementById('lightbox');
    lb.classList.remove('hidden');
    lb.classList.add('flex');
}

function closeLightbox() {
    const lb = document.getElementById('lightbox');
    lb.classList.add('hidden');
    lb.classList.remove('flex');
}

// Close on backdrop click
document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) closeLightbox();
});
</script>

@endsection
