@extends('layouts.main')

@section('title', 'Tentang Kami - Kabinet Ciptakara HIMTI')

@section('content')

<!-- PAGE HEADER -->
<section class="relative py-32 px-6 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black"></div>
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-96 h-96 bg-yellow-500/10 rounded-full blur-3xl"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,215,0,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255,215,0,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <p class="text-yellow-400 text-sm tracking-widest uppercase mb-4">Mengenal Lebih Dekat</p>
        <h1 class="text-5xl md:text-7xl font-bold font-serif mb-6">
            <span class="text-white">Tentang</span> <span class="text-gradient-gold">Kami</span>
        </h1>
        <p class="text-gray-400 text-xl max-w-2xl mx-auto">
            Mengenal lebih dalam tentang HIMTI, visi misi, dan perjalanan kami dalam membentuk generasi teknologi unggul.
        </p>
    </div>
</section>

<!-- ABOUT CONTENT -->
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <!-- Text -->
            <div>
                <p class="text-yellow-400 text-sm tracking-widest uppercase mb-4">Siapa Kami</p>
                <h2 class="text-4xl font-bold font-serif mb-6">
                    <span class="text-white">Himpunan Mahasiswa</span><br>
                    <span class="text-gradient-gold">Informatika</span>
                </h2>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Himpunan Mahasiswa Informatika (HIMTI) adalah organisasi kemahasiswaan yang berdiri sejak 2015, menjadi wadah bagi seluruh mahasiswa program studi Informatika untuk berkembang, berkolaborasi, dan berinovasi.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8">
                    Dengan semangat Kabinet Ciptakara, kami berkomitmen untuk menciptakan ekosistem yang mendukung pertumbuhan akademik, profesional, dan personal setiap anggota melalui program-program berkualitas tinggi.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-yellow-400/10 border border-yellow-400/20 rounded-xl p-4 text-center">
                        <div class="text-3xl font-bold text-gradient-gold font-serif">2015</div>
                        <div class="text-gray-400 text-sm">Tahun Berdiri</div>
                    </div>
                    <div class="bg-gray-400/10 border border-gray-400/20 rounded-xl p-4 text-center">
                        <div class="text-3xl font-bold text-white font-serif">200+</div>
                        <div class="text-gray-400 text-sm">Anggota Aktif</div>
                    </div>
                </div>
            </div>

            <!-- Visual Card -->
            <div class="relative">
                <div class="bg-gradient-to-br from-yellow-400/10 to-gray-400/10 border border-yellow-400/20 rounded-3xl p-10 backdrop-blur-sm">
                    <div class="text-center mb-8">
                        <div class="w-24 h-24 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-black font-bold text-4xl font-serif">H</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white font-serif">HIMTI</h3>
                        <p class="text-yellow-400 text-sm">Kabinet Ciptakara 2025/2026</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 bg-black/30 rounded-xl p-3">
                            <div class="w-8 h-8 gradient-gold rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-gray-300 text-sm">Organisasi Kemahasiswaan Resmi</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-black/30 rounded-xl p-3">
                            <div class="w-8 h-8 gradient-silver rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-gray-300 text-sm">Program Kerja Terstruktur</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-black/30 rounded-xl p-3">
                            <div class="w-8 h-8 gradient-gold rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-gray-300 text-sm">Jaringan Alumni Luas</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-black/30 rounded-xl p-3">
                            <div class="w-8 h-8 gradient-silver rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-gray-300 text-sm">Kolaborasi Industri & Akademik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VISI MISI -->
<section class="py-20 px-6 bg-black/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Arah & Tujuan</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-gradient-gold">Visi</span> <span class="text-white">&</span> <span class="text-gradient-gold">Misi</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <!-- Visi -->
            <div class="bg-gradient-to-br from-yellow-400/10 to-transparent border border-yellow-400/30 rounded-3xl p-10">
                <div class="w-14 h-14 gradient-gold rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gradient-gold mb-4 font-serif">Visi</h3>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Mewujudkan Himpunan Mahasiswa Informatika yang progresif, kolaboratif, dan berdampak nyata melalui inovasi teknologi dan pengembangan sumber daya manusia yang unggul.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-gradient-to-br from-gray-400/10 to-transparent border border-gray-400/30 rounded-3xl p-10">
                <div class="w-14 h-14 gradient-silver rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4 font-serif">Misi</h3>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-start space-x-3">
                        <div class="w-5 h-5 gradient-gold rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        </div>
                        <span>Mendorong budaya inovasi dan kreativitas mahasiswa</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-5 h-5 gradient-gold rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        </div>
                        <span>Menyelenggarakan program kerja berkualitas tinggi</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-5 h-5 gradient-gold rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        </div>
                        <span>Membangun kolaborasi dengan industri dan institusi</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-5 h-5 gradient-gold rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        </div>
                        <span>Mengembangkan kepemimpinan dan karakter mahasiswa</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- STRUKTUR ORGANISASI -->
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Kepengurusan</p>
            <h2 class="text-4xl md:text-5xl font-bold font-serif">
                <span class="text-white">Struktur</span> <span class="text-gradient-gold">Organisasi</span>
            </h2>
        </div>

        <!-- Ketua -->
        <div class="flex justify-center mb-8">
            <div class="hover-lift bg-gradient-to-br from-yellow-400/20 to-yellow-600/10 border border-yellow-400/40 rounded-2xl p-8 text-center w-64">
                <div class="w-20 h-20 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-black font-bold text-2xl">A</span>
                </div>
                <h3 class="font-bold text-white text-lg">Ahmad Fauzi</h3>
                <p class="text-yellow-400 text-sm">Ketua Umum</p>
            </div>
        </div>

        <!-- Wakil & Sekretaris -->
        <div class="grid md:grid-cols-3 gap-6 max-w-3xl mx-auto mb-8">
            @php
            $pengurus = [
                ['initial' => 'B', 'name' => 'Budi Hartono', 'role' => 'Wakil Ketua', 'border' => 'yellow'],
                ['initial' => 'C', 'name' => 'Citra Lestari', 'role' => 'Sekretaris', 'border' => 'gray'],
                ['initial' => 'D', 'name' => 'Dian Purnama', 'role' => 'Bendahara', 'border' => 'yellow'],
            ];
            @endphp
            @foreach($pengurus as $p)
            <div class="hover-lift bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $p['border'] }}-400/20 rounded-2xl p-6 text-center backdrop-blur-sm">
                <div class="w-16 h-16 {{ $p['border'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} rounded-full flex items-center justify-center mx-auto mb-3">
                    <span class="text-black font-bold text-xl">{{ $p['initial'] }}</span>
                </div>
                <h3 class="font-bold text-white">{{ $p['name'] }}</h3>
                <p class="text-{{ $p['border'] }}-400 text-sm">{{ $p['role'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Divisi -->
        <div class="grid md:grid-cols-4 gap-4">
            @php
            $divisi = [
                ['initial' => 'E', 'name' => 'Eko Prasetyo', 'role' => 'Div. Akademik', 'border' => 'gray'],
                ['initial' => 'F', 'name' => 'Fitri Handayani', 'role' => 'Div. Teknologi', 'border' => 'yellow'],
                ['initial' => 'G', 'name' => 'Galih Wicaksono', 'role' => 'Div. Humas', 'border' => 'gray'],
                ['initial' => 'H', 'name' => 'Hana Safitri', 'role' => 'Div. Kreatif', 'border' => 'yellow'],
            ];
            @endphp
            @foreach($divisi as $d)
            <div class="hover-lift bg-gradient-to-br from-gray-800/40 to-gray-900/40 border border-{{ $d['border'] }}-400/20 rounded-xl p-5 text-center backdrop-blur-sm">
                <div class="w-12 h-12 {{ $d['border'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} rounded-full flex items-center justify-center mx-auto mb-3">
                    <span class="text-black font-bold">{{ $d['initial'] }}</span>
                </div>
                <h3 class="font-semibold text-white text-sm">{{ $d['name'] }}</h3>
                <p class="text-{{ $d['border'] }}-400 text-xs">{{ $d['role'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
