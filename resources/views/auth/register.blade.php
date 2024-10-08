@extends('layouts.main_auth')
@section('title', 'Register')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-brands.css">
@endsection
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
                <div class="col col-md-6 col-lg-7 hidden-sm-down">
                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                        The simplest UI toolkit for developers &amp; programmers
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                            Presenting you with the next level of innovative UX design and engineering. The
                            most modular toolkit available with over 600+ layout permutations. Experience
                            the simplicity of SmartAdmin, everywhere you go!
                        </small>
                    </h2>
                    <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                    <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                        <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                            Find us on social media
                        </div>
                        <div class="d-flex flex-row opacity-70">
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-google-plus-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                        Secure login
                    </h1>
                    <div class="card p-4 rounded-plus bg-faded">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" type="text" name="name" :value="old('name')" required
                                    autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" type="password" name="password" required
                                    autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                                    required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" />
                            </div>
                            <div class="form-group text-left">
                                @if (Route::has('password.request'))
                                    <a
                                        href="{{ route('password.request') }}"><strong>{{ __('Forgot your password?') }}</strong></a>
                                @endif
                            </div>
                            <x-primary-button class="float-right">
                                {{ __('Register') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_pengembang ?? '' }} by&nbsp;<a
                    href="https://laravel.com/docs/10.x" title='laravel.com' class="opacity-90" target="_blank">Laravel
                    v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
            </div>
        </div>
    </div>
@endsection
