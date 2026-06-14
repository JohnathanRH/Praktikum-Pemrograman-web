<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Mahasiswa</title>
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
                    <a class="text-white px-3 py-2 rounded-md text-sm font-semibold border-b-2 border-white" href="{{ route('mahasiswa.show') }}">
                        Profil
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                
                <div class="bg-white shadow-xl rounded-2xl text-center overflow-hidden border border-gray-100">
                    <div class="bg-blue-600 py-6"></div>
                    
                    <div class="px-6 pb-8 pt-0 relative flex flex-col items-center">
                        
                        <div class="inline-flex items-center justify-center bg-gray-50 rounded-circle rounded-full shadow-md w-24 h-24 -mt-12 mb-4 border-4 border-white">
                            <span class="text-3xl text-blue-600 font-bold">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </span>
                        </div>

                        <h2 class="text-2xl font-bold text-gray-900 mb-1">
                            Hello, {{ auth()->user()->name }}!
                        </h2>
                        <p class="text-gray-500 text-sm mb-6">Selamat datang di dashboard Anda.</p>
                        
                        <div class="bg-gray-50 rounded-xl p-4 w-full border border-gray-100">
                            <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">
                                Nomor Induk Mahasiswa
                            </span>
                            <span class="text-lg font-mono font-semibold text-gray-800">
                                {{ auth()->user()->nim }}
                            </span>
                        </div>

                    </div>
                </div> </div>
        </div>
    </div>

</body>
</html>