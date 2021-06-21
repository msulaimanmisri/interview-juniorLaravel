@extends('layouts.app')
@section('pageTitle', 'Company')

@section('content')
<div class="container">

    <div class="mb-5">
        <h1 class="display-5 fw-bold">List of companies</h1>
        <a href="{{ route('company.create') }}" class="btn btn-primary mt-4">{{ ucwords('create new company') }}</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Logo</th>
                <th scope="col">website</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>https://sulaimanmisri.com</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"> View </a>
                    <a href="#" class="btn btn-outline-danger btn-sm"> Delete </a>

                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection