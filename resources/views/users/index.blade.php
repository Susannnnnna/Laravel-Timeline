@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-6">
            <h3>Users List</h3>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Phone number</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <button class="btn btn-outline-danger btn-sm delete" data-id="{{ $user->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('users') }}/"
@endsection
@section('js-files')
    @vite(['resources/sass/app.scss', 'resources/js/delete.js'])
@endsection