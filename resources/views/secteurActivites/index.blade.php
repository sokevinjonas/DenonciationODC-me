@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Liste des secteurs d'activités</h1>
            <a href="{{ route('secteurActivites.create') }}" class="btn btn-primary mb-3">Ajouter un secteur d'activité</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Libellé</th>
                            <th>Modérateur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($secteurActivites as $secteurActivite)
                            <tr>
                                <td>{{ $secteurActivite->id }}</td>
                                <td>{{ $secteurActivite->libelle }}</td>
                                <td>{{ $secteurActivite->moderateur->name }}</td>
                                <td>
                                    <a href="{{ route('secteurActivites.edit', $secteurActivite->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                    <form action="{{ route('secteurActivites.destroy', $secteurActivite->id) }}" method="POST" class="d-inline">
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
        </div>
    </section>
@endsection
