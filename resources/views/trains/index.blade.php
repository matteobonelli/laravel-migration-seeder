@extends('layouts.app')

@section('title', 'Tabellone Treni')

@section('content')

<div class="container">
    <div class="row">
        @foreach($trains as $train)
        <div class="col-12 d-flex justify-content-center align-items-center p-2">
            <h3 class="px-2">TRENO:</h3>
            <h6 class="px-2">{{$train->azienda}}</h6>
            <h6 class="px-2">{{$train->data}}</h6>   
            <h6 class="px-2">{{$train->stazione_di_partenza}}</h6>
            <div class="px-2">{{$train->orario_di_partenza}}</div>
            <h6 class="px-2">{{$train->stazione_di_arrivo}}</h6>
            <div class="px-2">{{$train->orario_di_arrivo}}</div>
            <h6 class="px-2">{{$train->codice_treno}}</h6>
            <h6 class='px-2'>
                @if ($train->in_orario)
                    Treno in orario
                @else
                    Treno in ritardo
                @endif
            </h6>
            <h6 class='px-2'>
                @if ($train->cancellato)
                    Treno cancellato
                @endif
            </h6>
        </div>
        @endforeach
    </div>
</div>

@endsection