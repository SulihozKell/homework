@extends("layouts.app")

@section("title", "Create")

@section("content")

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="{{ route('homeworks.store') }}">
        @csrf
        <div>
            <label for="name_id">Name</label>
            <input type="text" id="name_id" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="url_id">Url</label>
            <input type="text" id="url_id" name="url" value="{{ old('url') }}">
        </div>
        <div>
            <label for="feedback_id">Feedback</label>
            <input type="text" id="feedback_id" name="feedback" value="{{ old('feedback') }}">
        </div>
        <div>
            <label for="points_id">Points</label>
            <input type="text" id="points_id" name="points" value="{{ old('points') }}">
        </div>
        <input type="submit" value="Create">
    </form>
@endsection
