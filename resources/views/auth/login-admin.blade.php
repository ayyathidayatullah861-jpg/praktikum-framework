<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - HIMTI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .gradient-silver { background: linear-gradient(135deg, #C0C0C0 0%, #E8E8E8 50%, #C0C0C0 100%); }
        .gradient-dark { background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); }
        .text-gradient-silver {
            background: linear-gradient(135deg, #C0C0C0, #E8E8E8, #A8A8A8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .input-field {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(192,192,192,0.2);
            transition: all 0.3s ease;
        }
        .input-field:focus {
            outline: none;
            border-color: #C0C0C0;
            background: rgba(192,192,192,0.05);
            box-shadow: 0 0 0 3px rgba(192,192,192,0.1);
        }
        .btn-silver {
            background: linear-gradient(135deg, #C0C0C0, #E8E8E8);
            transition: all 0.3s ease;
        }
        .btn-silver:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(192,192,192,0.3);
        }
        @keyframes pulse-ring {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(192,192,192,0.4); }
            70% { transform: scale(1); box-shadow: 0 0 0 15px rgba(192,192,192,0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(192,192,192,0); }
        }
        .pulse-ring { animation: pulse-ring 2.5s ease-in-out infinite; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-950 via-gray-900 to-black flex items-center justify-center p-4">

    <!-- Background Glow -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gray-400/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 left-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(192,192,192,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(192,192,192,0.03) 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>

    <div class="relative w-full max-w-md">

        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 gradient-silver rounded-full flex items-center justify-center mx-auto mb-4 shadow-2xl shadow-gray-400/20 pulse-ring">
                <svg class="w-10 h-10 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold font-serif text-gradient-silver">Admin Panel</h1>
            <p class="text-gray-500 text-sm mt-1">HIMTI Kabinet Ciptakara</p>
        </div>

        <!-- Card -->
        <div class="bg-gray-900/90 backdrop-blur-xl border border-gray-600/30 rounded-3xl p-8 shadow-2xl">

            <!-- Title -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center space-x-2 bg-gray-400/10 border border-gray-400/20 rounded-full px-4 py-1.5 mb-4">
                    <span class="text-lg">🔐</span>
                    <span class="text-gray-300 text-xs font-medium tracking-widest uppercase">Akses Administrator</span>
                </div>
                <h2 class="text-2xl font-bold text-white font-serif">Login Admin</h2>
                <p class="text-gray-500 text-sm mt-1">Masuk ke panel administrasi HIMTI</p>
            </div>

            <!-- Error Alert -->
            @if(session('error'))
            <div class="flex items-center space-x-3 bg-red-500/10 border border-red-500/30 rounded-xl px-4 py-3 mb-6">
                <span class="text-red-400 text-lg">⚠️</span>
                <p class="text-red-400 text-sm">{{ session('error') }}</p>
            </div>
            @endif

            <!-- Session Info Banner -->
            <div class="flex items-start space-x-3 bg-gray-400/5 border border-gray-400/15 rounded-xl px-4 py-3 mb-6">
                <span class="text-gray-400 text-sm mt-0.5">🖥️</span>
                <p class="text-gray-500 text-xs leading-relaxed">
                    Login admin menggunakan <span class="text-gray-300 font-medium">Session</span> — data tersimpan di server dan otomatis berakhir saat browser ditutup.
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf

                <!-- Username -->
                <div class="mb-5">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        Username Admin
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <input
                            type="text"
                            name="username"
                            value="{{ old('username') }}"
                            placeholder="Masukkan username admin"
                            required
                            autocomplete="off"
                            class="input-field w-full pl-12 pr-4 py-3.5 rounded-xl text-white placeholder-gray-600 text-sm"
                        >
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input
                            type="password"
                            name="password"
                            id="password-admin"
                            placeholder="Masukkan password"
                            required
                            autocomplete="current-password"
                            class="input-field w-full pl-12 pr-12 py-3.5 rounded-xl text-white placeholder-gray-600 text-sm"
                        >
                        <button type="button" onclick="togglePassword('password-admin', 'eye-admin')"
                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-600 hover:text-gray-300 transition">
                            <svg id="eye-admin" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Security Notice -->
                <div class="flex items-center space-x-2 mb-6 p-3 bg-gray-800/50 rounded-xl border border-gray-700/50">
                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-500 text-xs">Session akan berakhir otomatis setelah tidak aktif selama 2 jam.</p>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-silver w-full py-4 rounded-xl text-gray-900 font-bold text-base shadow-lg">
                    Masuk ke Panel Admin 🔐
                </button>
            </form>

            <!-- Divider -->
            <div class="flex items-center my-6">
                <div class="flex-1 h-px bg-gray-800"></div>
                <span class="px-4 text-gray-600 text-xs">atau</span>
                <div class="flex-1 h-px bg-gray-800"></div>
            </div>

            <!-- Switch to Mahasiswa -->
            <a href="{{ route('mahasiswa.login') }}"
               class="flex items-center justify-center space-x-2 w-full py-3.5 rounded-xl border border-gray-700 text-gray-500 hover:border-yellow-400/50 hover:text-yellow-400 transition text-sm font-medium">
                <span class="text-base">🎓</span>
                <span>Login sebagai Mahasiswa</span>
            </a>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-400 text-sm transition">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>

        <!-- Demo Credentials -->
        <div class="mt-4 bg-gray-400/5 border border-gray-600/20 rounded-2xl p-4 text-center">
            <p class="text-gray-600 text-xs mb-2">Demo Akun Admin</p>
            <p class="text-gray-400/70 text-xs font-mono">Username: <span class="text-gray-300">admin</span></p>
            <p class="text-gray-400/70 text-xs font-mono">Password: <span class="text-gray-300">admin123</span></p>
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
