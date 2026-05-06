@extends('layouts.main')

@section('title', 'Program Kerja - Kabinet Ciptakara HIMTI')

@section('content')

<!-- PAGE HEADER -->
<section class="relative py-32 px-6 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black"></div>
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-yellow-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-gray-400/10 rounded-full blur-3xl"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,215,0,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255,215,0,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <p class="text-yellow-400 text-sm tracking-widest uppercase mb-4">Kegiatan & Agenda</p>
        <h1 class="text-5xl md:text-7xl font-bold font-serif mb-6">
            <span class="text-gradient-gold">Program</span> <span class="text-white">Kerja</span>
        </h1>
        <p class="text-gray-400 text-xl max-w-2xl mx-auto">
            Rangkaian program unggulan yang dirancang untuk mengembangkan potensi mahasiswa informatika secara menyeluruh.
        </p>
    </div>
</section>

<!-- FILTER TABS -->
<section class="py-8 px-6 bg-black/30 sticky top-20 z-40 backdrop-blur-md border-b border-gray-800">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-wrap justify-center gap-3">
            @php
            $categories = ['Semua', 'Workshop', 'Seminar', 'Kompetisi', 'Sosial', 'Akademik'];
            @endphp
            @foreach($categories as $i => $cat)
            <button onclick="filterPrograms('{{ strtolower($cat) }}')"
                class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition {{ $i === 0 ? 'gradient-gold text-black' : 'border border-gray-600 text-gray-400 hover:border-yellow-400 hover:text-yellow-400' }}"
                data-filter="{{ strtolower($cat) }}">
                {{ $cat }}
            </button>
            @endforeach
        </div>
    </div>
</section>

<!-- PROGRAMS GRID -->
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="programs-grid">

            @php
            $programs = [
                [
                    'title' => 'Tech Summit 2026',
                    'category' => 'seminar',
                    'tag' => 'Seminar',
                    'date' => '15 Juni 2026',
                    'desc' => 'Konferensi teknologi tahunan menghadirkan pembicara dari perusahaan teknologi terkemuka. Membahas tren AI, Cloud Computing, dan masa depan industri digital.',
                    'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z',
                    'color' => 'yellow',
                    'status' => 'Upcoming',
                ],
                [
                    'title' => 'Hackathon HIMTI',
                    'category' => 'kompetisi',
                    'tag' => 'Kompetisi',
                    'date' => '22 Juni 2026',
                    'desc' => 'Kompetisi coding 24 jam non-stop dengan tema Smart City. Hadiah total Rp 15 juta untuk tim terbaik. Terbuka untuk semua mahasiswa.',
                    'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                    'color' => 'gray',
                    'status' => 'Upcoming',
                ],
                [
                    'title' => 'Workshop AI & Machine Learning',
                    'category' => 'workshop',
                    'tag' => 'Workshop',
                    'date' => '1 Juli 2026',
                    'desc' => 'Pelatihan intensif 3 hari tentang kecerdasan buatan dan machine learning. Dipandu oleh praktisi berpengalaman dari industri.',
                    'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                    'color' => 'yellow',
                    'status' => 'Open',
                ],
                [
                    'title' => 'Bakti Sosial Digital',
                    'category' => 'sosial',
                    'tag' => 'Sosial',
                    'date' => '10 Juli 2026',
                    'desc' => 'Program literasi digital untuk masyarakat sekitar kampus. Mengajarkan penggunaan teknologi untuk UMKM dan pendidikan.',
                    'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                    'color' => 'gray',
                    'status' => 'Open',
                ],
                [
                    'title' => 'Olimpiade Informatika',
                    'category' => 'akademik',
                    'tag' => 'Akademik',
                    'date' => '20 Juli 2026',
                    'desc' => 'Kompetisi akademik bidang informatika tingkat universitas. Meliputi algoritma, struktur data, dan pemrograman kompetitif.',
                    'icon' => 'M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z',
                    'color' => 'yellow',
                    'status' => 'Closed',
                ],
                [
                    'title' => 'Web Development Bootcamp',
                    'category' => 'workshop',
                    'tag' => 'Workshop',
                    'date' => '5 Agustus 2026',
                    'desc' => 'Bootcamp intensif pengembangan web modern menggunakan React, Laravel, dan teknologi terkini. Sertifikat resmi untuk peserta.',
                    'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
                    'color' => 'gray',
                    'status' => 'Open',
                ],
            ];
            @endphp

            @foreach($programs as $program)
            <div class="program-card hover-lift bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $program['color'] }}-400/20 rounded-2xl overflow-hidden backdrop-blur-sm"
                 data-category="{{ $program['category'] }}">
                <!-- Card Header -->
                <div class="p-6 border-b border-gray-700/50">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-12 h-12 {{ $program['color'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $program['icon'] }}"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <span class="text-xs bg-{{ $program['color'] }}-400/20 text-{{ $program['color'] }}-400 px-3 py-1 rounded-full font-medium">
                                {{ $program['tag'] }}
                            </span>
                            <span class="text-xs px-3 py-1 rounded-full font-medium
                                {{ $program['status'] === 'Open' ? 'bg-green-400/20 text-green-400' : ($program['status'] === 'Upcoming' ? 'bg-blue-400/20 text-blue-400' : 'bg-red-400/20 text-red-400') }}">
                                {{ $program['status'] }}
                            </span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">{{ $program['title'] }}</h3>
                    <div class="flex items-center space-x-2 text-gray-400 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ $program['date'] }}</span>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="p-6">
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">{{ $program['desc'] }}</p>
                    <a href="{{ route('contact') }}"
                       class="block text-center {{ $program['color'] === 'yellow' ? 'gradient-gold text-black' : 'gradient-silver text-black' }} py-3 rounded-xl font-semibold hover:scale-105 transition text-sm">
                        {{ $program['status'] === 'Open' ? 'Daftar Sekarang' : ($program['status'] === 'Upcoming' ? 'Notifikasi Saya' : 'Lihat Detail') }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ACHIEVEMENT SECTION -->
<section class="py-20 px-6 bg-black/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Pencapaian Kami</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-white">Prestasi &</span> <span class="text-gradient-gold">Penghargaan</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            @php
            $achievements = [
                ['number' => '50+', 'label' => 'Program Terlaksana', 'icon' => '🏆', 'color' => 'yellow'],
                ['number' => '1000+', 'label' => 'Peserta Kegiatan', 'icon' => '👥', 'color' => 'gray'],
                ['number' => '15+', 'label' => 'Penghargaan', 'icon' => '🥇', 'color' => 'yellow'],
                ['number' => '30+', 'label' => 'Mitra Industri', 'icon' => '🤝', 'color' => 'gray'],
            ];
            @endphp
            @foreach($achievements as $a)
            <div class="hover-lift bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $a['color'] }}-400/20 rounded-2xl p-8 text-center backdrop-blur-sm">
                <div class="text-4xl mb-4">{{ $a['icon'] }}</div>
                <div class="text-4xl font-bold text-gradient-gold font-serif mb-2">{{ $a['number'] }}</div>
                <div class="text-gray-400 text-sm">{{ $a['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
function filterPrograms(category) {
    const cards = document.querySelectorAll('.program-card');
    const buttons = document.querySelectorAll('.filter-btn');

    // Update button styles
    buttons.forEach(btn => {
        if (btn.dataset.filter === category) {
            btn.className = btn.className.replace('border border-gray-600 text-gray-400 hover:border-yellow-400 hover:text-yellow-400', '');
            btn.classList.add('gradient-gold', 'text-black');
        } else {
            btn.classList.remove('gradient-gold', 'text-black');
            btn.className = btn.className + ' border border-gray-600 text-gray-400 hover:border-yellow-400 hover:text-yellow-400';
        }
    });

    // Filter cards
    cards.forEach(card => {
        if (category === 'semua' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>

@endsection
