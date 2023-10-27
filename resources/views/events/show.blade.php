<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show event</div>

                <div class="card-body">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Title</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control" name="name" value="{{ $event->name }}" disable>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="event_date" class="col-md-4 col-form-label text-md-end">Event date</label>

                        <div class="col-md-6">
                                <input id="event_date" type="text" class="form-control" name="event_date" value="{{ $event->event_date }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="2000" class="form-control" name="description"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="link" class="col-md-4 col-form-label text-md-end">Link</label>

                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control" name="link" value="{{ $event->link }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category_name_id" class="col-md-4 col-form-label text-md-end">Category</label>

                            <div class="col-md-6">
                                <input id="category_name_id" type="category_name_id" class="form-control" name="category_name_id" value="{{ $event->category_name_id }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image_path" class="col-md-4 col-form-label text-md-end">Ilustration</label>

                            <div class="col-md-6">
                                <input id="image_path" type="image_path" class="form-control" name="image_path" value="{{ $event->image_path }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
