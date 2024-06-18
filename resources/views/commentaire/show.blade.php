@extends('layouts.app')

@section('content')
    <h1>{{ $commentaire->titre }}</h1>
    <p>{{ $commentaire->contenu }}</p>
    <a href="{{ route('commentaires.index') }}">retour</a>
@endsection
