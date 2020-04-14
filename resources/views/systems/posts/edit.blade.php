@extends('layouts.app')

@section('title', 'Editar Foto')
    
@endsection

@section('content')
    <div class="container">
        <h1>
            POSTS - EDIT {{ $id }}
        </h1>
        <form action="{{ route('posts.update') }}" method="post">
            @csrf
            <input type="hidden" name="iduser">
            <input type="text" name="image" placeholder="IMAGE">
            <input type="text" name="type" placeholder="Tipo">
            <input type="text" name="brand" placeholder="Marca">
            <input type="number" name="age" placeholder="Ano">
            <textarea name="description" placeholder="Descrição"></textarea>
            <label for="sell">Vender?</label>
            <input type="checkbox" name="sell" id="sell">
            <button type="submit">Criar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>
@endsection