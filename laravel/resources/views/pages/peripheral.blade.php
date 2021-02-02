@extends('layouts.main-layout')

@section('content')

    <h1>Peripherals</h1>

    <ul>

        @foreach ($peripherals as $peripheral)
           
            <a href="{{ route('peripheral-show', $peripheral -> id) }}">
                <li>{{ $peripheral -> id}} - {{ $peripheral -> name}}</li> 
            </a>
        @endforeach

    </ul>

@endsection