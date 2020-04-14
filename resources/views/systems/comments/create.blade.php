@extends('layouts.app')

@section('title', 'Criar Comentário')

@section('content')
    <div class="container">
        <h1>
            COMMENTS - CREATE
        </h1>
        <form action="{{ route('comments.store') }}" method="post">
            @csrf
            <input type="hidden" name="iduser">
            <input type="hidden" name="idpost">
            <textarea name="comment" placeholder="Comentário"></textarea>
            <button type="submit">Criar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>    
@endsection