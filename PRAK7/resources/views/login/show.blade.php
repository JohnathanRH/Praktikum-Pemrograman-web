<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-8 space-y-6 bg-slate-800 rounded-xl shadow-2xl border border-slate-700">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-white">Welcome Back</h2>
        </div>

        @if ($errors->any())
            <div class="p-4 bg-red-950/50 border border-red-500/50 rounded-lg text-sm text-red-200">
                <div class="font-semibold text-red-400 mb-1">Please fix the following errors:</div>
                <ul class="list-disc list-inside space-y-0.5 opacity-90">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('login.auth') }}" method="POST">
            @csrf

            <div class="space-y-4 rounded-md shadow-sm">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required 
                        class="w-full px-3 py-2 mt-1 bg-slate-900 border rounded-md text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent sm:text-sm transition duration-150 
                        @error('email') border-red-500 focus:ring-red-500 @else border-slate-700 @enderror" 
                        placeholder="you@example.com" value="{{ old('email') }}">
                    
                    {{-- @if(session()->has('url.intended'))
                        <p class="mt-1.5 text-xs text-red-400 font-medium">Login terlebih dahulu!</p>
                    @endif --}}
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-300">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required 
                        class="w-full px-3 py-2 mt-1 bg-slate-900 border rounded-md text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent sm:text-sm transition duration-150
                        @error('password') border-red-500 focus:ring-red-500 @else border-slate-700 @enderror" 
                        placeholder="••••••••">
                    
                    @error('password')
                        <p class="mt-1.5 text-xs text-red-400 font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                {{-- <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" 
                        class="w-4 h-4 bg-slate-900 border-slate-700 rounded text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-800">
                    <label for="remember_me" class="block ml-2 text-sm text-slate-300">Remember me</label>
                </div> --}}

                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-400 hover:text-indigo-300 transition duration-150">Forgot your password?</a>
                </div>
            </div>

            <div>
                <button type="submit" 
                    class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-slate-800 transition duration-150 ease-in-out">
                    Sign in
                </button>
            </div>
        </form>
    </div>

</body>
</html>