<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@heroicons/sidebar-v1/heroicons.min.js"></script>
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
                    
                    <div class="w-full h-px bg-slate-800 my-4"></div>
                    
                    <p class="text-xs text-slate-400 break-all max-w-full px-2">
                        {{ auth()->user()->email }}
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
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold text-gray-800">Dashboard Overview</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="h-8 w-px bg-gray-200"></div>
                    <span class="text-sm text-gray-600">Welcome back, <strong>{{ auth()->user()->name }}</strong></span>
                </div>
            </header>

            <main class="p-6 space-y-6">
                
                <div class="bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between flex-wrap gap-4">
                        <div class="flex items-center space-x-3">
                            <h2 class="text-lg font-medium text-gray-900">Daftar Buku (Book List)</h2>
                            <span class="text-xs font-semibold bg-indigo-100 text-indigo-800 px-2.5 py-1 rounded-full">
                                Total: {{ $bukus->total() }} Books
                            </span>
                        </div>
                        <a href="{{ route('bukus.create') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl transition duration-150 shadow-sm cursor-pointer">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-line-cap="round" stroke-line-join="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Create New Book
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/70 border-b border-gray-200 text-gray-500 text-xs font-semibold uppercase tracking-wider">
                                    <th class="px-6 py-3 w-16">No</th>
                                    <th class="px-6 py-3">Judul</th>
                                    <th class="px-6 py-3">Penulis</th>
                                    <th class="px-6 py-3">Penerbit</th>
                                    <th class="px-6 py-3 text-center">Tahun Terbit</th>
                                    <th class="px-6 py-3 text-right w-44">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                                @forelse ($bukus as $index => $buku)
                                    <tr class="hover:bg-gray-50/80 transition duration-150">
                                        <td class="px-6 py-4 font-medium text-gray-400">
                                            {{ $bukus->firstItem() + $index }}
                                        </td>
                                        <td class="px-6 py-4 font-semibold text-gray-900">
                                            {{ $buku->judul }}
                                        </td>
                                        <td class="px-6 py-4 text-gray-600">
                                            {{ $buku->penulis }}
                                        </td>
                                        <td class="px-6 py-4 text-gray-500">
                                            {{ $buku->penerbit }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                                {{ $buku->tahun_terbit }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right whitespace-nowrap">
                                            <div class="inline-flex items-center space-x-2">
                                                <a href="{{ route('bukus.edit', $buku->id) }}" class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-700 bg-white border border-gray-200 hover:bg-gray-50 rounded-lg transition duration-150 shadow-xs cursor-pointer">
                                                    Edit
                                                </a>
                                                
                                                <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition duration-150 cursor-pointer">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-10 text-center text-gray-400">
                                            No books found in the database.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if ($bukus->hasPages())
                        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                            {{ $bukus->links() }}
                        </div>
                    @endif
                </div>
            </main>
        </div>
    </div>

</body>
</html>