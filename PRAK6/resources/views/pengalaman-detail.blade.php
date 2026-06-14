<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Detail Pengalaman</title>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <nav class="bg-blue-600 shadow-sm mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a class="text-white text-xl font-bold tracking-tight" href="#">Portal Mahasiswa</a>
                </div>
                
                <div class="flex space-x-4">
                    <a class="text-blue-100 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors" href="{{ url('/home') }}">
                        Beranda
                    </a>
                    <a class="text-blue-100 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors" href="{{ route('mahasiswa.show') }}">
                        Profil
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 items-start">
            
            <div class="md:col-span-1">
                <div class="text-center md:text-left">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ $pengalaman->judul }}</h2>
                    
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-left space-y-4">
                        <div>
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-wider block mb-1">
                                Waktu Pelaksanaan
                            </label>
                            <span class="text-gray-800 font-semibold">{{ $pengalaman->waktu }}</span>
                        </div>
                        
                        <div class="border-t border-gray-100 my-4"></div>
                        
                        <div>
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-wider block mb-1">
                                Deskripsi
                            </label>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                {{ $pengalaman->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-3">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Dokumentasi Kegiatan</h4>
                
                <div class="shadow-md border border-gray-100 rounded-2xl overflow-hidden bg-white p-2">
                    <img src="{{ asset('storage/images/' . $pengalaman->gambar) }}" 
                         alt="{{ $pengalaman->judul }}" 
                         class="w-full h-auto rounded-xl object-cover object-center max-h-[550px]">
                </div>
            </div>

        </div>
    </div>

</body>
</html>