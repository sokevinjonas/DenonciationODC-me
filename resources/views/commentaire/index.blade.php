@extends('layouts.app')

@section('content')
    <h1>commentaire</h1>
    <a href="{{ route('commentaires.create') }}">Creer un commentaire</a>
    @if ($commentaire = Session::get('success'))
        <div>{{ $commentaire }}</div>
    @endif
    <ul>
        @foreach ($commentaires as $commentaire)
            <li>
                <a href="{{ route('commentaires.show', $commentaire->id) }}">{{ $commentaire->titre }}</a>
                <a href="{{ route('commentaires.edit', $commentaire->id) }}">Editer</a>
                <form action="{{ route('commentaires.destroy', $commentaire->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
