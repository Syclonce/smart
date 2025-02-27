@extends('layouts.auth.auth-layout')

@section('title', 'Register Account')

@section('content')
<div class="my-auto">
    <div>
        <h5 class="text-primary">Register account</h5>
        <p class="text-muted">Get your free Skote account now.</p>
    </div>

    <div class="mt-4">
        <form method="POST" action="{{ route('password.store') }}" class="needs-validation" novalidate>
            @csrf

            <!-- Token Reset Password -->
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $request->email) }}" required autocomplete="username" autofocus>
                @error('email')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input type="password" id="password" name="password" class="form-control" required autocomplete="new-password">
                @error('password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required autocomplete="new-password">
                @error('password_confirmation')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-4 d-grid">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Reset Password</button>
            </div>
        </form>

    </div>
</div>
@endsection
