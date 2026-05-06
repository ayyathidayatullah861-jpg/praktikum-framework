<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa - HIMTI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .gradient-gold { background: linear-gradient(135deg, #FFD700 0%, #FFA500 50%, #FFD700 100%); }
        .text-gradient-gold {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(255,215,0,0.15); }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white">

    <!-- Navbar -->
    <nav class="bg-black/60 backdrop-blur-lg border-b border-yellow-400/20 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 gradient-gold rounded-full flex items-center justify-center">
                    <span class="text-black font-bold font-serif">H</span>
                </div>
                <div>
                    <h1 class="font-bold text-gradient-gold font-serif">HIMTI</h1>
                    <p class="text-xs text-gray-400">Portal Mahasiswa</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2 bg-yellow-400/10 border border-yellow-400/20 rounded-full px-4 py-1.5">
                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                    <span class="text-yellow-400 text-sm font-medium">🍪 Cookie Aktif</span>
                </div>
                <a href="{{ route('mahasiswa.logout') }}"
                   class="flex items-center space-x-2 bg-red-500/10 border border-red-500/30 text-red-400 hover:bg-red-500/20 px-4 py-2 rounded-xl text-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 py-10">

        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-yellow-400/10 via-yellow-500/5 to-transparent border border-yellow-400/20 rounded-3xl p-8 mb-10 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-400/5 rounded-full blur-3xl"></div>
            <div class="relative z-10">
                <p class="text-yellow-400 text-sm tracking-widest uppercase mb-2">Selamat Datang Kembali</p>
                <h2 class="text-3xl font-bold font-serif mb-2">
                    Halo, <span class="text-gradient-gold">{{ $nim }}</span>! 👋
                </h2>
                <p class="text-gray-400">Kamu login menggunakan <span class="text-yellow-400 font-medium">Cookie</span> — sesi kamu tersimpan selama <span class="text-yellow-400 font-medium">7 hari</span>.</p>

                <!-- Cookie Info -->
                <div class="mt-4 flex flex-wrap gap-3">
                    <div class="flex items-center space-x-2 bg-black/30 rounded-xl px-4 py-2 border border-yellow-400/10">
                        <span class="text-yellow-400">🍪</span>
                        <span class="text-gray-300 text-sm">Cookie: <code class="text-yellow-400 text-xs">himti_nim={{ $nim }}</code></span>
                    </div>
                    <div class="flex items-center space-x-2 bg-black/30 rounded-xl px-4 py-2 border border-yellow-400/10">
                        <span class="text-green-400">✅</span>
                        <span class="text-gray-300 text-sm">Status: <span class="text-green-400">Terautentikasi</span></span>
                    </div>
                    <div class="flex items-center space-x-2 bg-black/30 rounded-xl px-4 py-2 border border-yellow-400/10">
                        <span class="text-blue-400">⏱️</span>
                        <span class="text-gray-300 text-sm">Expired: <span class="text-blue-400">7 hari</span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            @php
            $stats = [
                ['label' => 'Event Diikuti', 'value' => '5', 'icon' => '🎯', 'color' => 'yellow'],
                ['label' => 'Poin Aktif', 'value' => '320', 'icon' => '⭐', 'color' => 'yellow'],
                ['label' => 'Sertifikat', 'value' => '3', 'icon' => '📜', 'color' => 'gray'],
                ['label' => 'Divisi', 'value' => 'Teknologi', 'icon' => '💻', 'color' => 'gray'],
            ];
            @endphp
            @foreach($stats as $stat)
            <div class="card-hover bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $stat['color'] }}-400/20 rounded-2xl p-5 text-center backdrop-blur-sm">
                <div class="text-3xl mb-2">{{ $stat['icon'] }}</div>
                <div class="text-2xl font-bold text-white font-serif">{{ $stat['value'] }}</div>
                <div class="text-gray-400 text-xs mt-1">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>

        <!-- Menu Grid -->
        <h3 class="text-xl font-bold text-white mb-6 font-serif">Menu <span class="text-gradient-gold">Mahasiswa</span></h3>
        <div class="grid md:grid-cols-3 gap-6 mb-10">
            @php
            $menus = [
                ['title' => 'Program Kerja', 'desc' => 'Lihat dan daftar program kegiatan HIMTI', 'icon' => '📋', 'link' => route('programs'), 'color' => 'yellow'],
                ['title' => 'Galeri Kegiatan', 'desc' => 'Dokumentasi foto dan video kegiatan', 'icon' => '🖼️', 'link' => route('gallery'), 'color' => 'gray'],
                ['title' => 'Kirim Aspirasi', 'desc' => 'Sampaikan saran dan masukan kamu', 'icon' => '💬', 'link' => route('contact'), 'color' => 'yellow'],
                ['title' => 'Tentang HIMTI', 'desc' => 'Profil organisasi dan kepengurusan', 'icon' => 'ℹ️', 'link' => route('about'), 'color' => 'gray'],
                ['title' => 'Beranda', 'desc' => 'Kembali ke halaman utama HIMTI', 'icon' => '🏠', 'link' => route('home'), 'color' => 'yellow'],
                ['title' => 'Profil Saya', 'desc' => 'Lihat dan edit profil mahasiswa', 'icon' => '👤', 'link' => '#', 'color' => 'gray'],
            ];
            @endphp
            @foreach($menus as $menu)
            <a href="{{ $menu['link'] }}" class="card-hover bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $menu['color'] }}-400/20 rounded-2xl p-6 backdrop-blur-sm hover:border-{{ $menu['color'] }}-400/50 transition group">
                <div class="text-3xl mb-3">{{ $menu['icon'] }}</div>
                <h4 class="font-bold text-white mb-1 group-hover:text-{{ $menu['color'] }}-400 transition">{{ $menu['title'] }}</h4>
                <p class="text-gray-400 text-sm">{{ $menu['desc'] }}</p>
            </a>
            @endforeach
        </div>

        <!-- Upcoming Events -->
        <h3 class="text-xl font-bold text-white mb-6 font-serif">Event <span class="text-gradient-gold">Mendatang</span></h3>
        <div class="space-y-3">
            @php
            $events = [
                ['title' => 'Tech Summit 2026', 'date' => '15 Juni 2026', 'status' => 'Terdaftar', 'color' => 'green'],
                ['title' => 'Hackathon HIMTI', 'date' => '22 Juni 2026', 'status' => 'Belum Daftar', 'color' => 'yellow'],
                ['title' => 'Workshop AI & ML', 'date' => '1 Juli 2026', 'status' => 'Belum Daftar', 'color' => 'yellow'],
            ];
            @endphp
            @foreach($events as $event)
            <div class="flex items-center justify-between bg-gray-800/40 border border-gray-700/50 rounded-xl px-5 py-4 hover:border-yellow-400/30 transition">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 gradient-gold rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-black text-lg">📅</span>
                    </div>
                    <div>
                        <p class="font-semibold text-white">{{ $event['title'] }}</p>
                        <p class="text-gray-400 text-sm">{{ $event['date'] }}</p>
                    </div>
                </div>
                <span class="text-xs px-3 py-1 rounded-full font-medium
                    {{ $event['color'] === 'green' ? 'bg-green-400/20 text-green-400' : 'bg-yellow-400/20 text-yellow-400' }}">
                    {{ $event['status'] }}
                </span>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
