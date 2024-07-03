@extends('layouts.app')

@section('content')
    <h1>Film:</h1>
    @foreach ($film as $SingoloFilm)
        <p>{{ $SingoloFilm->title }} {{ $SingoloFilm->date }}</p>
    @endforeach
@endsection
