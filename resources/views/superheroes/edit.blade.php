@extends('layout')
@section('content')
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="real_name">Real Name:</label>
        <input type="text" id="real_name" name="real_name" value="{{ $superhero->real_name }}" required>
        <label for="superhero_name">Superhero Name:</label>
        <input type="text" id="superhero_name" name="superhero_name" value="{{ $superhero->superhero_name }}" required>
        <label for="photo_url">Photo URL:</label>
        <input type="url" id="photo_url" name="photo_url" value="{{ $superhero->photo_url }}" required>
        <label for="additional">Additional Info:</label>
        <textarea id="additional" name="additional">{{ $superhero->additional }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
