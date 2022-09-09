<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        
        <header class="text-gray-800 fixed top-0 left-0 right-0 z-50">

            <div class="bg-slate-300">
                <div class="flex justify-between items-center py-2 container mx-auto px-10">
                    <h3 class="font-semibold">by zgenius coders</h3>
                    @guest
                    <div class="flex items-center gap-1">
                        <p>Are you a member ?</p>
                        <a href="{{ route("register") }}" class="text-red-500">Register</a>
                        <span>or</span>
                        <a href="{{ route("login") }}" class="text-red-500">Login</a>
                    </div>
                    @endguest
                </div>
            </div>
        
            <div class="bg-slate-100">
                <div class="flex justify-between items-center py-4 container mx-auto px-10">
                    <h3 class="font-bold text-4xl text-gray-800">
                        Lara<span class="text-red-500">blog</span>
                    </h3>
                    <form action="" method="post" class="flex items-center">
                        <input type="search" name="q" placeholder="Recherche..." class="outline-none p-2 border-none bg-slate-300"/>
                        <button type="submit" class="bg-red-500 text-white p-2 w-full block">Rechercher</button>
                    </form>
                </div>
            </div>
        
            @include("layouts.navigation")
            </header>

        <!-- Page Content -->
        <div style="margin-top: 150px">
            {{ $slot }}
        </div>
       
    </body>
</html>
