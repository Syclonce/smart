@extends('layouts.auth.auth-layout')

@section('title', 'Register Account')

@section('content')
<div class="my-auto">

    <div>
        <h5 class="text-primary"> Reset Password</h5>
        <p class="text-muted">Reset Password with Skote.</p>
    </div>

    <div class="mt-4">

            @if(session('status'))
            <div class="alert alert-success text-center mb-4" role="alert">
                {{ session('status') }}
            </div>
            @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autofocus autocomplete="email">
                @error('email')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-end">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
            </div>
        </form>

        <div class="mt-5 text-center">
            <p>Remember It ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Sign In here</a> </p>
        </div>
    </div>
</div>
@endsection
