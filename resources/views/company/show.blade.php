@extends('layouts.app')
@section('pageTitle', 'Company')

@section('content')

<div class="container">
    @foreach ($company as $data)
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card p-4 shadow-sm">

                <form action="{{ route('company.index') }}" method="POST" class="form-group"
                    enctype="multipart/form-data">

                    @csrf

                    <label for="name" class="form-label">{{ ucwords('name') }}</label>
                    <input type="text" name="name" id="name" class="form-control mb-3"
                        value="{{ ucwords($data->name) }}" disabled>

                    <label for="email" class="form-label">{{ ucwords('email') }}</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" value="{{ $data->email }}"
                        disabled>

                    <label class="form-label" for="logo">{{ ucwords('upload compay logo') }}</label>
                    <input type="file" class="form-control mb-3" id="logo" name="logo" disabled />

                    <label for="website" class="form-label">{{ ucwords('website') }}</label>
                    <input type="website" name="website" id="website" class="form-control mb-3"
                        value="{{ $data->website }}" disabled>

                    <div>
                        <a href="/company/{{ $data->id }}/edit" class="btn btn-primary">Edit</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection