@extends('layouts.main')

@section('title', 'Kontak - Kabinet Ciptakara HIMTI')

@section('content')

<!-- PAGE HEADER -->
<section class="relative py-32 px-6 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black"></div>
    <div class="absolute bottom-0 left-1/3 w-96 h-96 bg-yellow-500/10 rounded-full blur-3xl"></div>
    <div class="absolute top-0 right-1/3 w-80 h-80 bg-gray-400/10 rounded-full blur-3xl"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,215,0,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255,215,0,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <p class="text-yellow-400 text-sm tracking-widest uppercase mb-4">Hubungi Kami</p>
        <h1 class="text-5xl md:text-7xl font-bold font-serif mb-6">
            <span class="text-gradient-gold">Kontak</span> <span class="text-white">& Daftar</span>
        </h1>
        <p class="text-gray-400 text-xl max-w-2xl mx-auto">
            Punya pertanyaan atau ingin bergabung? Kami siap membantu dan menyambut kamu di HIMTI.
        </p>
    </div>
</section>

<!-- CONTACT CONTENT -->
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16">

            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-bold font-serif mb-8">
                    <span class="text-white">Informasi</span> <span class="text-gradient-gold">Kontak</span>
                </h2>

                <div class="space-y-6 mb-10">
                    @php
                    $contacts = [
                        ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Email', 'value' => 'himti@university.ac.id', 'color' => 'yellow'],
                        ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Telepon', 'value' => '+62 812-3456-7890', 'color' => 'gray'],
                        ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Alamat', 'value' => 'Gedung Informatika Lt.3, Universitas Teknologi', 'color' => 'yellow'],
                        ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Jam Operasional', 'value' => 'Senin - Jumat, 09:00 - 17:00 WIB', 'color' => 'gray'],
                    ];
                    @endphp

                    @foreach($contacts as $c)
                    <div class="flex items-start space-x-4 p-5 bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-{{ $c['color'] }}-400/20 rounded-2xl backdrop-blur-sm hover:border-{{ $c['color'] }}-400/40 transition">
                        <div class="w-12 h-12 {{ $c['color'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $c['icon'] }}"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-{{ $c['color'] }}-400 text-sm font-medium mb-1">{{ $c['label'] }}</p>
                            <p class="text-white">{{ $c['value'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Social Media -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        @php
                        $socials = [
                            ['name' => 'Instagram', 'handle' => '@himti_official', 'color' => 'yellow', 'initial' => 'IG'],
                            ['name' => 'Twitter', 'handle' => '@himti_tech', 'color' => 'gray', 'initial' => 'TW'],
                            ['name' => 'LinkedIn', 'handle' => 'HIMTI Official', 'color' => 'yellow', 'initial' => 'LI'],
                            ['name' => 'YouTube', 'handle' => 'HIMTI Channel', 'color' => 'gray', 'initial' => 'YT'],
                        ];
                        @endphp
                        @foreach($socials as $s)
                        <a href="#" class="group flex flex-col items-center">
                            <div class="w-12 h-12 {{ $s['color'] === 'yellow' ? 'gradient-gold' : 'gradient-silver' }} rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition">
                                <span class="text-black font-bold text-sm">{{ $s['initial'] }}</span>
                            </div>
                            <span class="text-gray-400 text-xs">{{ $s['name'] }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Registration Form -->
            <div>
                <div class="bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-yellow-400/20 rounded-3xl p-8 backdrop-blur-sm">
                    <!-- Tabs -->
                    <div class="flex bg-black/40 rounded-2xl p-1 mb-8">
                        <button onclick="switchTab('daftar')" id="tab-daftar"
                            class="flex-1 py-3 rounded-xl text-sm font-semibold transition gradient-gold text-black">
                            Pendaftaran
                        </button>
                        <button onclick="switchTab('aspirasi')" id="tab-aspirasi"
                            class="flex-1 py-3 rounded-xl text-sm font-semibold transition text-gray-400 hover:text-white">
                            Aspirasi
                        </button>
                    </div>

                    <!-- Daftar Form -->
                    <form id="form-daftar" onsubmit="submitForm(event, 'daftar')">
                        <h3 class="text-xl font-bold text-white mb-6 font-serif">Formulir Pendaftaran</h3>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-yellow-400 text-sm font-medium mb-2">Nama Lengkap *</label>
                                <input type="text" name="nama" required
                                    class="w-full bg-black/40 border border-gray-600 focus:border-yellow-400 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition"
                                    placeholder="Masukkan nama lengkap">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-yellow-400 text-sm font-medium mb-2">NIM *</label>
                                    <input type="text" name="nim" required
                                        class="w-full bg-black/40 border border-gray-600 focus:border-yellow-400 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition"
                                        placeholder="NIM kamu">
                                </div>
                                <div>
                                    <label class="block text-yellow-400 text-sm font-medium mb-2">Angkatan *</label>
                                    <select name="angkatan" required
                                        class="w-full bg-black/40 border border-gray-600 focus:border-yellow-400 rounded-xl px-4 py-3 text-white outline-none transition">
                                        <option value="" class="bg-gray-800">Pilih</option>
                                        <option value="2024" class="bg-gray-800">2024</option>
                                        <option value="2025" class="bg-gray-800">2025</option>
                                        <option value="2026" class="bg-gray-800">2026</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-yellow-400 text-sm font-medium mb-2">Email *</label>
                                <input type="email" name="email" required
                                    class="w-full bg-black/40 border border-gray-600 focus:border-yellow-400 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition"
                                    placeholder="email@university.ac.id">
                            </div>

                            <div>
                                <label class="block text-yellow-400 text-sm font-medium mb-2">Divisi yang Diminati *</label>
                                <select name="divisi" required
                                    class="w-full bg-black/40 border border-gray-600 focus:border-yellow-400 rounded-xl px-4 py-3 text-white outline-none transition">
                                    <option value="" class="bg-gray-800">Pilih Divisi</option>
                                    <option value="akademik" class="bg-gray-800">Divisi Akademik</option>
                                    <option value="teknologi" class="bg-gray-800">Divisi Teknologi</option>
                                    <option value="humas" class="bg-gray-800">Divisi Humas</option>
                                    <option value="kreatif" class="bg-gray-800">Divisi Kreatif</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-yellow-400 text-sm font-medium mb-2">Motivasi Bergabung *</label>
                                <textarea name="motivasi" required rows="3"
                                    class="w-full bg-black/40 border border-gray-600 focus:border-yellow-400 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition resize-none"
                                    placeholder="Ceritakan motivasimu bergabung dengan HIMTI..."></textarea>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full gradient-gold text-black py-4 rounded-xl font-bold text-lg hover:scale-[1.02] transition mt-6 shadow-lg shadow-yellow-500/20">
                            Daftar Sekarang ✨
                        </button>

                        <div id="msg-daftar" class="mt-4 text-center font-medium hidden"></div>
                    </form>

                    <!-- Aspirasi Form -->
                    <form id="form-aspirasi" class="hidden" onsubmit="submitForm(event, 'aspirasi')">
                        <h3 class="text-xl font-bold text-white mb-6 font-serif">Kirim Aspirasi</h3>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-400 text-sm font-medium mb-2">Nama (Opsional)</label>
                                <input type="text" name="nama"
                                    class="w-full bg-black/40 border border-gray-600 focus:border-gray-400 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition"
                                    placeholder="Nama kamu (boleh anonim)">
                            </div>

                            <div>
                                <label class="block text-gray-400 text-sm font-medium mb-2">Kategori *</label>
                                <select name="kategori" required
                                    class="w-full bg-black/40 border border-gray-600 focus:border-gray-400 rounded-xl px-4 py-3 text-white outline-none transition">
                                    <option value="" class="bg-gray-800">Pilih Kategori</option>
                                    <option value="akademik" class="bg-gray-800">Akademik</option>
                                    <option value="fasilitas" class="bg-gray-800">Fasilitas</option>
                                    <option value="kegiatan" class="bg-gray-800">Kegiatan</option>
                                    <option value="lainnya" class="bg-gray-800">Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-400 text-sm font-medium mb-2">Isi Aspirasi *</label>
                                <textarea name="aspirasi" required rows="5"
                                    class="w-full bg-black/40 border border-gray-600 focus:border-gray-400 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition resize-none"
                                    placeholder="Sampaikan aspirasi, saran, atau masukan kamu untuk HIMTI..."></textarea>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full gradient-silver text-black py-4 rounded-xl font-bold text-lg hover:scale-[1.02] transition mt-6 shadow-lg">
                            Kirim Aspirasi 💬
                        </button>

                        <div id="msg-aspirasi" class="mt-4 text-center font-medium hidden"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="py-20 px-6 bg-black/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold font-serif">
                <span class="text-white">Lokasi</span> <span class="text-gradient-gold">Kami</span>
            </h2>
        </div>
        <div class="bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-yellow-400/20 rounded-3xl overflow-hidden h-64 flex items-center justify-center backdrop-blur-sm">
            <div class="text-center">
                <div class="text-6xl mb-4">📍</div>
                <p class="text-white font-semibold">Gedung Informatika Lt.3</p>
                <p class="text-gray-400 text-sm">Universitas Teknologi, Jl. Pendidikan No.1</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="py-20 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-yellow-400 text-sm tracking-widest uppercase mb-3">Pertanyaan Umum</p>
            <h2 class="text-4xl font-bold font-serif">
                <span class="text-white">FAQ</span>
            </h2>
        </div>

        <div class="space-y-4" id="faq-container">
            @php
            $faqs = [
                ['q' => 'Siapa saja yang bisa bergabung dengan HIMTI?', 'a' => 'Semua mahasiswa aktif program studi Informatika dari semua angkatan dapat bergabung dengan HIMTI.'],
                ['q' => 'Apakah ada biaya pendaftaran?', 'a' => 'Tidak ada biaya pendaftaran. Bergabung dengan HIMTI sepenuhnya gratis untuk semua mahasiswa Informatika.'],
                ['q' => 'Apa manfaat bergabung dengan HIMTI?', 'a' => 'Kamu akan mendapatkan akses ke berbagai workshop, seminar, kompetisi, jaringan alumni, dan pengembangan soft skill yang tidak didapat di kelas.'],
                ['q' => 'Bagaimana cara mendaftar?', 'a' => 'Isi formulir pendaftaran di halaman ini atau datang langsung ke sekretariat HIMTI di Gedung Informatika Lt.3.'],
                ['q' => 'Kapan periode pendaftaran dibuka?', 'a' => 'Pendaftaran anggota baru dibuka setiap awal semester. Pantau media sosial kami untuk informasi terbaru.'],
            ];
            @endphp

            @foreach($faqs as $i => $faq)
            <div class="bg-gradient-to-br from-gray-800/60 to-gray-900/60 border border-gray-700/50 rounded-2xl overflow-hidden backdrop-blur-sm">
                <button onclick="toggleFaq({{ $i }})"
                    class="w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition">
                    <span class="font-semibold text-white pr-4">{{ $faq['q'] }}</span>
                    <div id="faq-icon-{{ $i }}" class="w-8 h-8 gradient-gold rounded-full flex items-center justify-center flex-shrink-0 transition-transform">
                        <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div id="faq-answer-{{ $i }}" class="hidden px-6 pb-6">
                    <p class="text-gray-400 leading-relaxed">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
function switchTab(tab) {
    const formDaftar = document.getElementById('form-daftar');
    const formAspirasi = document.getElementById('form-aspirasi');
    const tabDaftar = document.getElementById('tab-daftar');
    const tabAspirasi = document.getElementById('tab-aspirasi');

    if (tab === 'daftar') {
        formDaftar.classList.remove('hidden');
        formAspirasi.classList.add('hidden');
        tabDaftar.className = 'flex-1 py-3 rounded-xl text-sm font-semibold transition gradient-gold text-black';
        tabAspirasi.className = 'flex-1 py-3 rounded-xl text-sm font-semibold transition text-gray-400 hover:text-white';
    } else {
        formDaftar.classList.add('hidden');
        formAspirasi.classList.remove('hidden');
        tabAspirasi.className = 'flex-1 py-3 rounded-xl text-sm font-semibold transition gradient-silver text-black';
        tabDaftar.className = 'flex-1 py-3 rounded-xl text-sm font-semibold transition text-gray-400 hover:text-white';
    }
}

function submitForm(e, type) {
    e.preventDefault();
    const form = e.target;
    const msgEl = document.getElementById('msg-' + type);
    const inputs = form.querySelectorAll('[required]');
    let valid = true;

    inputs.forEach(input => {
        if (!input.value.trim()) {
            valid = false;
            input.classList.add('border-red-500');
            input.classList.remove('border-gray-600');
        } else {
            input.classList.remove('border-red-500');
            input.classList.add('border-gray-600');
        }
    });

    msgEl.classList.remove('hidden');
    if (!valid) {
        msgEl.innerHTML = '❌ Mohon lengkapi semua field yang wajib diisi.';
        msgEl.className = 'mt-4 text-center font-medium text-red-400';
    } else {
        msgEl.innerHTML = type === 'daftar'
            ? '✅ Pendaftaran berhasil dikirim! Kami akan menghubungi kamu segera.'
            : '✅ Aspirasi berhasil dikirim! Terima kasih atas masukannya.';
        msgEl.className = 'mt-4 text-center font-medium text-yellow-400';
        form.reset();
    }
}

function toggleFaq(index) {
    const answer = document.getElementById('faq-answer-' + index);
    const icon = document.getElementById('faq-icon-' + index);

    answer.classList.toggle('hidden');
    icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
}
</script>

@endsection
