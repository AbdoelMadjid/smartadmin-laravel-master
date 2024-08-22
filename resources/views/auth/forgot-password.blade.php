@extends('layouts.main_auth')
@section('title', 'Login Forget')
@section('pages-content')
    @component('layouts._auth_header')
        <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down">
            Already a member?
        </span>
        <a href="{{ route('login') }}" class="btn-link text-white ml-auto ml-sm-0">
            Secure Login
        </a>
    @endcomponent
    <div class="flex-1"
        style="background: url({{ asset('') }}assets/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                        "My dog ate my password"
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60 hidden-sm-down">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </small>
                    </h2>
                </div>
                <div class="col-xl-6 ml-auto mr-auto">
                    <div class="card p-4 rounded-plus bg-faded">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" type="email" name="email" :value="old('email')" required
                                    autofocus />
                                <x-input-error :messages="$errors->get('email')" />
                            </div>
                            <x-primary-button class="float-right">
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
            {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_pengembang ?? '' }} by&nbsp;<a
                href="https://laravel.com/docs/10.x" title='laravel.com' class="opacity-90" target="_blank">Laravel
                v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
        </div>
    </div>
@endsection
