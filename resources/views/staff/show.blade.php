@extends('layouts.app')
@section('pageTitle', 'Staff Details')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card p-4 shadow-sm">

                <form action="" method="" class="form-group">

                    <label for="first_name" class="form-label">{{ ucwords('first name') }}</label>
                    <input type="text" name="first_name" id="first_name" class="form-control mb-3"
                        value="{{ $staff->first_name }}" disabled>

                    <label for="last_name" class="form-label">{{ ucwords('last name') }}</label>
                    <input type="last_name" name="last_name" id="last_name" class="form-control mb-3"
                        value="{{ $staff->last_name }}" disabled>

                    <label for="company" class="form-label">{{ ucwords('company') }}</label>
                    <input type="company" name="company" id="company" class="form-control mb-3"
                        value="{{ $staff->company }}" disabled>

                    <label for="email" class="form-label">{{ ucwords('email') }}</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" value="{{ $staff->email }}"
                        disabled>

                    <label for="phone" class="form-label">{{ ucwords('phone') }}</label>
                    <input type="phone" name="phone" id="phone" class="form-control mb-3" value="{{ $staff->phone }}"
                        disabled>

                    <div>
                        <a href="/staff/{{ $staff->id }}/edit" class="btn btn-primary">Edit staff details</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection