<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - HIMTI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .gradient-silver { background: linear-gradient(135deg, #C0C0C0 0%, #E8E8E8 50%, #C0C0C0 100%); }
        .gradient-gold { background: linear-gradient(135deg, #FFD700 0%, #FFA500 50%, #FFD700 100%); }
        .text-gradient-silver {
            background: linear-gradient(135deg, #C0C0C0, #E8E8E8, #A8A8A8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(192,192,192,0.1); }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-950 via-gray-900 to-black text-white">

    <!-- Navbar -->
    <nav class="bg-black/70 backdrop-blur-lg border-b border-gray-600/30 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 gradient-silver rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="font-bold text-gradient-silver font-serif">Admin Panel</h1>
                    <p class="text-xs text-gray-500">HIMTI Kabinet Ciptakara</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <!-- Session Info -->
                <div class="flex items-center space-x-2 bg-gray-400/10 border border-gray-400/20 rounded-full px-4 py-1.5">
                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                    <span class="text-gray-300 text-sm font-medium">🖥️ Session Aktif</span>
                </div>
                <a href="{{ route('admin.logout') }}"
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
        <div class="bg-gradient-to-r from-gray-400/10 via-gray-500/5 to-transparent border border-gray-500/20 rounded-3xl p-8 mb-10 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-gray-400/5 rounded-full blur-3xl"></div>
            <div class="relative z-10">
                <p class="text-gray-400 text-sm tracking-widest uppercase mb-2">Panel Administrator</p>
                <h2 class="text-3xl font-bold font-serif mb-2">
                    Selamat Datang, <span class="text-gradient-silver">{{ $username }}</span>! 🔐
                </h2>
                <p class="text-gray-500">Kamu login menggunakan <span class="text-gray-300 font-medium">Session</span> — data tersimpan di server dan aman dari manipulasi client.</p>

                <!-- Session Info -->
                <div class="mt-4 flex flex-wrap gap-3">
                    <div class="flex items-center space-x-2 bg-black/30 rounded-xl px-4 py-2 border border-gray-600/30">
                        <span class="text-gray-400">🖥️</span>
                        <span class="text-gray-300 text-sm">Session ID: <code class="text-gray-400 text-xs">{{ substr(session()->getId(), 0, 16) }}...</code></span>
                    </div>
                    <div class="flex items-center space-x-2 bg-black/30 rounded-xl px-4 py-2 border border-gray-600/30">
                        <span class="text-green-400">✅</span>
                        <span class="text-gray-300 text-sm">Role: <span class="text-green-400">Administrator</span></span>
                    </div>
                    <div class="flex items-center space-x-2 bg-black/30 rounded-xl px-4 py-2 border border-gray-600/30">
                        <span class="text-blue-400">⏱️</span>
                        <span class="text-gray-300 text-sm">Login: <span class="text-blue-400">{{ session('admin_login_time') }}</span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            @php
            $stats = [
                ['label' => 'Total Anggota', 'value' => '214', 'icon' => '👥', 'change' => '+12 bulan ini', 'color' => 'gray'],
                ['label' => 'Program Aktif', 'value' => '6', 'icon' => '📋', 'change' => '3 upcoming', 'color' => 'yellow'],
                ['label' => 'Aspirasi Masuk', 'value' => '28', 'icon' => '💬', 'change' => '5 belum dibaca', 'color' => 'gray'],
                ['label' => 'Pendaftar Baru', 'value' => '17', 'icon' => '📝', 'change' => 'Minggu ini', 'color' => 'yellow'],
            ];
            @endphp
            @foreach($stats as $stat)
            <div class="card-hover bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $stat['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/20 rounded-2xl p-5 backdrop-blur-sm">
                <div class="flex items-start justify-between mb-3">
                    <div class="text-2xl">{{ $stat['icon'] }}</div>
                    <span class="text-xs text-gray-500">{{ $stat['change'] }}</span>
                </div>
                <div class="text-3xl font-bold text-white font-serif">{{ $stat['value'] }}</div>
                <div class="text-gray-400 text-xs mt-1">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <!-- Admin Menu -->
            <div class="md:col-span-2">
                <h3 class="text-xl font-bold text-white mb-6 font-serif">Menu <span class="text-gradient-silver">Administrasi</span></h3>
                <div class="grid grid-cols-2 gap-4">
                    @php
                    $menus = [
                        ['title' => 'Kelola Anggota', 'desc' => 'Manajemen data mahasiswa', 'icon' => '👥', 'color' => 'gray'],
                        ['title' => 'Kelola Program', 'desc' => 'Tambah & edit program kerja', 'icon' => '📋', 'color' => 'yellow'],
                        ['title' => 'Kelola Galeri', 'desc' => 'Upload foto & video kegiatan', 'icon' => '🖼️', 'color' => 'gray'],
                        ['title' => 'Baca Aspirasi', 'desc' => '5 aspirasi belum dibaca', 'icon' => '💬', 'color' => 'yellow'],
                        ['title' => 'Laporan', 'desc' => 'Statistik & laporan kegiatan', 'icon' => '📊', 'color' => 'gray'],
                        ['title' => 'Pengaturan', 'desc' => 'Konfigurasi sistem HIMTI', 'icon' => '⚙️', 'color' => 'yellow'],
                    ];
                    @endphp
                    @foreach($menus as $menu)
                    <a href="#" class="card-hover bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $menu['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/20 rounded-2xl p-5 backdrop-blur-sm hover:border-{{ $menu['color'] === 'yellow' ? 'yellow' : 'gray' }}-400/50 transition group">
                        <div class="text-2xl mb-2">{{ $menu['icon'] }}</div>
                        <h4 class="font-bold text-white text-sm mb-1 group-hover:text-{{ $menu['color'] === 'yellow' ? 'yellow' : 'gray' }}-400 transition">{{ $menu['title'] }}</h4>
                        <p class="text-gray-500 text-xs">{{ $menu['desc'] }}</p>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Recent Activity -->
            <div>
                <h3 class="text-xl font-bold text-white mb-6 font-serif">Aktivitas <span class="text-gradient-silver">Terbaru</span></h3>
                <div class="space-y-3">
                    @php
                    $activities = [
                        ['text' => 'Mahasiswa baru mendaftar', 'time' => '5 menit lalu', 'icon' => '👤', 'color' => 'green'],
                        ['text' => 'Aspirasi baru masuk', 'time' => '12 menit lalu', 'icon' => '💬', 'color' => 'yellow'],
                        ['text' => 'Program Workshop diperbarui', 'time' => '1 jam lalu', 'icon' => '📋', 'color' => 'blue'],
                        ['text' => 'Foto galeri diunggah', 'time' => '2 jam lalu', 'icon' => '🖼️', 'color' => 'gray'],
                        ['text' => 'Admin login dari IP baru', 'time' => '3 jam lalu', 'icon' => '🔐', 'color' => 'red'],
                    ];
                    @endphp
                    @foreach($activities as $act)
                    <div class="flex items-start space-x-3 bg-gray-800/40 border border-gray-700/30 rounded-xl p-3 hover:border-gray-600/50 transition">
                        <div class="w-8 h-8 bg-{{ $act['color'] }}-400/10 border border-{{ $act['color'] }}-400/20 rounded-lg flex items-center justify-center flex-shrink-0 text-sm">
                            {{ $act['icon'] }}
                        </div>
                        <div>
                            <p class="text-gray-300 text-sm">{{ $act['text'] }}</p>
                            <p class="text-gray-600 text-xs mt-0.5">{{ $act['time'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Quick Links -->
                <div class="mt-6 space-y-2">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 text-gray-400 hover:text-gray-200 text-sm transition py-2 px-3 rounded-lg hover:bg-gray-800/50">
                        <span>🏠</span><span>Lihat Halaman Publik</span>
                    </a>
                    <a href="{{ route('mahasiswa.login') }}" class="flex items-center space-x-2 text-gray-400 hover:text-yellow-400 text-sm transition py-2 px-3 rounded-lg hover:bg-gray-800/50">
                        <span>🎓</span><span>Portal Mahasiswa</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
