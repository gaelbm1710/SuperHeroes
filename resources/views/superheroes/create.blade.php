@extends('layout')
@section('content')
    <h1>Add New Superhero</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <label for="real_name">Real Name:</label>
        <input type="text" id="real_name" name="real_name" required>
        <label for="superhero_name">Superhero Name:</label>
        <input type="text" id="superhero_name" name="superhero_name" required>
        <label for="photo_url">Photo URL:</label>
        <input type="url" id="photo_url" name="photo_url" required>
        <label for="additional">Additional Info:</label>
        <textarea id="additional" name="additional"></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
