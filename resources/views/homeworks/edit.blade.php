@extends("layouts.app")

@section("title", "Create")

@section("content")

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form method='POST' action="{{ route('homeworks.update', $homework->id) }}">
        @method('PATCH')
        @csrf
        <div>
            <label for="name_id">Name</label>
            <input type="text" id="name_id" name="name" value="{{ $homework->name }}">
        </div>
        <div>
            <label for="url_id">Url</label>
            <input type="text" id="url_id" name="url" value="{{ $homework->url }}">
        </div>
        <div>
            <label for="feedback_id">Feedback</label>
            <input type="text" id="feedback_id" name="feedback" value="{{ $homework->feedback }}">
        </div>
        <div>
            <label for="points">Points</label>
            <input type="number" id="points_id" name="points" value="{{ $homework->points }}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
@endsection
