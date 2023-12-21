@extends('layouts.app')

@section('title', 'Tabellone Treni')

@section('content')

<div class="container">
    <div class="row">
        @foreach($trains as $train)
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h6>{{$train->stazione_di_partenza}}</h6>
            <div>{{$train->orario_di_partenza}}</div>
            <h6>{{$train->stazione_di_arrivo}}</h6>
            <div>{{$train->orario_di_arrivo}}</div>
            <h6>{{$train->codice_treno}}</h6>
        </div>
        @endforeach
    </div>
</div>

@endsection