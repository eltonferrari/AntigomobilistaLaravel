@extends('layouts.app')

@section('title', 'Criar Mensagem')

@section('content')
    <div class="container">
        <h1>
            MESSAGES - CREATE
        </h1>
        <form action="{{ route('messages.store') }}" method="post">
            @csrf
            <input type="hidden" name="idsender">
            <input type="hidden" name="idreceptor">
            <textarea name="message" placeholder="Mensagem"></textarea>
            <button type="submit">Criar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>
@endsection