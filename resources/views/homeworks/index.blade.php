@extends("layouts.app")

@section("title", "Index")

@section("content")
    <p><a href="{{ route('home') }}">Back to main page.</a></p>
    <a href="{{ route('homeworks.create') }}">Create</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Url</th>
            <th>Feedback</th>
            <th>Points</th>
        </tr>
        @foreach($homeworks as $homework)
            <tr>
                <td><a href="{{ route('homeworks.show', $homework->id) }}">{{ $homework->name }}</a></td>
                <td>{{ $homework->url }}</td>
                <td>{{ $homework->feedback }}</td>
                <td>{{ $homework->points }}</td>
                <td>
                    <form method="POST" action="{{ route('homeworks.destroy', $homework->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('homeworks.edit', $homework->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
