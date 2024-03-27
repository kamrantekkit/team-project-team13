@extends('layout.admin_layout_dashboard')

@section('content')
    <h1 class="playportal-page-title">Editing Customer {{$customer->first_name}} {{$customer->last_name}} </h1>

    <form action="{{route("admin.customers-management.update")}}" method="post" class="needs-validation" novalidate>
        @csrf
        <input type="hidden" id="customer_id" name="customer_id" value="{{ $customer->id }}">

        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $customer->first_name) }}" required>
            @error('first_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $customer->last_name) }}" required>
            @error('last_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
