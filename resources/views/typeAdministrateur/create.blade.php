@extends('layouts.app')

@section('content')
    <h1>Creer un type-Administration</h1>
    <form action="{{ route('type_administrations.store') }}" method="POST">
        @csrf
        <label>libellé:</label>
        <input type="text" name="titre">


        <button type="submit">Creer</button>
    </form>
@endsection
