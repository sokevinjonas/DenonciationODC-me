@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Ajouter un secteur d'activité</h1>
            <form action="{{ route('secteurActivites.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="libelle" class="form-label">Libellé</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" value="{{ old('libelle') }}" required>
                    @error('libelle')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="moderateur_id" class="form-label">Modérateur</label>
                    <select class="form-select" id="moderateur_id" name="moderateur_id" required>
                        <option value="">Sélectionner un modérateur</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ old('moderateur_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('moderateur_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </section>
@endsection
