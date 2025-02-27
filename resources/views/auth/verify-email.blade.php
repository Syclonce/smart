@extends('layouts.auth.auth-layout')

@section('title', 'Register Account')

@section('content')
<div class="my-auto">

    <div class="text-center">

        <div class="avatar-md mx-auto">
            <div class="avatar-title rounded-circle bg-light">
                <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
            </div>
        </div>

        <div class="p-2 mt-4">
            <h4>Verify your email</h4>
            <p>We have sent a verification email to <span class="fw-semibold">{{ Auth::user()->email }}</span>. Please check your inbox.</p>
            @if (session()->has('status') && session('status') === 'verification-link-sent')
                <div class="alert alert-success mb-4 text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4">
                <a href="#" class="btn btn-success w-md" onclick="document.getElementById('verification-form').submit();">
                    Verify email
                </a>
            </div>

            <form id="verification-form" method="POST" action="{{ route('verification.send') }}" style="display: none;">
                @csrf
            </form>

        </div>
    </div>
</div>
@endsection
