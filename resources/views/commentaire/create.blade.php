@extends('layouts.app')

@section('content')
    <h1>Creer un commentaire</h1>
    <form action="{{ route('commentaires.store') }}" method="POST">
        @csrf
        <label>Titre:</label>
        <input type="text" name="titre">
        <label>Contenu:</label>
        <textarea name="contenu"></textarea>
        <button type="submit">Creer</button>
    </form>
@endsection
