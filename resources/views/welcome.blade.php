@extends('layouts.main_auth')
@section('title', 'Welcome')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/assets/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('layouts._auth_header')
        <div class="demo ml-auto mt-3">
            @if (Route::has('login'))
                @auth
                    <a class="btn btn-primary btn-sm" href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <div class="btn-group">
                        <button class="btn btn-primary btn-sm dropdown-toggle waves-effect waves-themed" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User Auth
                        </button>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">Registrasi</a>
                            @endif
                        </div>
                    </div>
                @endauth
            @endif
        @endcomponent
        <div class="d-flex flex-1"
            style="background: url(/assets/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
            <div
                class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
                <div class="text-center text-white mb-5 pb-5">
                    <div class="py-3">
                        <img src="/assets/img/{{ $profileApp->app_logo ?? '' }}"
                            alt="{{ $profileApp->app_nama ?? '' }} WebApp" aria-roledescription="logo"
                            class="img-responsive rounded-circle img-thumbnail">
                    </div>
                    <div class="text-center">
                        <h1>{{ $profileApp->app_nama ?? '' }} WebApp</h1>
                        @if (Route::has('login'))
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    {{ Auth::user()->name }} anda sudah login sebagai {{ Auth::user()->getRoleLabel() }}<br>
                                    silakan
                                    @csrf
                                    <a href="{{ route('logout') }}" id="ya-atau-tidak" data-title="Konfirmasi"
                                        data-message="Apakah Anda yakin ingin logout?" data-redirect-url="/"
                                        title="Logout">Logout</a>
                                    atau kembali ke <a href="{{ url('/dashboard') }}">Dashboard</a>
                                </form>
                            @else
                            @endauth
                        @endif
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
    @section('pages-script')
        <script>
            $("#js-login-btn").click(function(event) {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });
        </script>
    @endsection
