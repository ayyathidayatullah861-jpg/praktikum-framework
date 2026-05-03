<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kabinet Ciptakara - HIMTI</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#020617] text-white font-sans scroll-smooth">

<!-- NAVBAR -->
<nav class="fixed w-full z-50 flex justify-between items-center px-10 py-5 bg-black/40 backdrop-blur-md border-b border-white/10">
  <h1 class="text-lg font-bold tracking-widest text-cyan-400">HIMTI</h1>
  <ul class="flex gap-8 text-sm">
    <li><a href="#home" class="hover:text-cyan-400">Home</a></li>
    <li><a href="#about" class="hover:text-cyan-400">Tentang</a></li>
    <li><a href="#program" class="hover:text-cyan-400">Program</a></li>
    <li><a href="#contact" class="hover:text-cyan-400">Kontak</a></li>
  </ul>
</nav>

<!-- HERO (LANDING FEEL) -->
<section id="home" class="relative h-screen flex items-center justify-center text-center px-6 overflow-hidden">

  <!-- Glow -->
  <div class="absolute w-[600px] h-[600px] bg-cyan-500/20 blur-[150px] rounded-full"></div>

  <!-- Grid -->
  <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 40px 40px;"></div>

  <div class="relative z-10 max-w-4xl">

    <p class="text-cyan-400 mb-3 tracking-widest text-sm">HIMPUNAN MAHASISWA INFORMATIKA</p>

    <h2 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6">
      Kabinet Ciptakara
    </h2>

    <p class="text-gray-300 text-lg mb-8">
      Mewadahi, Mengembangkan, dan Menginspirasi Mahasiswa di Bidang Teknologi
    </p>

    <div class="flex justify-center gap-4">
      <a href="#about" class="bg-cyan-400 text-black px-8 py-3 rounded-full font-semibold hover:scale-105 transition">
        Jelajahi
      </a>
      <a href="#program" class="border border-cyan-400 px-8 py-3 rounded-full hover:bg-cyan-400 hover:text-black transition">
        Lihat Program
      </a>
    </div>

  </div>
</section>

<!-- ABOUT -->
<section id="about" class="py-24 px-6 max-w-5xl mx-auto text-center">
  <h3 class="text-3xl font-bold mb-6">Tentang HIMTI</h3>
  <p class="text-gray-400 leading-relaxed">
    Himpunan Mahasiswa Informatika adalah organisasi yang menjadi wadah pengembangan mahasiswa dalam bidang teknologi, kreativitas, dan kepemimpinan melalui berbagai program kerja yang inovatif dan kolaboratif.
  </p>
</section>

<!-- VISI MISI -->
<section class="py-16 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-8">

  <div class="bg-white/5 backdrop-blur-xl border border-cyan-400/20 rounded-2xl p-8 hover:border-cyan-400 transition">
    <h3 class="text-2xl font-bold text-cyan-400 mb-4">Visi</h3>
    <p class="text-gray-300">
      Mewujudkan himpunan yang progresif, kolaboratif, dan berdampak melalui inovasi teknologi.
    </p>
  </div>

  <div class="bg-white/5 backdrop-blur-xl border border-cyan-400/20 rounded-2xl p-8 hover:border-cyan-400 transition">
    <h3 class="text-2xl font-bold text-cyan-400 mb-4">Misi</h3>
    <ul class="text-gray-300 space-y-2 list-disc list-inside">
      <li>Mendorong budaya inovasi mahasiswa</li>
      <li>Menyelenggarakan program berkualitas</li>
      <li>Membangun kolaborasi luas</li>
    </ul>
  </div>

</section>

<!-- PROGRAM -->
<section id="program" class="py-20 px-6">
  <h3 class="text-3xl font-bold text-center mb-16">Program Kerja</h3>

  <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">

    <div class="p-6 bg-white/5 rounded-xl border border-white/10 hover:border-cyan-400 hover:-translate-y-2 transition">
      <h4 class="text-xl font-semibold mb-2">Workshop</h4>
      <p class="text-gray-400 text-sm">Pelatihan skill teknologi mahasiswa</p>
    </div>

    <div class="p-6 bg-white/5 rounded-xl border border-white/10 hover:border-cyan-400 hover:-translate-y-2 transition">
      <h4 class="text-xl font-semibold mb-2">Seminar</h4>
      <p class="text-gray-400 text-sm">Sharing bersama praktisi IT</p>
    </div>

    <div class="p-6 bg-white/5 rounded-xl border border-white/10 hover:border-cyan-400 hover:-translate-y-2 transition">
      <h4 class="text-xl font-semibold mb-2">Kompetisi</h4>
      <p class="text-gray-400 text-sm">Ajang lomba teknologi mahasiswa</p>
    </div>

  </div>
</section>

<!-- CTA (INI YANG BIKIN LANDING PAGE BANGET) -->
<section class="py-24 text-center">
  <h3 class="text-3xl font-bold mb-4">Tertarik Bergabung?</h3>
  <p class="text-gray-400 mb-6">Jadilah bagian dari HIMTI dan berkembang bersama kami</p>
  <a href="#" class="bg-cyan-400 text-black px-10 py-3 rounded-full font-semibold hover:scale-105 transition">
    Gabung Sekarang
  </a>
</section>

<!-- FOOTER -->
<footer id="contact" class="text-center py-10 text-gray-500 border-t border-white/10">
  <p>© 2026 Himpunan Mahasiswa Informatika</p>
</footer>

</body>
</html>