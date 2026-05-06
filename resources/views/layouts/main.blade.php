<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kabinet Ciptakara - HMIT')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
        .gradient-gold {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 50%, #FFD700 100%);
        }
        .gradient-silver {
            background: linear-gradient(135deg, #C0C0C0 0%, #E8E8E8 50%, #C0C0C0 100%);
        }
        .gradient-gold-silver {
            background: linear-gradient(135deg, #FFD700 0%, #C0C0C0 50%, #FFD700 100%);
        }
        .text-gradient-gold {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(255, 215, 0, 0.3);
        }
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #FFD700, #FFA500);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white">

    <!-- NAVBAR -->
    <nav class="fixed w-full z-50 bg-black/60 backdrop-blur-lg border-b border-gold/20 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-gold rounded-full flex items-center justify-center">
                        <span class="text-black font-bold text-xl">H</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gradient-gold font-serif">HMIT</h1>
                        <p class="text-xs text-gray-400">Kabinet Ciptakara</p>
                    </div>
                </div>

                <!-- Menu Desktop -->
                <ul class="hidden md:flex space-x-8 text-sm font-medium">
                    <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">Tentang Kami</a></li>
                    <li><a href="{{ route('programs') }}" class="nav-link {{ request()->routeIs('programs') ? 'active text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">Program Kerja</a></li>
                    <li><a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">Galeri</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">Kontak</a></li>
                </ul>

                <!-- CTA Button -->
                <a href="{{ route('home') }}#login-section" class="hidden md:block gradient-gold text-black px-6 py-2 rounded-full font-semibold hover:scale-105 transition shadow-lg">
                    Login Portal
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-yellow-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 space-y-3">
                <a href="{{ route('home') }}" class="block text-gray-300 hover:text-yellow-400 py-2">Beranda</a>
                <a href="{{ route('about') }}" class="block text-gray-300 hover:text-yellow-400 py-2">Tentang Kami</a>
                <a href="{{ route('programs') }}" class="block text-gray-300 hover:text-yellow-400 py-2">Program Kerja</a>
                <a href="{{ route('gallery') }}" class="block text-gray-300 hover:text-yellow-400 py-2">Galeri</a>
                <a href="{{ route('contact') }}" class="block text-gray-300 hover:text-yellow-400 py-2">Kontak</a>
                <a href="{{ route('contact') }}" class="block gradient-gold text-black px-6 py-2 rounded-full font-semibold text-center">Gabung Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-black border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-bold text-gradient-gold mb-4 font-serif">HMIT</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Himpunan Mahasiswa Informatika yang berfokus pada pengembangan teknologi dan kepemimpinan mahasiswa.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-yellow-400 mb-4">Menu Cepat</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-yellow-400 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-yellow-400 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('programs') }}" class="hover:text-yellow-400 transition">Program Kerja</a></li>
                        <li><a href="{{ route('gallery') }}" class="hover:text-yellow-400 transition">Galeri</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-semibold text-yellow-400 mb-4">Kontak</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>📧 hmit.uts@gmail.com</li>
                        <li>📱 +62 812-3456-7890</li>
                        <li>📍 Gedung Informatika Lt.3</li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <h4 class="font-semibold text-yellow-400 mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center hover:scale-110 transition">
                            <span class="text-black font-bold">IG</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gradient-to-br from-gray-400 to-gray-600 rounded-full flex items-center justify-center hover:scale-110 transition">
                            <span class="text-white font-bold">TW</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center hover:scale-110 transition">
                            <span class="text-black font-bold">YT</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500 text-sm">
                <p>&copy; 2026 Himpunan Mahasiswa Informatika - Kabinet Ciptakara. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>
