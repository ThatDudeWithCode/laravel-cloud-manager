@extends('layouts.auth')

<!-- Authentication Meta Information -->
@section('title', 'Login')

<!-- Authentication Form Content -->
@section('content')
    <v-form id="login" route="{{ route('login') }}" method="POST">
        @csrf
        <v-input id="email" type="email" name="email" value="{{ old('email') }}" error="" label="{{ __('Email Address') }}">
            @error('email')
                <div class="flex items-center px-2 py-2 mt-1 text-red-700">
                    <span class="block pr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>
                    </span>
                    <span class="block">{{ $message }}</span>
                </div>


            @enderror
        </v-input>
        <v-input id="password" type="password" name="password" value="{{ old('password') }}" error="" label="{{ __('Password') }}">
            @error('email')
                <p class="input-alert">{{ $message }}</p>
            @enderror
        </v-input>
        <v-button id="login-button" type="submit">{{ __('Login') }}</v-button>
    </v-form>
@endsection

<!-- Authentication Routes -->
@section('actions')
    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    <a href="{{ route('register') }}">{{ __('Create Account') }}</a>
@endsection
