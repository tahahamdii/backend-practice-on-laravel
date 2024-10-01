@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Events</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Add Event</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->location }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->description }}</td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
