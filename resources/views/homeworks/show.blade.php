@extends("layouts.app")

@section("title", "Show")

@section("content")
    <h1>Name: {{ $homework->name }}</h1>
    <p>Url: {{ $homework->url }}</p>
    <p>Feedback: {{ $homework->feedback }}</p>
    <p>Points: {{ $homework->points }}</p>
    <a href="{{ route('homeworks.index') }}">Back to list.</a>
@endsection
