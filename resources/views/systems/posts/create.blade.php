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
                                height: auto;">
                    <input id="uploadImage" 
                           type="file" 
                           name="image" 
                           onchange="PreviewImage();"
                           required
                           autofocus>
                    {{ old('image') }}
                    {{ ($errors->has('image')) ? $errors->first('image') : '' }}       
                </div>
            </div>
            <div class="form-group">
                <label class="flex-box">
                    <input type="radio" 
                           class="radio" 
                           name="type" 
                           id="carro"
                           value="1"
                           checked> Carro
                </label>
                <label class="flex-box">
                    <input type="radio" 
                           class="radio" 
                           name="type" 
                           id="moto"
                           value="2"> Moto
                </label>
                <label class="flex-box">
                    <input type="radio" 
                           class="radio" 
                           name="type" 
                           id="caminhao"
                           value="3"> Caminhão / Utilitário
                </label>
            </div>            
            <div class="form-group">
                <input type="text" 
                       name="brand" 
                       placeholder="Marca">
                <input type="number" 
                       name="age" 
                       placeholder="Ano">
            </div>
            <div class="form-group">
                <textarea name="description" 
                          placeholder="Descrição"></textarea>
            </div>
            <div class="form-group">
                <label for="sell">Vender?</label>
                <input type="checkbox" 
                       name="sell" 
                       id="sell">
            </div>
            <div class="form-group">
                <button type="submit">Criar</button>
                <button type="reset">Limpar</button>
            </div>            
        </form>
    </div>
@endsection