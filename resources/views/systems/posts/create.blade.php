@extends('layouts.app')

@section('title', 'Adicionar Fotos')

@section('content')
    <div class="container text-center">
        <h1>
            Adicionar novas fotos
        </h1>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <input type="hidden" name="iduser">
            <div class="form-group">
                <div class="gallery">                                        
                    <img id="uploadPreview" 
                         style="width: 100%; 
                                height: auto;" />
                    <input id="uploadImage" 
                           type="file" 
                           name="image" 
                           onchange="PreviewImage();"
                           required
                           autofocus />
                    {{ old('image') }}
                    {{ ($errors->has('image')) ? $errors->first('image') : '' }}       
                </div>
            </div>
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