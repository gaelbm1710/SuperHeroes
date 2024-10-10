@extends('layout')
@section('content')
<h1>SuperHeroes List</h1>
<a href="{{route('superheroes.create')}}">Add SuperHeroe</a>
@if ($superheroes->isEmpty())
        <p>No superheroes found.</p>
    @else
        <ul>
            @foreach ($superheroes as $superhero)
                <li>
                    <a href="{{ route('superheroes.show', $superhero->id) }}">
                        {{ $superhero->superhero_name }} ({{ $superhero->real_name }})
                    </a>
                    <a href="{{ route('superheroes.edit', $superhero->id) }}">Edit</a>
                    <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection