@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit event</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('events.update', $event->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Title</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $event->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="event_date" class="col-md-4 col-form-label text-md-end">Event date</label>

                        <div class="col-md-6">
                                <input id="event_date" type="text" class="form-control @error('event_date') is-invalid @enderror" name="event_date" value="{{ $event->event_date }}" required autocomplete="event_date" autofocus>

                                @error('event_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="2000" class="form-control @error('description') is-invalid @enderror" name="description" autofocus>{{ $event->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="link" class="col-md-4 col-form-label text-md-end">Link</label>

                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ $event->link }}" required autocomplete="link" autofocus>

                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category_name_id" class="col-md-4 col-form-label text-md-end">Category</label>

                            <div class="col-md-6">
                                <input id="category_name_id" type="category_name_id" class="form-control @error('category_name_id') is-invalid @enderror" name="category_name_id" value="{{ $event->category_name_id }}" required autocomplete="category_name_id">

                                @error('category_name_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ilustration_path_id" class="col-md-4 col-form-label text-md-end">Ilustration</label>

                            <div class="col-md-6">
                                <input id="ilustration_path_id" type="ilustration_path_id" class="form-control @error('ilustration_path_id') is-invalid @enderror" name="ilustration_path_id" value="{{ $event->ilustration_path_id }}" required autocomplete="ilustration_path_id">

                                @error('ilustration_path_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
