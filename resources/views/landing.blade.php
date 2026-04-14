<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Nglorog - Sragen</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), 
                        url('{{ asset('img/alunalun.jpg') }}');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-md py-4 px-6 md:px-12 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white font-bold">N</div>
            <span class="text-xl font-extrabold tracking-tighter text-green-800">NGLOROG</span>
        </div>
        <a href="https://sragenkab.go.id/" target="_blank" class="bg-green-600 text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-green-700 transition shadow-lg shadow-green-200">Portal Kabupaten</a>
    </nav>

    <header id="home" class="hero-section h-screen flex items-center justify-center text-center text-white px-4">
        <div data-aos="fade-up" data-aos-duration="1200">
            <h2 class="text-yellow-400 font-semibold tracking-[0.3em] uppercase mb-4 text-sm">Kabupaten Sragen, Jawa Tengah</h2>
            <h1 class="text-5xl md:text-8xl font-black mb-6 leading-tight">Kelurahan <br><span class="text-green-400">Nglorog</span></h1>
            <p class="max-w-xl mx-auto text-gray-300 text-lg mb-8">Gerbang Informasi Digital Kelurahan Nglorog. Melayani dengan sepenuh hati demi masyarakat yang sejahtera.</p>
            <div class="flex justify-center space-x-4">
                <a href="#statistik" class="bg-white text-green-800 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">Lihat Data</a>
                <a href="#lokasi" class="border border-white/50 px-8 py-3 rounded-full font-bold hover:bg-white/10 transition">Peta Wilayah</a>
            </div>
        </div>
    </header>

    <section id="statistik" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h3 class="text-green-600 font-bold text-sm uppercase tracking-widest mb-2">Statistik Kelurahan</h3>
            <h2 class="text-4xl font-black text-gray-800">Nglorog Dalam Angka</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
            <a href="/penduduk" class="group bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border border-gray-100 text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-4xl font-black text-green-600 mb-2 group-hover:scale-110 transition">10.500+</div>
                <div class="text-gray-500 font-medium">Data Penduduk</div>
                <p class="text-xs text-blue-500 mt-4 italic">Klik untuk rincian →</p>
            </a>

            <a href="/wilayah" class="group bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border border-gray-100 text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-4xl font-black text-orange-500 mb-2 group-hover:scale-110 transition">42 / 12</div>
                <div class="text-gray-500 font-medium">RT / RW</div>
                <p class="text-xs text-blue-500 mt-4 italic">Klik untuk rincian →</p>
            </a>

            <a href="/faskes" class="group bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border border-gray-100 text-center" data-aos="zoom-in" data-aos-delay="300">
                <div class="text-4xl font-black text-blue-600 mb-2 group-hover:scale-110 transition">04</div>
                <div class="text-gray-500 font-medium">Fasilitas Kesehatan</div>
                <p class="text-xs text-blue-500 mt-4 italic">Klik untuk rincian →</p>
            </a>

        </div>
    </section>

<div class="w-full bg-[#1a4731] relative overflow-hidden flex flex-col md:flex-row items-stretch min-h-[500px] border-t border-b border-green-900">
    
    <div class="md:w-1/2 p-8 md:p-20 relative z-20 flex flex-col justify-center bg-[#1a4731]">
        <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight italic uppercase mb-4">
            Pusat <span class="text-yellow-400">Pendidikan</span>
        </h2>
        <p class="text-green-100/70 mb-10 text-lg italic leading-relaxed max-w-xl">
            Kelurahan Nglorog memiliki fasilitas pendidikan yang sangat memadai untuk menunjang masa depan putra-putri daerah.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="/pendidikan/tk" class="group/btn flex items-center gap-4 p-5 bg-white/5 backdrop-blur-md rounded-[2rem] border border-white/10 hover:bg-white transition-all duration-300 shadow-lg">
                <div class="bg-yellow-500 text-[#1a4731] w-12 h-12 rounded-xl flex items-center justify-center shadow-lg group-hover/btn:rotate-12 transition-transform">
                    <i class="fas fa-child text-xl"></i>
                </div>
                <div>
                    <p class="text-white group-hover/btn:text-[#1a4731] font-black italic uppercase text-xs leading-none mb-1">Taman Kanak-Kanak</p>
                    <p class="text-green-200 group-hover/btn:text-green-700 text-[10px] font-bold">2 TK/PAUD Aktif</p>
                </div>
            </a>

            <a href="/pendidikan/sd" class="group/btn flex items-center gap-4 p-5 bg-white/5 backdrop-blur-md rounded-[2rem] border border-white/10 hover:bg-white transition-all duration-300 shadow-lg">
                <div class="bg-yellow-500 text-[#1a4731] w-12 h-12 rounded-xl flex items-center justify-center shadow-lg group-hover/btn:rotate-12 transition-transform">
                    <i class="fas fa-school text-xl"></i>
                </div>
                <div>
                    <p class="text-white group-hover/btn:text-[#1a4731] font-black italic uppercase text-xs leading-none mb-1">Sekolah Dasar</p>
                    <p class="text-green-200 group-hover/btn:text-green-700 text-[10px] font-bold">4 SD Negeri Berkualitas</p>
                </div>
            </a>

            <a href="/pendidikan/menengah" class="group/btn flex items-center gap-4 p-5 bg-white/5 backdrop-blur-md rounded-[2rem] border border-white/10 hover:bg-white transition-all duration-300 shadow-lg">
                <div class="bg-yellow-500 text-[#1a4731] w-12 h-12 rounded-xl flex items-center justify-center shadow-lg group-hover/btn:rotate-12 transition-transform">
                    <i class="fas fa-university text-xl"></i>
                </div>
                <div>
                    <p class="text-white group-hover/btn:text-[#1a4731] font-black italic uppercase text-xs leading-none mb-1">Sekolah Menengah</p>
                    <p class="text-green-200 group-hover/btn:text-green-700 text-[10px] font-bold">SMP / SMA / SMK</p>
                </div>
            </a>

            <div class="flex items-center gap-4 p-5 bg-black/20 rounded-[2rem] border border-white/5 italic text-green-200/40 text-[10px] leading-tight">
                <i class="fas fa-info-circle text-xl"></i>
                Pilih jenjang untuk info detail.
            </div>
        </div>
    </div>

    <div class="md:w-1/2 relative min-h-[300px] overflow-hidden group">
        <img src="{{ asset('img/school.avif') }}" 
             alt="Sekolah Nglorog" 
             class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 z-0">
        
        <div class="absolute inset-0 bg-gradient-to-r from-[#1a4731] via-[#1a4731]/40 to-transparent z-10"></div>
    </div>
</div>

    <section id="lokasi" class="py-24 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-black">Lokasi Wilayah</h2>
                <p class="text-gray-500 mt-2">Kunjungi kantor kelurahan kami pada jam kerja.</p>
            </div>
            <div class="rounded-3xl overflow-hidden shadow-2xl h-[450px] border-8 border-gray-50" data-aos="zoom-in">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.238612711142!2d111.02640244799002!3d-7.45863969190776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0528e6783963%3A0x5027a76e3568970!2sNglorog%2C%20Kec.%20Sragen%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

<footer class="bg-[#1e293b] text-white py-12"> <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-black italic tracking-tighter uppercase leading-none">
                    KELURAHAN <span class="text-yellow-400">NGLOROG</span>
                </h2>
                <p class="text-slate-400 text-[10px] mt-2 font-bold uppercase tracking-[0.3em] italic">
                    Kabupaten Sragen • Jawa Tengah
                </p>
            </div>

            <div class="text-center md:text-right">
                <p class="text-slate-500 text-[9px] font-bold uppercase tracking-widest leading-relaxed">
                    © 2026 Pemerintah Kelurahan Nglorog.<br>
                    All Rights Reserved.
                </p>
            </div>

        </div>

        <div class="h-px w-full bg-slate-700 mt-10 mb-6"></div>
        
        <div class="text-center">
            <p class="text-[8px] text-slate-600 font-black uppercase tracking-[0.5em] italic">
                Inovasi Pendidikan • Sinergi Masyarakat • Nglorog Maju
            </p>
        </div>
    </div>
</footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 200,
        });
    </script>
</body>
</html>