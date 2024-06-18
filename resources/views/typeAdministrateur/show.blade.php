@extends('layouts.app')

@section('content')
    <h1>{{ $type_administration->libelle }}</h1>

    <a href="{{ route('type_administrations.index') }}">retour</a>
@endsection
