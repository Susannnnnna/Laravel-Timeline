@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit event</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
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
                                <textarea id="description" maxlength="2000" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $event->description }}" required autofocus>{{ $event->description }}</textarea>

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
                            <label for="category_id" class="col-md-4 col-form-label text-md-end">Category</label>

                            <div class="col-md-6">
                                <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                <option value="">-</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($event->isSelectedCategory($category->id)) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                    </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image_path" class="col-md-4 col-form-label text-md-end">Ilustration</label>

                            <div class="col-md-6">
                                
                                    <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" value="{{ $event->image_path }}">
                                
                                @error('image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3  justify-content-center">
                            <div class="col-md-6">
                                @if(!is_null($event->image_path))
                                    <img src="{{ asset('storage/' . $event->image_path) }}" alt="event_photo">
                                @endif
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
