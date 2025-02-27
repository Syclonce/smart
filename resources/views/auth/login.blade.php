@extends('layouts.auth.auth-layout')

@section('title', 'Register Account')

@section('content')
<div class="my-auto">
    <div>
        <h5 class="text-primary">Welcome Back !</h5>
        <p class="text-muted">Sign in to continue.</p>
    </div>

    <div class="mt-4">
        @if(session('status'))
            <div class="alert alert-success text-center mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="login" class="form-label">login</label>
                <input type="login" class="form-control" id="login" name="login" value="{{ old('login') }}" required autocomplete="login" placeholder="Enter username">
                @error('login')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="float-end">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-muted">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>
                <label for="password" class="form-label">Password</label>
                <div class="input-group auth-pass-inputgroup">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required autocomplete="current-password">
                    <button class="btn btn-light" type="button" id="password-addon">
                        <i class="mdi mdi-eye-outline"></i>
                    </button>
                </div>
                @error('password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-check mt-4">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label class="form-check-label" for="remember_me">
                    {{ __('Remember me') }}
                </label>
            </div>


            <div class="mt-3 d-grid">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
            </div>

        </form>
        <div class="mt-5 text-center">
            <p>Don't have an account ? <a href="{{ route('register') }}" class="fw-medium text-primary"> Signup now </a> </p>
        </div>
    </div>
</div>
@endsection
