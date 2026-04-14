<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penduduk - Nglorog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen p-6 md:p-12 font-sans text-slate-800" 
      style="background: radial-gradient(at 0% 0%, rgba(34, 197, 94, 0.15) 0px, transparent 50%), 
                  radial-gradient(at 100% 0%, rgba(59, 130, 246, 0.15) 0px, transparent 50%), 
                  radial-gradient(at 100% 100%, rgba(234, 179, 8, 0.1) 0px, transparent 50%), 
                  radial-gradient(at 0% 100%, rgba(34, 197, 94, 0.1) 0px, transparent 50%),
                  #f8fafc;"></body>
    
    <div class="max-w-5xl mx-auto">
        <a href="/" class="group inline-flex items-center text-green-700 font-bold mb-10 transition-all hover:translate-x-[-5px]">
            <i class="fas fa-arrow-left mr-2 bg-green-700 text-white p-2 rounded-full text-xs group-hover:shadow-lg"></i> 
            Kembali ke Beranda
        </a>

        <div class="mb-12 text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-black text-slate-800 tracking-tight">Data Demografi <span class="text-green-600">Nglorog</span></h1>
            <p class="text-slate-500 mt-3 text-lg">Analisis rincian populasi berdasarkan jenis kelamin dan kategori usia.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="md:col-span-2 bg-white/70 backdrop-blur-xl border border-white rounded-[2rem] shadow-2xl p-8 transition hover:shadow-green-100">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-xl font-bold text-slate-700 flex items-center">
                        <i class="fas fa-venus-mars mr-3 text-green-600"></i> Distribusi Gender
                    </h3>
                    <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full uppercase">Update 2024</span>
                </div>

                <div class="space-y-8">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold text-slate-600">Laki-laki</span>
                            <span class="font-black text-slate-800">5.100 <span class="text-xs font-normal text-slate-400">(48.5%)</span></span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-4 overflow-hidden">
                            <div class="bg-blue-500 h-full rounded-full transition-all duration-1000" style="width: 48.5%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold text-slate-600">Perempuan</span>
                            <span class="font-black text-slate-800">5.400 <span class="text-xs font-normal text-slate-400">(51.5%)</span></span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-4 overflow-hidden">
                            <div class="bg-pink-500 h-full rounded-full transition-all duration-1000" style="width: 51.5%"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded-2xl text-center border border-blue-100">
                        <p class="text-xs text-blue-600 font-bold uppercase">Total Laki-laki</p>
                        <p class="text-2xl font-black text-blue-900">5.100</p>
                    </div>
                    <div class="bg-pink-50 p-4 rounded-2xl text-center border border-pink-100">
                        <p class="text-xs text-pink-600 font-bold uppercase">Total Perempuan</p>
                        <p class="text-2xl font-black text-pink-900">5.400</p>
                    </div>
                </div>
            </div>

            <div class="bg-slate-900 rounded-[2rem] p-8 text-white shadow-2xl relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-green-500/20 rounded-full blur-3xl"></div>
                
                <h3 class="text-xl font-bold mb-8 flex items-center">
                    <i class="fas fa-chart-pie mr-3 text-green-400"></i> Kelompok Usia
                </h3>

                <div class="space-y-6 relative z-10">
                    <div class="flex items-center">
                        <div class="w-2 h-10 bg-yellow-400 rounded-full mr-4"></div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">Anak (0-15)</p>
                            <p class="text-2xl font-black">2.300 <span class="text-sm font-light text-slate-400 italic">Jiwa</span></p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-2 h-10 bg-green-500 rounded-full mr-4"></div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">Produktif (16-55)</p>
                            <p class="text-2xl font-black">6.100 <span class="text-sm font-light text-slate-400 italic">Jiwa</span></p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-2 h-10 bg-red-400 rounded-full mr-4"></div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">Lansia (56+)</p>
                            <p class="text-2xl font-black">2.100 <span class="text-sm font-light text-slate-400 italic">Jiwa</span></p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-6 border-t border-white/10 text-center">
                    <p class="text-xs text-slate-400 italic">Persentase Penduduk Produktif mencapai 58% dari total populasi Nglorog.</p>
                </div>
            </div>

        </div>

        <div class="mt-12 bg-white/50 border border-white p-6 rounded-2xl text-center text-slate-400 text-xs">
            <p><i class="fas fa-info-circle mr-1"></i> Sumber data: Sistem Informasi Administrasi Kependudukan (SIAK) Kelurahan Nglorog.</p>
        </div>
    </div>

</body>
</html>