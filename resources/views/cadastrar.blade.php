@extends('layout.base')
@section('title', 'Cadastrar')
@section('content')
    <h2>Cadastrar Musica</h2>
    <form action="{{ route('salvar')}}" method="POST">
        {{csrf_field()}}
        <div>
            <label>Nome da Musica</label>
            <input type="text" name="nome_musica" placeholder="Nome da Musica">
        </div>
        <div>
            <label>Nome do Artista</label>
            <input type="text" name="nome_artista" placeholder="Nome do Artista">
        </div>
        <div>
            <label>Rank da Musica</label>
            <input type="number" name="rank_musica" placeholder="Rank da Musica">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
        