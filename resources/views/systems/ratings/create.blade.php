@extends('layouts.app')

@section('title', 'Criar Ratings')

@section('content')
    <div class="container">
        <h1>
            RATINGS - CREATE
        </h1>
        <form action="{{ route('ratings.store') }}" method="post">
            @csrf
            <input type="number" name="qtd" placeholder="Levels">
            <input type="number" name="porcent" placeholder="Porcent">
            <button type="submit">Criar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>
@endsection