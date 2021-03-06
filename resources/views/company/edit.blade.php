@extends('layouts.app')
@section('pageTitle', 'Company')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card p-4 shadow-sm">

                <form action="{{ route('company.index') }}/{{ $company->id }}" method="POST" class="form-group"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PATCH')

                    <label for="name" class="form-label">{{ ucwords('name') }}</label>
                    <input type="text" name="name" id="name" class="form-control mb-3"
                        value="{{ ucwords($company->name) }}">

                    <label for="email" class="form-label">{{ ucwords('email') }}</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" value="{{ $company->email }}">

                    <label class="form-label" for="logo">{{ ucwords('upload compay logo') }}</label>
                    <input type="file" class="form-control mb-3" id="logo" name="logo" />

                    <label for="website" class="form-label">{{ ucwords('website') }}</label>
                    <input type="website" name="website" id="website" class="form-control mb-3"
                        value="{{ $company->website }}">

                    <div>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                        <a href="{{ route('company.index') }}" class="btn btn-outline-secondary"> Cancel </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection