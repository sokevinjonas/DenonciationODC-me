@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Liste des entreprises</h1>
            <a href="{{ route('entreprises.create') }}" class="btn btn-primary mb-3">Ajouter une entreprise</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Témoignage</th>
                            <th>Type d'administration</th>
                            <th>Secteur d'activités</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($entreprises as $entreprise)
                            <tr>
                                <td>{{ $entreprise->id }}</td>
                                <td>{{ $entreprise->nom }}</td>
                                <td>{{ $entreprise->temoignage->nom }}</td>
                                <td>{{ $entreprise->typeAdministration->nom }}</td>
                                <td>{{ $entreprise->secteurActivite->nom }}</td>
                                <td>
                                    <a href="{{ route('entreprises.edit', $entreprise->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                    <form action="{{ route('entreprises.destroy', $entreprise->id) }}" method="POST" class="d-inline">
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
