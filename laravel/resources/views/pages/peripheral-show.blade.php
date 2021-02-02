@extends('layouts.main-layout')

@section('content')
    
    <h1>
        Nome: {{ $peripheral -> name }}
    </h1>

    <h1>
        Modello: {{ $peripheral -> model }}
    </h1>

    <h1>
        Prezzo: {{ $peripheral -> price }}$
    </h1>

    <h1>
        Consumo: {{ $peripheral -> watt }}w
    </h1>

@endsection