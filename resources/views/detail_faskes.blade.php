<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kesehatan - Nglorog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: radial-gradient(at 0% 0%, rgba(56, 189, 248, 0.15) 0px, transparent 50%), 
                        radial-gradient(at 100% 0%, rgba(30, 64, 175, 0.1) 0px, transparent 50%), 
                        radial-gradient(at 100% 100%, rgba(186, 230, 253, 0.2) 0px, transparent 50%), 
                        radial-gradient(at 0% 100%, rgba(56, 189, 248, 0.1) 0px, transparent 50%),
                        #f0f9ff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="p-6 md:p-12 font-sans">

    <div class="max-w-6xl mx-auto flex-grow">
        <a href="/" class="group inline-flex items-center text-blue-700 font-bold mb-8 transition-all hover:translate-x-[-5px]">
            <i class="fas fa-arrow-left mr-2 bg-blue-600 text-white p-2 rounded-full text-xs shadow-lg"></i> 
            Kembali ke Beranda
        </a>

        <div class="mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-slate-800 tracking-tight italic">PUSAT <span class="text-blue-600 uppercase">KESEHATAN</span></h1>
            <p class="text-slate-500 mt-2 text-lg">Informasi 4 fasilitas kesehatan utama di wilayah Nglorog.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            
            <div class="glass-card rounded-[2.5rem] p-8 shadow-xl shadow-blue-100 hover:shadow-blue-200 transition-all duration-300 relative overflow-hidden group">
                <div class="flex items-start justify-between mb-8 relative z-10">
                    <div class="bg-blue-700 text-white w-14 h-14 rounded-2xl flex items-center justify-center text-xl shadow-lg">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <span class="bg-blue-100 text-blue-700 text-[10px] font-black px-4 py-1 rounded-full uppercase tracking-widest">Negeri</span>
                </div>
                <h2 class="text-2xl font-black text-slate-800 mb-2 italic uppercase">RSUD dr. Soehadi P.</h2>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed italic">Rumah sakit rujukan utama dengan fasilitas IGD 24 jam dan dokter spesialis lengkap.</p>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-white/50 rounded-2xl border border-white">
                        <i class="fas fa-clock w-8 text-blue-700"></i>
                        <p class="text-xs font-bold text-slate-700">Layanan IGD 24 Jam</p>
                    </div>
                    <a href="https://www.google.com/maps/search/RSUD+dr.+Soehadi+Prijonegoro+Sragen" target="_blank" class="flex items-center p-3 bg-blue-600 text-white rounded-2xl border border-blue-700 hover:bg-blue-700 transition-colors shadow-md group/btn">
                        <i class="fas fa-map-marker-alt w-8 group-hover/btn:animate-bounce"></i>
                        <p class="text-xs font-bold">Klik Lihat Lokasi (Maps)</p>
                    </a>
                </div>
            </div>

            <div class="glass-card rounded-[2.5rem] p-8 shadow-xl shadow-blue-100 hover:shadow-blue-200 transition-all duration-300 relative overflow-hidden group">
                <div class="flex items-start justify-between mb-8 relative z-10">
                    <div class="bg-cyan-600 text-white w-14 h-14 rounded-2xl flex items-center justify-center text-xl shadow-lg">
                        <i class="fas fa-hospital-alt"></i>
                    </div>
                    <span class="bg-cyan-100 text-cyan-700 text-[10px] font-black px-4 py-1 rounded-full uppercase tracking-widest">Swasta</span>
                </div>
                <h2 class="text-2xl font-black text-slate-800 mb-2 italic uppercase">RSU Sakina Idaman</h2>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed italic">Layanan rumah sakit umum swasta dengan pelayanan rawat inap modern.</p>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-white/50 rounded-2xl border border-white">
                        <i class="fas fa-clock w-8 text-cyan-600"></i>
                        <p class="text-xs font-bold text-slate-700">Layanan IGD & Poliklinik</p>
                    </div>
                    <a href="https://www.google.com/maps/search/RSU+Sakina+Idaman+Sragen" target="_blank" class="flex items-center p-3 bg-cyan-600 text-white rounded-2xl border border-cyan-700 hover:bg-cyan-700 transition-colors shadow-md group/btn">
                        <i class="fas fa-map-marker-alt w-8 group-hover/btn:animate-bounce"></i>
                        <p class="text-xs font-bold">Klik Lihat Lokasi (Maps)</p>
                    </a>
                </div>
            </div>

            <div class="glass-card rounded-[2.5rem] p-8 shadow-xl shadow-blue-100 hover:shadow-blue-200 transition-all duration-300 relative overflow-hidden group">
                <div class="flex items-start justify-between mb-8 relative z-10">
                    <div class="bg-blue-500 text-white w-14 h-14 rounded-2xl flex items-center justify-center text-xl shadow-lg">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <span class="bg-blue-100 text-blue-700 text-[10px] font-black px-4 py-1 rounded-full uppercase tracking-widest">Kelurahan</span>
                </div>
                <h2 class="text-2xl font-black text-slate-800 mb-2 italic uppercase">Puskesmas Pembantu</h2>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed italic">Layanan kesehatan dasar terdekat untuk warga Nglorog.</p>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-white/50 rounded-2xl border border-white">
                        <i class="fas fa-clock w-8 text-blue-500"></i>
                        <p class="text-xs font-bold text-slate-700">Senin-Sabtu: 07:30 - 12:00</p>
                    </div>
                    <a href="https://www.google.com/maps/search/Puskesmas+Pembantu+Nglorog+Sragen" target="_blank" class="flex items-center p-3 bg-blue-500 text-white rounded-2xl border border-blue-600 hover:bg-blue-600 transition-colors shadow-md group/btn">
                        <i class="fas fa-map-marker-alt w-8 group-hover/btn:animate-bounce"></i>
                        <p class="text-xs font-bold">Klik Lihat Lokasi (Maps)</p>
                    </a>
                </div>
            </div>

            <div class="glass-card rounded-[2.5rem] p-8 shadow-xl shadow-blue-100 hover:shadow-blue-200 transition-all duration-300 relative overflow-hidden group">
                <div class="flex items-start justify-between mb-8 relative z-10">
                    <div class="bg-slate-500 text-white w-14 h-14 rounded-2xl flex items-center justify-center text-xl shadow-lg">
                        <i class="fas fa-clinic-medical"></i>
                    </div>
                    <span class="bg-slate-100 text-slate-600 text-[10px] font-black px-4 py-1 rounded-full uppercase tracking-widest">Klinik</span>
                </div>
                <h2 class="text-2xl font-black text-slate-800 mb-2 italic uppercase">Klinik Sukowati</h2>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed italic">Pelayanan dokter umum dan apotek siaga 24 jam.</p>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-white/50 rounded-2xl border border-white">
                        <i class="fas fa-clock w-8 text-slate-500"></i>
                        <p class="text-xs font-bold text-slate-700">Buka Siaga 24 Jam</p>
                    </div>
                    <a href="https://www.google.com/maps/search/Klinik+Sukowati+Sragen" target="_blank" class="flex items-center p-3 bg-slate-600 text-white rounded-2xl border border-slate-700 hover:bg-slate-700 transition-colors shadow-md group/btn">
                        <i class="fas fa-map-marker-alt w-8 group-hover/btn:animate-bounce"></i>
                        <p class="text-xs font-bold">Klik Lihat Lokasi (Maps)</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full text-center py-10">
        <div class="inline-flex items-center gap-3 bg-white/40 backdrop-blur-md px-6 py-3 rounded-full border border-white/60 shadow-sm">
            <div class="bg-blue-600 text-white p-2 rounded-full text-[10px]">
                <i class="fas fa-ambulance"></i>
            </div>
            <p class="text-xs text-slate-600 font-bold italic">
                Sistem Informasi Kesehatan Kelurahan Nglorog • Update 2026
            </p>
        </div>
    </div>

</body>
</html>