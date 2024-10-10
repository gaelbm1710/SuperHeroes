@extends('layout')

@section('content')
    <h1>{{ $superhero->superhero_name }}</h1>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Photo URL:</strong> <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}"></p>
    <p><strong>Additional Info.:</strong> {{ $superhero->additional }}</p>
@endsection
