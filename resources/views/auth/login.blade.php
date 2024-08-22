<!DOCTYPE html>
<!--
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.5.1
Author: Sunnyat A.
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0?ref=myorange
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('layouts._head')
        <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/page-login-alt.css">
    </head>
    <!-- BEGIN Body -->
    <!-- Possible Classes

  * 'header-function-fixed'         - header is in a fixed at all times
  * 'nav-function-fixed'            - left panel is fixed
  * 'nav-function-minify'			  - skew nav to maximize space
  * 'nav-function-hidden'           - roll mouse on edge to reveal
  * 'nav-function-top'              - relocate left pane to top
  * 'mod-main-boxed'                - encapsulates to a container
  * 'nav-mobile-push'               - content pushed on menu reveal
  * 'nav-mobile-no-overlay'         - removes mesh on menu reveal
  * 'nav-mobile-slide-out'          - content overlaps menu
  * 'mod-bigger-font'               - content fonts are bigger for readability
  * 'mod-high-contrast'             - 4.5:1 text contrast ratio
  * 'mod-color-blind'               - color vision deficiency
  * 'mod-pace-custom'               - preloader will be inside content
  * 'mod-clean-page-bg'             - adds more whitespace
  * 'mod-hide-nav-icons'            - invisible navigation icons
  * 'mod-disable-animation'         - disables css based animations
  * 'mod-hide-info-card'            - hides info card from left panel
  * 'mod-lean-subheader'            - distinguished page header
  * 'mod-nav-link'                  - clear breakdown of nav links

  >>> more settings are described inside documentation page >>>
 -->

    <body>
        <!-- DOC: script to save and load page settings -->
        @include('layouts._script_page_settings')

        <div class="blankpage-form-field">
            <div
                class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="{{ asset('') }}assets/img/{{ $profileApp->app_logo ?? '' }}"
                        alt="{{ $profileApp->app_nama ?? '' }} WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">{{ $profileApp->app_nama ?? '' }} WebApp</span>

                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <x-breeze.auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-breeze.input-error :messages="$errors->get('email')" />
                    <x-breeze.input-error :messages="$errors->get('password')" />
                    <div class="form-group">
                        <x-breeze.input-label for="email" :value="__('Email')" />
                        <x-breeze.text-input id="email" type="email" name="email" :value="old('email')" required
                            autofocus autocomplete="username" />
                    </div>
                    <div class="form-group">
                        <x-breeze.input-label for="password" :value="__('Password')" />
                        <x-breeze.text-input id="password" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>
                    <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                            <label class="custom-control-label" for="remember_me"> {{ __('Remember me') }}</label>
                        </div>
                    </div>
                    <x-breeze.primary-button class="float-right">
                        {{ __('Login') }}
                    </x-breeze.primary-button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"><strong>{{ __('Forgot your password?') }}</strong></a>
                @endif
                | <a href="{{ route('register') }}"><strong>{{ __('Register Account') }}</strong></a>
            </div>
        </div>
        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
            {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_pengembang ?? '' }} by&nbsp;<a
                href="https://laravel.com/docs/10.x" title='laravel.com' class="opacity-90" target="_blank">Laravel
                v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
        </div>
        <video poster="{{ asset('') }}assets/img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted
            loop>
            <source src="{{ asset('') }}assets/media/video/cc.webm" type="video/webm">
            <source src="{{ asset('') }}assets/media/video/cc.mp4" type="video/mp4">
        </video>
        <!-- BEGIN Color profile -->
        <!-- this area is hidden and will not be seen on screens or screen readers -->
        <!-- we use this only for CSS color refernce for JS stuff -->
        @include('layouts._color_profile')
        <!-- END Color profile -->
        @include('layouts._script_bundle')
    </body>
    <!-- END Body -->

</html>
