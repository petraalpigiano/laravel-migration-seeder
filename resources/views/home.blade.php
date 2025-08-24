{{-- La pagina in questione estende il layout 'main' --}}
@extends('layouts.main')

{{-- La home avrà questo contenuto specifico  --}}
@section('contenuto-home')
    {{-- @php
        //         $is_punctual = $train['is_punctual'] == 1 : 'Il treno è in orario': 'Il treno non è in orario';
        // echo $is_punctual;
        $is_punctual = '';
        if ($train['is_punctual'] == 1) {
        } else {
            # code...
        }
    @endphp --}}

    <div class="container">
        <h1>Prossimi treni</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($trains as $train)
                <div class="col">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <h4 class="card-title"><strong>{{ $train['company'] }}</strong></h4>
                            <h5 class="card-text"><i>{{ $train['train_code'] }}</i></h5>
                            <p class="card-text">Partenza: {{ $train['departure'] }}</p>
                            <p class="card-text">{{ $train['departure_time'] }}</p>
                            <p class="card-text">Arrivo: {{ $train['arrival'] }}</p>
                            <p class="card-text">{{ $train['arrival_time'] }}</p>
                            @php
                                $is_punctual = $train['is_punctual'] == 1 ? 'Si' : 'No';
                                $is_cancelled = $train['is_cancelled'] == 1 ? 'Si' : 'No';
                            @endphp
                            <p class="card-text">In orario: @php echo $is_punctual @endphp</p>
                            <p class="card-text">Cancellato: @php echo $is_cancelled @endphp</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
