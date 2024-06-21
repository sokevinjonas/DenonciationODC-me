@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des signaux</h1>
        <a href="{{ route('signals.create') }}" class="btn btn-primary">Ajouter un signal</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Utilisateur</th>
                    <th>Témoignage</th>
                    <th>Supprimé par</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($signals as $signal)
                    <tr>
                        <td>{{ $signal->id }}</td>
                        <td>{{ $signal->description }}</td>
                        <td>{{ $signal->user->name }}</td>
                        <td>{{ $signal->temoignage->nom }}</td>
                        <td>{{ $signal->supprimerPar ? $signal->supprimerPar->name : '-' }}</td>
                        <td>
                            <a href="{{ route('signals.edit', $signal->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                            <form action="{{ route('signals.destroy', $signal->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
