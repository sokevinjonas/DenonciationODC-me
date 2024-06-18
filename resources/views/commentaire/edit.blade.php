@extends('layouts.app')

@section('content')
    <h1>Modifier un commentaire</h1>
    <form action="{{ route('commentaires.edit') }}" method="POST">
        @csrf
        <label>Titre:</label>
        <input type="text" name="titre">
        <label>Contenu:</label>
        <textarea name="contenu"></textarea>
        <button type="submit">Modifier</button>
    </form>
@endsection
