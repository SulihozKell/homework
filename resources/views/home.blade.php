@extends("layouts.app")

@section("title", "Home")

@section("content")
    <h1>Homeworks</h1>
    <p>Total number of homeworks: {{ $homeworkCount }}</p>
    <p><a href="{{ route('homeworks.index') }}">Homework list.</a></p>
@endsection
