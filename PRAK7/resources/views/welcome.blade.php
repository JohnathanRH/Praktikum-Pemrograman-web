<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'App Buku') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        @endif
        
        <style>
            body {
                font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-50 dark:bg-slate-950 text-gray-900 dark:text-gray-100 antialiased min-h-screen flex flex-col justify-between selection:bg-indigo-500 selection:text-white">

        <header class="w-full max-w-7xl mx-auto px-6 h-20 flex items-center justify-between sticky top-0 bg-gray-50/80 dark:bg-slate-950/80 backdrop-blur-md z-50">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center font-bold text-white shadow-md shadow-indigo-500/20 text-lg">
                    B
                </div>
                <span class="font-bold text-xl tracking-wide bg-gradient-to-r from-slate-900 to-slate-700 dark:from-white dark:to-slate-300 bg-clip-text text-transparent">
                    App Buku
                </span>
            </div>

            @if (Route::has('login.show'))
                <nav class="flex items-center space-x-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="px-5 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl shadow-xs transition duration-150 cursor-pointer">
                            Go to Dashboard &rarr;
                        </a>
                    @else
                        <a href="{{ route('login.show') }}" 
                           class="px-4 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-150">
                            Log in
                        </a>
                    @endauth
                </nav>
            @endif
        </header>

        <main class="flex-1 max-w-7xl mx-auto px-6 w-full flex flex-col justify-center py-12 md:py-20 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Organize your <br class="hidden sm:inline">
                        <span class="bg-gradient-to-r from-indigo-600 via-indigo-500 to-purple-600 bg-clip-text text-transparent">
                            Digital Book Catalog
                        </span> 
                        effortlessly.
                    </h1>
                    
                    <p class="text-base sm:text-lg text-gray-600 dark:text-slate-400 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Welcome to your personal book manager platform. Keep absolute track of your favorite titles, details, authors, and production metadata inside a lightning-fast catalog interface.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="w-full sm:w-auto px-6 py-3 text-center text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl shadow-md shadow-indigo-500/10 transition duration-150 cursor-pointer">
                                Manage Records View
                            </a>
                        @else
                            <a href="{{ route('login.show') }}" class="w-full sm:w-auto px-6 py-3 text-center text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl shadow-md shadow-indigo-500/10 transition duration-150 cursor-pointer">
                                Get Started Free
                            </a>
                        @endauth
                    </div>
                </div>

                <div class="lg:col-span-5 relative">
                    <div class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-indigo-500 to-purple-500 opacity-20 blur-xl dark:opacity-30"></div>
                    
                    <div class="relative bg-white dark:bg-slate-900 rounded-2xl border border-gray-200 dark:border-slate-800 shadow-xl overflow-hidden p-6 space-y-4">
                        <div class="flex items-center justify-between border-b border-gray-100 dark:border-slate-800 pb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <span class="text-xs font-mono text-gray-400 dark:text-slate-500">bukus_catalog.db</span>
                        </div>
                        
                        <div class="space-y-2.5">
                            <div class="p-3 bg-gray-50 dark:bg-slate-950 rounded-xl border border-gray-100 dark:border-slate-900 flex items-start gap-3">
                                <div class="p-2 bg-indigo-100 dark:bg-indigo-950 text-indigo-600 dark:text-indigo-400 rounded-lg text-xs font-bold font-mono">01</div>
                                <div>
                                    <h4 class="text-xs font-semibold text-gray-800 dark:text-slate-200">The Great Gatsby</h4>
                                    <p class="text-[11px] text-gray-500 dark:text-slate-400">F. Scott Fitzgerald · 1925</p>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-50 dark:bg-slate-950 rounded-xl border border-gray-100 dark:border-slate-900 flex items-start gap-3">
                                <div class="p-2 bg-indigo-100 dark:bg-indigo-950 text-indigo-600 dark:text-indigo-400 rounded-lg text-xs font-bold font-mono">02</div>
                                <div>
                                    <h4 class="text-xs font-semibold text-gray-800 dark:text-slate-200">To Kill a Mockingbird</h4>
                                    <p class="text-[11px] text-gray-500 dark:text-slate-400">Harper Lee · 1960</p>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-50 dark:bg-slate-950 rounded-xl border border-gray-100 dark:border-slate-900 flex items-start gap-3 opacity-60">
                                <div class="p-2 bg-indigo-100 dark:bg-indigo-950 text-indigo-600 dark:text-indigo-400 rounded-lg text-xs font-bold font-mono">03</div>
                                <div>
                                    <h4 class="text-xs font-semibold text-gray-800 dark:text-slate-200">1984 (Nineteen Eighty-Four)</h4>
                                    <p class="text-[11px] text-gray-500 dark:text-slate-400">George Orwell · 1949</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <footer class="w-full border-t border-gray-200 dark:border-slate-900 bg-white dark:bg-slate-950 py-6 text-center text-xs text-gray-500 dark:text-slate-400">
            <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
                <div class="flex space-x-4">
                    <span class="hover:text-indigo-500 transition">Laravel v{{ App::VERSION() }}</span>
                    <span>&middot;</span>
                    <span class="hover:text-indigo-500 transition">PHP v{{ PHP_VERSION }}</span>
                </div>
            </div>
        </footer>

    </body>
</html>