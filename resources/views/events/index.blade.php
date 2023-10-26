@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            Events list
        </div>
        <div class="col-6">
            <a class="float-right" href="{{ route('events.create') }}">
                <button type="button" class="btn btn-primary">Add</button>
            </a>
        </div>
    </div>
    <table class="table table-hover">
    
    </table>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Event date</th>
            <th scope="col">Description</th>
            <th scope="col">Link</th>
            <th scope="col">Category</th>
            <th scope="col">Ilustration</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <th scope="row">{{ $event->id }}</th>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->link }}</td>
                    <td>{{ $event->category_name_id }}</td>
                    <td>{{ $event->ilustration_path_id }}</td>
                    <td>
                        <a href="{{ route('events.edit', $event->id) }}">
                            <button class="btn btn-success btn-sm">
                                Edit
                            </button>
                        </a>
                        <button class="btn btn-danger btn-sm delete" data-id="{{ $event->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Use message only when you want to use pagination -->
</div>
@endsection
