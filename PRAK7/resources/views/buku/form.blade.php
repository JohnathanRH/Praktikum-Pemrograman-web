<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($buku) ? 'Edit Book - ' . $buku->judul : 'Create New Book' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <aside class="w-64 bg-slate-900 text-gray-200 flex flex-col justify-between hidden md:flex border-r border-slate-800">
            <div class="flex-1 flex flex-col">
                <div class="h-16 flex items-center justify-center bg-slate-950 font-bold text-xl tracking-wider text-white border-b border-slate-800/50">
                    <span>App Buku</span>
                </div>
                
                <div class="flex-1 flex flex-col items-center justify-center px-6 py-12 text-center bg-gradient-to-b from-slate-900 to-slate-950">
                    <div class="w-24 h-24 rounded-full bg-indigo-600 border-4 border-slate-800 flex items-center justify-center text-white text-3xl font-bold shadow-xl mb-4 uppercase tracking-wider">
                        {{ Str::initials(auth()->user()->name) }}
                    </div>
                    
                    <h2 class="text-lg font-bold text-white tracking-wide truncate max-w-full">
                        {{ auth()->user()->name }}
                    </h2>
                    <p class="text-xs text-indigo-400 font-medium tracking-widest uppercase mt-0.5">
                        Bukuuuu
                    </p>
                </div>
            </div>

            <div class="p-4 bg-slate-950 border-t border-slate-800">
                <form action="{{ route('login.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center justify-center w-full px-4 py-2.5 text-sm font-medium text-slate-400 bg-slate-900 hover:bg-red-950/40 hover:text-red-400 border border-slate-800 hover:border-red-900/50 rounded-xl transition duration-200 cursor-pointer">
                        Sign Out Account
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto">
            
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 sticky top-0 z-10">
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <a href="{{ route('dashboard') }}" class="hover:text-indigo-600 transition">Books</a>
                    <span>/</span>
                    <span class="text-gray-800 font-medium">{{ isset($buku) ? 'Edit' : 'Add New' }}</span>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600">Welcome back, <strong>{{ auth()->user()->name }}</strong></span>
                </div>
            </header>

            <main class="p-6 max-w-3xl mx-auto w-full space-y-6">
                
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">{{ isset($buku) ? 'Edit Book Detail' : 'Add New Book' }}</h2>
                        <a href="{{ route('dashboard') }}" class="text-sm font-medium text-gray-500 hover:text-gray-700 transition">
                            &larr; Back to List
                        </a>
                    </div>

                    <form action="{{ isset($buku) ? route('bukus.update', $buku->id) : route('bukus.store') }}" method="POST" class="p-6 space-y-5">
                        @csrf
                        
                        @if(isset($buku))
                            @method('PUT')
                        @endif

                        <div>
                            <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Buku (Title)</label>
                            <input type="text" name="judul" id="judul" 
                                value="{{ old('judul', $buku->judul ?? '') }}"
                                class="w-full px-4 py-2.5 border rounded-xl shadow-xs transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 @error('judul') border-red-300 bg-red-50/30 focus:ring-red-500/20 focus:border-red-500 @else border-gray-300 @enderror"
                                placeholder="e.g., The Great Gatsby" required>
                            @error('judul')
                                <p class="mt-1.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="penulis" class="block text-sm font-medium text-gray-700 mb-1">Penulis (Author)</label>
                                <input type="text" name="penulis" id="penulis" 
                                    value="{{ old('penulis', $buku->penulis ?? '') }}"
                                    class="w-full px-4 py-2.5 border rounded-xl shadow-xs transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 @error('penulis') border-red-300 bg-red-50/30 focus:ring-red-500/20 focus:border-red-500 @else border-gray-300 @enderror"
                                    placeholder="e.g., F. Scott Fitzgerald" required>
                                @error('penulis')
                                    <p class="mt-1.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="penerbit" class="block text-sm font-medium text-gray-700 mb-1">Penerbit (Publisher)</label>
                                <input type="text" name="penerbit" id="penerbit" 
                                    value="{{ old('penerbit', $buku->penerbit ?? '') }}"
                                    class="w-full px-4 py-2.5 border rounded-xl shadow-xs transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 @error('penerbit') border-red-300 bg-red-50/30 focus:ring-red-500/20 focus:border-red-500 @else border-gray-300 @enderror"
                                    placeholder="e.g., Charles Scribner's Sons" required>
                                @error('penerbit')
                                    <p class="mt-1.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 pr-0 md:pr-2.5">
                            <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit (Year)</label>
                            <input type="number" name="tahun_terbit" id="tahun_terbit" 
                                min="1000" max="{{ date('Y') }}"
                                value="{{ old('tahun_terbit', $buku->tahun_terbit ?? date('Y')) }}"
                                class="w-full px-4 py-2.5 border rounded-xl shadow-xs transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 @error('tahun_terbit') border-red-300 bg-red-50/30 focus:ring-red-500/20 focus:border-red-500 @else border-gray-300 @enderror"
                                placeholder="e.g., 1925" required>
                            @error('tahun_terbit')
                                <p class="mt-1.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="h-px bg-gray-200 my-2"></div>

                        <div class="flex items-center justify-end space-x-3 pt-2">
                            <a href="{{ route('dashboard') }}" 
                                class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-200 hover:bg-gray-50 rounded-xl transition duration-150 cursor-pointer">
                                Cancel
                            </a>
                            <button type="submit" 
                                class="px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl transition duration-150 shadow-sm cursor-pointer">
                                {{ isset($buku) ? 'Update Book Details' : 'Save New Book' }}
                            </button>
                        </div>
                    </form>
                </div>

            </main>
        </div>
    </div>

</body>
</html>