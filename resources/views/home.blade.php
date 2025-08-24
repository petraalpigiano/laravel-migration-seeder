{{-- La pagina in questione estende il layout 'main' --}}
@extends('layouts.main')

{{-- La home avrà questo contenuto specifico  --}}
@section('contenuto-home')
    <h1>Ciao sono la Homepage</h1>
    {{-- Affinche Blade processi i nostri assets statici corretamente, usiamo il metodo asset di Vite --}}
    <img src="{{ Vite::asset('resources/img/Ginger_european_cat.jpg') }}", alt="gatto arancione">
@endsection
