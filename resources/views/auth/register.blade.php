@extends('layouts.auth.auth-layout')

@section('title', 'Register Account')

@section('content')
<div class="my-auto">
    <div>
        <h5 class="text-primary">Register account</h5>
        <p class="text-muted">Get your free Skote account now.</p>
    </div>

    <div class="mt-4">
        <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">{{ __('Username') }}</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}" required>
                @error('username')
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

            <div>
                <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
            </div>


            <div class="mt-4 d-grid">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
            </div>
        </form>

        <div class="mt-5 text-center">
            <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login</a> </p>
        </div>

    </div>
</div>
@endsection
