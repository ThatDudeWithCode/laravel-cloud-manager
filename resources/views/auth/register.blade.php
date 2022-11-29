@extends('layouts.auth')

<!-- Authentication Meta Information -->
@section('title', 'Register')

<!-- Authentication Form Content -->
@section('content')
    <v-form id="register" route="{{ route('register') }}" method="POST">
        @csrf
        <v-input id="name" type="text" name="name" value="{{ old('name') }}" error="" label="{{ __('Username') }}"></v-input>
        <v-input id="email" type="email" name="email" value="{{ old('email') }}" error="" label="{{ __('Email Address') }}"></v-input>
        <v-input id="password" type="password" name="password" value="{{ old('password') }}" error="" label="{{ __('Password') }}"></v-input>
        <v-input id="password_confirmation" type="password" name="password_confirmation" label="{{ __('Confirm Password') }}"></v-input>
        <v-button id="register" type="submit">{{ __('Register') }}</v-button>
    </v-form>
@endsection

<!-- Authentication Routes -->
@section('actions')
    <a href="{{ route('login') }}">{{ __('Already Have An Account?') }}</a>
@endsection
