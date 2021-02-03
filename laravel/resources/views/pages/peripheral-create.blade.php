@extends('layouts.main-layout')

@section('content')
    
    <h1>Form</h1>

    <form action="{{ route('peripheral-store') }}" method='post'>

        @csrf
        @method('post')

        <div>
            <label for="name">Nome</label>
            <input name='name' type="text">
        </div>

        <div>
            <label for="model">Model</label>
            <input name='model' type="text">
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input name='price' type="text">
        </div>

        <div>
            <label for="watt">Consumo</label>
            <input name='watt' type="text">
        </div>

        <input type="submit" value="Salva">
    </form>

@endsection