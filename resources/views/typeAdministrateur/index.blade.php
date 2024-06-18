@extends('layouts.app')

@section('content')
    <h1>TypeAdministrateur</h1>
    <a href="{{ route('type_administrations.create') }}">Creer un typeAdministration</a>
    @if ($type_administrations = Session::get('success'))
        <div>{{ $type_administrations}}</div>
    @endif
    <ul>
        @foreach ($type_administrations as $type_administrations)
            <li>
                <a href="{{ route('type_administrations.show', $type_administrations->id) }}">{{ $type_administrations->titre }}</a>
                <a href="{{ route('type_administrations.edit', $type_administrations->id) }}">Editer</a>
                <form action="{{ route('type_administrations.destroy', $type_administrations->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
