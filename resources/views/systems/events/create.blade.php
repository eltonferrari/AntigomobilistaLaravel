@extends('layouts.app')

@section('title', 'Adicionar Eventos')

@section('content')
    <div class="container">
        <h1>
            EVENTS - CREATE
        </h1>
        <form action="{{ route('events.store') }}" method="post">
            @csrf
            <input type="hidden" name="iduser">
            <input type="text" name="name" placeholder="Nome">
            <input type="date" name="date" placeholder="Data">
            <input type="text" name="city" placeholder="Cidade">
            <input type="text" name="locale" placeholder="Endereço">
            <textarea name="description" placeholder="Descrição"></textarea>
            <input type="text" name="image" placeholder="IMAGEM">
            <button type="submit">Criar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>    
@endsection