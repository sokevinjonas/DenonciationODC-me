@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier un signal</h1>
        <form action="{{ route('signals.update', $signal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $signal->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">Utilisateur</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id', $signal->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="temoignage_id" class="form-label">Témoignage</label>
                <select class="form-control" id="temoignage_id" name="temoignage_id">
                    @foreach($temoignages as $temoignage)
                        <option value="{{ $temoignage->id }}" {{ old('temoignage_id', $signal->temoignage_id) == $temoignage->id ? 'selected' : '' }}>{{ $temoignage->nom }}</option>
                    @endforeach
                </select>
                @error('temoignage_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="supprimer_par_id" class="form-label">Supprimé par</label>
                <select class="form-control" id="supprimer_par_id" name="supprimer_par_id">
                    <option value="">Aucun</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('supprimer_par_id', $signal->supprimer_par_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('supprimer_par_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
