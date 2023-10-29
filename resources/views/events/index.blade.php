@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
        <h3>Events List</h3>
        </div>
        <div class="col-6 text-end">
            <a class="float-fight justify-left" href="{{ route('events.create') }}">
                <button type="button" class="btn btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                </button>
            </a>
        </div>
    </div>
    <table class="table table-hover">
    
    </table>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Event date</th>
            <th scope="col">Description</th>
            <!-- <th scope="col">Link</th> -->
            <th scope="col">Category</th>
            <!-- <th scope="col">Ilustration</th> -->
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
                    <!-- <td>{{ $event->link }}</td> -->
                    <td>
                        @if($event->hasCategory())
                            {{ $event->category->name }}
                        @endif
                    </td>
                    <!-- <td>{{ $event->image_path }}</td> -->
                    <td>
                        <a href="{{ route('events.edit', $event->id) }}">
                            <button class="btn btn-outline-success btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </button>
                        </a>
                        <button class="btn btn-outline-danger btn-sm delete" data-id="{{ $event->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Use message only when you want to use pagination -->
</div>
@endsection
