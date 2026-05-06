<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa - HIMTI</title>
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
        .input-field {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,215,0,0.2);
            transition: all 0.3s ease;
        }
        .input-field:focus {
            outline: none;
            border-color: #FFD700;
            background: rgba(255,215,0,0.05);
            box-shadow: 0 0 0 3px rgba(255,215,0,0.1);
        }
        .btn-gold {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            transition: all 0.3s ease;
        }
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255,215,0,0.4);
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        .float-anim { animation: float 4s ease-in-out infinite; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 flex items-center justify-center p-4">

    <!-- Background Glow -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-yellow-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-yellow-400/5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 opacity-3" style="background-image: linear-gradient(rgba(255,215,0,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,215,0,0.05) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="relative w-full max-w-md">

        <!-- Logo & Header -->
        <div class="text-center mb-8 float-anim">
            <div class="w-20 h-20 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4 shadow-2xl shadow-yellow-500/30">
                <span class="text-black font-bold text-3xl font-serif">H</span>
            </div>
            <h1 class="text-3xl font-bold font-serif text-gradient-gold">HIMTI</h1>
            <p class="text-gray-400 text-sm mt-1">Kabinet Ciptakara</p>
        </div>

        <!-- Card -->
        <div class="bg-gray-900/80 backdrop-blur-xl border border-yellow-400/20 rounded-3xl p-8 shadow-2xl">

            <!-- Title -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center space-x-2 bg-yellow-400/10 border border-yellow-400/20 rounded-full px-4 py-1.5 mb-4">
                    <span class="text-lg">🎓</span>
                    <span class="text-yellow-400 text-xs font-medium tracking-widest uppercase">Portal Mahasiswa</span>
                </div>
                <h2 class="text-2xl font-bold text-white font-serif">Selamat Datang</h2>
                <p class="text-gray-400 text-sm mt-1">Masuk ke akun mahasiswa kamu</p>
            </div>

            <!-- Error Alert -->
            @if(session('error'))
            <div class="flex items-center space-x-3 bg-red-500/10 border border-red-500/30 rounded-xl px-4 py-3 mb-6">
                <span class="text-red-400 text-lg">⚠️</span>
                <p class="text-red-400 text-sm">{{ session('error') }}</p>
            </div>
            @endif

            <!-- Success Alert -->
            @if(session('success'))
            <div class="flex items-center space-x-3 bg-green-500/10 border border-green-500/30 rounded-xl px-4 py-3 mb-6">
                <span class="text-green-400 text-lg">✅</span>
                <p class="text-green-400 text-sm">{{ session('success') }}</p>
            </div>
            @endif

            <!-- Cookie Info Banner -->
            <div class="flex items-start space-x-3 bg-yellow-400/5 border border-yellow-400/15 rounded-xl px-4 py-3 mb-6">
                <span class="text-yellow-400 text-sm mt-0.5">🍪</span>
                <p class="text-gray-400 text-xs leading-relaxed">
                    Login mahasiswa menggunakan <span class="text-yellow-400 font-medium">Cookie</span> — centang "Ingat Saya" agar tetap login meski browser ditutup.
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('mahasiswa.login.post') }}">
                @csrf

                <!-- NIM -->
                <div class="mb-5">
                    <label class="block text-yellow-400 text-sm font-medium mb-2">
                        NIM / Email Mahasiswa
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <input
                            type="text"
                            name="nim"
                            value="{{ cookie('himti_nim') ?? old('nim') }}"
                            placeholder="Masukkan NIM atau email"
                            required
                            class="input-field w-full pl-12 pr-4 py-3.5 rounded-xl text-white placeholder-gray-500 text-sm"
                        >
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label class="block text-yellow-400 text-sm font-medium mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input
                            type="password"
                            name="password"
                            id="password-mahasiswa"
                            placeholder="Masukkan password"
                            required
                            class="input-field w-full pl-12 pr-12 py-3.5 rounded-xl text-white placeholder-gray-500 text-sm"
                        >
                        <button type="button" onclick="togglePassword('password-mahasiswa', 'eye-mahasiswa')"
                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-500 hover:text-yellow-400 transition">
                            <svg id="eye-mahasiswa" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me (Cookie) -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center space-x-3 cursor-pointer group">
                        <div class="relative">
                            <input type="checkbox" name="remember" id="remember" class="sr-only peer" checked>
                            <div class="w-10 h-6 bg-gray-700 rounded-full peer peer-checked:bg-yellow-500 transition-colors"></div>
                            <div class="absolute top-0.5 left-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform peer-checked:translate-x-4"></div>
                        </div>
                        <span class="text-gray-400 text-sm group-hover:text-gray-300 transition">
                            Ingat Saya <span class="text-yellow-400/60 text-xs">(Cookie 7 hari)</span>
                        </span>
                    </label>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-gold w-full py-4 rounded-xl text-black font-bold text-base shadow-lg">
                    Masuk sebagai Mahasiswa 🎓
                </button>
            </form>

            <!-- Divider -->
            <div class="flex items-center my-6">
                <div class="flex-1 h-px bg-gray-700"></div>
                <span class="px-4 text-gray-500 text-xs">atau</span>
                <div class="flex-1 h-px bg-gray-700"></div>
            </div>

            <!-- Switch to Admin -->
            <a href="{{ route('admin.login') }}"
               class="flex items-center justify-center space-x-2 w-full py-3.5 rounded-xl border border-gray-600 text-gray-400 hover:border-gray-400 hover:text-white transition text-sm font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span>Login sebagai Admin</span>
            </a>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-gray-500 hover:text-yellow-400 text-sm transition">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>

        <!-- Demo Credentials -->
        <div class="mt-4 bg-yellow-400/5 border border-yellow-400/10 rounded-2xl p-4 text-center">
            <p class="text-gray-500 text-xs mb-2">Demo Akun Mahasiswa</p>
            <p class="text-yellow-400/70 text-xs font-mono">NIM: <span class="text-yellow-400">mahasiswa@himti.ac.id</span></p>
            <p class="text-yellow-400/70 text-xs font-mono">Password: <span class="text-yellow-400">mahasiswa123</span></p>
        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>`;
            } else {
                input.type = 'password';
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>`;
            }
        }
    </script>
</body>
</html>
