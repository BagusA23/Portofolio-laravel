<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Alpine.js CDN --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <style  link="{{ asset('css/home.css') }}"></style>
    
    {{-- Tailwind via Vite --}}
    @vite('resources/css/app.css')

    <title>@yield('title', 'Judul Default')</title>
</head>
<body>
    @yield('content')

    {{-- Include JS lokal dari public/js --}}
    @vite('public/js/app.js')
</body>
</html>
