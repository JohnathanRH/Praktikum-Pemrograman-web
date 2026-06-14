<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Profile Mahasiswa</title>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <nav class="bg-blue-600 shadow-sm mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a class="text-white text-xl font-bold tracking-tight" href="#">Portal Mahasiswa</a>
                </div>
                
                <div class="flex space-x-4">
                    <a class="text-white px-3 py-2 rounded-md text-sm font-semibold border-b-2 border-white" href="{{ url('/home') }}">
                        Beranda
                    </a>
                    <a class="text-blue-100 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors" href="#">
                        Profil
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <div class="md:col-span-1">
                <div class="text-center md:text-left">
                    <div class="inline-flex mb-4 w-36 h-36 overflow-hidden rounded-full border-4 border-white shadow-md bg-gray-200">
                        @if(auth()->user()->profile_pic)
                            <img src="{{ asset('storage/images/' . auth()->user()->profile_pic) }}" 
                                 alt="Profile Picture" 
                                 class="w-100 h-100 w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-blue-100 text-blue-600 font-bold text-4xl">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                        @endif
                    </div>
                    
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ auth()->user()->name }}</h2>
                    
                    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 text-left space-y-3">
                        <div>
                            <strong class="text-xs font-bold text-gray-400 uppercase tracking-wider block">NIM</strong>
                            <span class="text-gray-700 font-mono">{{ auth()->user()->nim }}</span>
                        </div>
                        <div>
                            <strong class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Asal Prodi</strong>
                            <span class="text-gray-700">{{ auth()->user()->asal_prodi }}</span>
                        </div>
                        <div>
                            <strong class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Hobi</strong>
                            <span class="text-gray-700">{{ auth()->user()->hobi }}</span>
                        </div>
                        <div>
                            <strong class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Skill</strong>
                            <span class="text-gray-700">{{ auth()->user()->skill }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-3">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Pengalaman Detail</h3>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach(auth()->user()->pengalamans as $pengalaman)
                        <div class="group relative bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 overflow-hidden flex flex-col justify-between h-full">
                            <div>
                                <img src="{{ asset('storage/images/' . $pengalaman->gambar) }}" 
                                     class="w-full h-40 object-cover" 
                                     alt="Thumbnail Pengalaman">
                                
                                <div class="p-5">
                                    <h5 class="text-base font-semibold text-gray-800 line-clamp-2 mb-3">
                                        {{ $pengalaman->judul }}
                                    </h5>
                                </div>
                            </div>

                            <div class="px-5 pb-5">
                                <a href="{{ route('pengalaman.show', $pengalaman->id) }}"
                                   class="block text-center w-full bg-transparent hover:bg-blue-600 text-blue-600 hover:text-white border border-blue-600 font-medium py-2 px-4 rounded-xl text-sm transition-colors after:absolute after:inset-0">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</body>
</html>