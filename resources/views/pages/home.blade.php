@extends('layouts.main')

@section('title', 'Beranda - Kabinet Ciptakara HMIT')

@section('content')

<!-- HERO SECTION -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/LOGO2.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        <!-- Dark Overlay agar teks tetap terbaca -->
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Gold Glow -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-yellow-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-400/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,215,0,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255,215,0,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center space-x-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full px-6 py-2 mb-8">
            <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
            <span class="text-yellow-400 text-sm font-medium tracking-widest uppercase">Himpunan Mahasiswa Informatika</span>
        </div>

        <!-- Main Title -->
        <h1 class="text-6xl md:text-8xl font-bold font-serif mb-6 leading-tight">
            <span class="text-gradient-gold">Kabinet</span><br>
            <span class="text-white">Ciptakara</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-300 text-xl md:text-2xl mb-4 max-w-3xl mx-auto leading-relaxed">
            Mewadahi, Mengembangkan, dan Menginspirasi
        </p>
        <p class="text-gray-500 text-lg mb-12 max-w-2xl mx-auto">
            Bersama kami, jadilah bagian dari generasi teknologi yang inovatif dan berdampak nyata bagi masyarakat.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16">
            <a href="{{ route('about') }}" class="gradient-gold text-black px-10 py-4 rounded-full font-bold text-lg hover:scale-105 transition shadow-2xl shadow-yellow-500/30">
                Kenali Kami
            </a>
            <a href="{{ route('programs') }}" class="border-2 border-gray-400 text-gray-300 px-10 py-4 rounded-full font-semibold text-lg hover:border-yellow-400 hover:text-yellow-400 transition">
                Lihat Program
            </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-8 max-w-2xl mx-auto">
            <div class="text-center">
                <div class="text-4xl font-bold text-gradient-gold font-serif">200+</div>
                <div class="text-gray-400 text-sm mt-1">Anggota Aktif</div>
            </div>
            <div class="text-center border-x border-gray-700">
                <div class="text-4xl font-bold text-gradient-gold font-serif">50+</div>
                <div class="text-gray-400 text-sm mt-1">Program Kerja</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-gradient-gold font-serif">10+</div>
                <div class="text-gray-400 text-sm mt-1">Tahun Berdiri</div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-yellow-400/50 rounded-full flex justify-center pt-2">
            <div class="w-1 h-3 bg-yellow-400 rounded-full"></div>
        </div>
    </div>
</section>

<!-- HIGHLIGHT SECTION -->
<section class="py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Mengapa HIMTI?</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-white">Keunggulan</span> <span class="text-gradient-gold">Kami</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="hover-lift bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-yellow-400/20 rounded-2xl p-8 text-center backdrop-blur-sm">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Inovasi Teknologi</h3>
                <p class="text-gray-400 leading-relaxed">Mendorong mahasiswa untuk terus berinovasi dan mengembangkan solusi teknologi masa depan.</p>
            </div>

            <!-- Card 2 -->
            <div class="hover-lift bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-gray-400/20 rounded-2xl p-8 text-center backdrop-blur-sm">
                <div class="w-16 h-16 gradient-silver rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Komunitas Solid</h3>
                <p class="text-gray-400 leading-relaxed">Jaringan mahasiswa informatika yang kuat dan saling mendukung dalam perjalanan akademik dan karir.</p>
            </div>

            <!-- Card 3 -->
            <div class="hover-lift bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-yellow-400/20 rounded-2xl p-8 text-center backdrop-blur-sm">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Pengembangan Diri</h3>
                <p class="text-gray-400 leading-relaxed">Program pelatihan dan mentoring untuk mempersiapkan mahasiswa menghadapi dunia industri teknologi.</p>
            </div>
        </div>
    </div>
</section>

<!-- UPCOMING EVENTS -->
<section class="py-20 px-6 bg-black/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Agenda Terkini</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-gradient-gold">Event</span> <span class="text-white">Mendatang</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @php
            $events = [
                ['date' => '15', 'month' => 'Jun', 'title' => 'Tech Summit 2026', 'desc' => 'Konferensi teknologi tahunan dengan pembicara dari industri terkemuka', 'tag' => 'Seminar', 'color' => 'yellow'],
                ['date' => '22', 'month' => 'Jun', 'title' => 'Hackathon HIMTI', 'desc' => 'Kompetisi coding 24 jam dengan hadiah total jutaan rupiah', 'tag' => 'Kompetisi', 'color' => 'gray'],
                ['date' => '01', 'month' => 'Jul', 'title' => 'Workshop AI & ML', 'desc' => 'Pelatihan intensif kecerdasan buatan dan machine learning', 'tag' => 'Workshop', 'color' => 'yellow'],
            ];
            @endphp

            @foreach($events as $event)
            <div class="hover-lift bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/20 rounded-2xl overflow-hidden backdrop-blur-sm">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-center bg-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/10 border border-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/30 rounded-xl p-3 min-w-16">
                            <div class="text-2xl font-bold text-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400">{{ $event['date'] }}</div>
                            <div class="text-xs text-gray-400">{{ $event['month'] }}</div>
                        </div>
                        <span class="text-xs bg-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/20 text-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400 px-3 py-1 rounded-full">{{ $event['tag'] }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">{{ $event['title'] }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ $event['desc'] }}</p>
                </div>
                <div class="px-6 pb-6">
                    <a href="{{ route('programs') }}" class="block text-center border border-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/40 text-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400 py-2 rounded-xl hover:bg-{{ $event['color'] === 'yellow' ? 'yellow' : 'gray' }}-400 hover:text-black transition text-sm font-medium">
                        Selengkapnya
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Kata Mereka</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-white">Testimoni</span> <span class="text-gradient-gold">Anggota</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
            $testimonials = [
                ['name' => 'Rizky Pratama', 'role' => 'Anggota 2024', 'text' => 'HIMTI memberikan saya kesempatan untuk berkembang tidak hanya secara akademik, tapi juga dalam soft skill dan networking.', 'initial' => 'R'],
                ['name' => 'Sari Dewi', 'role' => 'Ketua Divisi 2025', 'text' => 'Bergabung dengan HIMTI adalah keputusan terbaik. Saya mendapat banyak pengalaman berharga dan teman-teman luar biasa.', 'initial' => 'S'],
                ['name' => 'Budi Santoso', 'role' => 'Alumni 2023', 'text' => 'Pengalaman di HIMTI sangat membantu karir saya. Skill leadership dan teamwork yang saya pelajari sangat berharga.', 'initial' => 'B'],
            ];
            @endphp

            @foreach($testimonials as $t)
            <div class="bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-gray-700/50 rounded-2xl p-8 backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-300 italic mb-6 leading-relaxed">"{{ $t['text'] }}"</p>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-gold rounded-full flex items-center justify-center">
                        <span class="text-black font-bold">{{ $t['initial'] }}</span>
                    </div>
                    <div>
                        <div class="font-semibold text-white">{{ $t['name'] }}</div>
                        <div class="text-xs text-gray-400">{{ $t['role'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-24 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <div class="bg-gradient-to-br from-yellow-400/10 to-gray-400/10 border border-yellow-400/20 rounded-3xl p-16 backdrop-blur-sm">
            <h2 class="text-4xl md:text-5xl font-bold font-serif mb-6">
                Siap Bergabung <span class="text-gradient-gold">Bersama Kami?</span>
            </h2>
            <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
                Jadilah bagian dari komunitas mahasiswa informatika yang inovatif dan berdampak. Daftarkan dirimu sekarang!
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="gradient-gold text-black px-10 py-4 rounded-full font-bold text-lg hover:scale-105 transition shadow-2xl shadow-yellow-500/30">
                    Daftar Sekarang
                </a>
                <a href="{{ route('about') }}" class="border-2 border-gray-400 text-gray-300 px-10 py-4 rounded-full font-semibold text-lg hover:border-yellow-400 hover:text-yellow-400 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>

<!-- LOGIN SECTION -->
<section id="login-section" class="py-24 px-6 bg-black/40">
    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Akses Portal</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-white">Masuk ke</span> <span class="text-gradient-gold">Portal HIMTI</span>
            </h2>
            <p class="text-gray-400 mt-4 max-w-xl mx-auto">
                Pilih portal sesuai peranmu untuk mengakses fitur dan layanan HIMTI.
            </p>
        </div>

        <!-- Login Cards -->
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">

            <!-- Card Mahasiswa -->
            <div class="group relative bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-yellow-400/20 rounded-3xl p-10 backdrop-blur-sm overflow-hidden hover:border-yellow-400/60 transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-500/10">

                <!-- Background Glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="relative z-10">
                    <!-- Icon -->
                    <div class="w-20 h-20 gradient-gold rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-yellow-500/20">
                        <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                        </svg>
                    </div>

                    <!-- Label -->
                    <div class="inline-flex items-center space-x-2 bg-yellow-400/10 border border-yellow-400/20 rounded-full px-3 py-1 mb-4">
                        <span class="text-yellow-400 text-xs font-medium tracking-widest uppercase">🍪 Cookie Based</span>
                    </div>

                    <h3 class="text-2xl font-bold text-white font-serif mb-3">Portal Mahasiswa</h3>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Akses dashboard mahasiswa, lihat program kerja, kirim aspirasi, dan pantau kegiatan HIMTI. Login tersimpan otomatis selama 7 hari.
                    </p>

                    <!-- Features -->
                    <ul class="space-y-2 mb-8">
                        @foreach(['Lihat & daftar program kegiatan', 'Kirim aspirasi & saran', 'Akses galeri dokumentasi', 'Pantau poin & sertifikat'] as $feat)
                        <li class="flex items-center space-x-3 text-sm text-gray-300">
                            <div class="w-5 h-5 gradient-gold rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <!-- Button -->
                    <a href="{{ route('mahasiswa.login') }}"
                       class="flex items-center justify-center space-x-3 w-full gradient-gold text-black py-4 rounded-2xl font-bold text-lg hover:scale-[1.02] transition-transform duration-200 shadow-lg shadow-yellow-500/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        <span>Login Mahasiswa</span>
                    </a>
                </div>
            </div>

            <!-- Card Admin -->
            <div class="group relative bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-gray-500/20 rounded-3xl p-10 backdrop-blur-sm overflow-hidden hover:border-gray-400/60 transition-all duration-300 hover:shadow-2xl hover:shadow-gray-400/10">

                <!-- Background Glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-gray-400/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="relative z-10">
                    <!-- Icon -->
                    <div class="w-20 h-20 gradient-silver rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-gray-400/20">
                        <svg class="w-10 h-10 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>

                    <!-- Label -->
                    <div class="inline-flex items-center space-x-2 bg-gray-400/10 border border-gray-400/20 rounded-full px-3 py-1 mb-4">
                        <span class="text-gray-300 text-xs font-medium tracking-widest uppercase">🖥️ Session Based</span>
                    </div>

                    <h3 class="text-2xl font-bold text-white font-serif mb-3">Panel Admin</h3>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Akses panel administrasi untuk mengelola anggota, program kerja, galeri, dan seluruh konten HIMTI. Sesi aman berbasis server.
                    </p>

                    <!-- Features -->
                    <ul class="space-y-2 mb-8">
                        @foreach(['Kelola data anggota mahasiswa', 'Tambah & edit program kerja', 'Moderasi aspirasi masuk', 'Lihat laporan & statistik'] as $feat)
                        <li class="flex items-center space-x-3 text-sm text-gray-300">
                            <div class="w-5 h-5 gradient-silver rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-gray-800" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <!-- Button -->
                    <a href="{{ route('admin.login') }}"
                       class="flex items-center justify-center space-x-3 w-full gradient-silver text-gray-900 py-4 rounded-2xl font-bold text-lg hover:scale-[1.02] transition-transform duration-200 shadow-lg shadow-gray-400/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        <span>Login Admin</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Note -->
        <div class="text-center mt-10">
            <p class="text-gray-600 text-sm">
                Belum punya akun?
                <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-300 transition font-medium">Daftar sebagai anggota HIMTI</a>
            </p>
        </div>
    </div>
</section>

@endsection
