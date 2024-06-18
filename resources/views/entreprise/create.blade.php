@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Ajouter une entreprise</h1>
            <form action="{{ route('entreprises.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="temoignage_id" class="form-label">Témoignage</label>
                    <select class="form-select" id="temoignage_id" name="temoignage_id" required>
                        <option value="">Sélectionner un témoignage</option>
                        @foreach($temoignages as $temoignage)
                            <option value="{{ $temoignage->id }}" {{ old('temoignage_id') == $temoignage->id ? 'selected' : '' }}>{{ $temoignage->nom }}</option>
                        @endforeach
                    </select>
                    @error('temoignage_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type_administration_id" class="form-label">Type d'administration</label>
                    <select class="form-select" id="type_administration_id" name="type_administration_id" required>
                        <option value="">Sélectionner un type d'administration</option>
                        @foreach($type_administrations as $type_administration)
                            <option value="{{ $type_administration->id }}" {{ old('type_administration_id') == $type_administration->id ? 'selected' : '' }}>{{ $type_administration->nom }}</option>
                        @endforeach
                    </select>
                    @error('type_administration_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="secteur_activites_id" class="form-label">Secteur d'activités</label>
                    <select class="form-select" id="secteur_activites_id" name="secteur_activites_id" required>
                        <option value="">Sélectionner un secteur d'activités</option>
                        @foreach($secteur_activites as $secteur_activite)
                            <option value="{{ $secteur_activite->id }}" {{ old('secteur_activites_id') == $secteur_activite->id ? 'selected' : '' }}>{{ $secteur_activite->nom }}</option>
                        @endforeach
                    </select>
                    @error('secteur_activites_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="moderateur_id" class="form-label">Modérateur</label>
                    <select class="form-select" id="moderateur_id" name="moderateur_id">
                        <option value="">Sélectionner un modérateur</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ old('moderateur_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('moderateur_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="supprimer_par_id" class="form-label">Supprimé par</label>
                    <select class="form-select" id="supprimer_par_id" name="supprimer_par_id">
                        <option value="">Sélectionner un utilisateur</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ old('supprimer_par_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('supprimer_par_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </section>
@endsection
