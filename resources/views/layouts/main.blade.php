<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boilerplate</title>
    {{-- importiamo gli assets di BS --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- inserisco il parziale 'header' --}}
    @include('partials.header')
    {{-- Inserisco il contenuto della home --}}
    @yield('contenuto-home')
    {{-- Inserisco il contenuto della contact --}}
    @yield('contenuto-contact')
    {{-- inserisco il parziale 'footer' --}}
    @include('partials.footer')
</body>

</html>
