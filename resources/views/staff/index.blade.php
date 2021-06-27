@extends('layouts.app')
@section('pageTitle', 'List of staff')

@section('content')
<div class="container">

    <div class="mb-5">
        <h1 class="display-5 fw-bold">{{ ucwords('list of staff') }}</h1>
        <a href="{{ route('staff.create') }}" class="btn btn-primary mt-4">{{ ucwords('add new staff') }}</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ ucwords('first name') }}</th>
                <th scope="col">{{ ucwords('last name') }}</th>
                <th scope="col">{{ ucwords('company') }}</th>
                <th scope="col">{{ ucwords('email') }}</th>
                <th scope="col">{{ ucwords('phone') }}</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($staff as $data)
            <tr>
                <td>1</td>
                <td>{{ $data->first_name }}</td>
                <td>{{ $data->last_name }}</td>

                @foreach ($company as $comp)
                <td>{{ ucwords($comp->name) }}</td>
                @endforeach

                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>
                    <a href="/staff/{{ $data->id }}" class="btn btn-primary btn-sm"> View </a>

                    <form action="/staff/{{ $data->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm"> Delete </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection