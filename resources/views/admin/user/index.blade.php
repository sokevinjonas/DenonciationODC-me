@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Liste des utilisateurs</h1>
            <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Ajouter un utilisateur</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Pseudo</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nom }}</td>
                                <td>{{ $user->prenom }}</td>
                                <td>{{ $user->pseudo }}</td>
                                <td>{{ $user->telephone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    {{-- <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-info">Voir</a>
                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-warning">Modifier</a> --}}
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
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
