@extends('layouts.main')
@section('title', 'Base')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-light.css">
    <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-regular.css">
    <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-brands.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb', [
            'category_1' => 'Font Icons',
            'category_2' => 'Stack Icons',
        ])
        <div class="subheader">
            @component('layouts._page_heading', [
                'heading1' => 'Stack Icons:',
                'heading2' => 'Showcase',
                'pagedescription' => 'NextGen Icons description',
            ])
            @endcomponent
        </div>
        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base-2 icon-stack-3x color-primary-400"></i>
                        <i class="base-3 icon-stack-2x color-primary-600 opacity-70"></i>
                        <i class="fal fa-lightbulb icon-stack-1x text-white opacity-90"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">What are Base Icons?</span>
                        <br>
                        Base Icons are primarily used as a 'base' layer for <strong>Stack Icons</strong>, but may also be
                        used as regular general icons. To see base icons in action see the <a
                            href="/icons_stack_generate?layers=3" target="_blank">Stack Icons Showcase</a> page.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-sm-4 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center mb-g">
                <div class="rounded bg-white p-0 m-0 d-flex flex-column w-100 h-100">
                    <div class="rounded-top w-100 bg-primary-50">
                        <div
                            class="rounded-top d-flex align-items-center justify-content-center w-100 pt-3 pb-3 pr-2 pl-2 hover-bg">
                            <span class="icon-stack fa-6x">
                                <i class="base-2 icon-stack-3x color-primary-600"></i>
                                <i class="base-3 icon-stack-2x color-primary-700"></i>
                                <i class="ni ni-settings icon-stack-1x text-white"></i>
                            </span>
                        </div>
                    </div>
                    <div class="rounded-bottom p-1 w-100 d-flex justify-content-center align-items-center text-center">
                        <span class="d-block text-truncate text-muted">base-2</span>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center mb-g">
                <div class="rounded bg-white p-0 m-0 d-flex flex-column w-100 h-100">
                    <div class="rounded-top w-100 bg-warning-50">
                        <div
                            class="rounded-top d-flex align-items-center justify-content-center w-100 pt-3 pb-3 pr-2 pl-2 hover-bg">
                            <span class="icon-stack fa-6x">
                                <i class="base-9 icon-stack-3x color-success-400"></i>
                                <i class="base-2 icon-stack-2x color-success-500"></i>
                                <i class="ni ni-shield icon-stack-1x text-white"></i>
                            </span>
                        </div>
                    </div>
                    <div class="rounded-bottom p-1 w-100 d-flex justify-content-center align-items-center text-center">
                        <span class="d-block text-truncate text-muted">base-9</span>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center mb-g">
                <div class="rounded bg-white p-0 m-0 d-flex flex-column w-100 h-100">
                    <div class="rounded-top w-100 bg-info-50">
                        <div
                            class="rounded-top d-flex align-items-center justify-content-center w-100 pt-3 pb-3 pr-2 pl-2 hover-bg">
                            <span class="icon-stack fa-6x">
                                <i class="base-7 icon-stack-3x color-info-500"></i>
                                <i class="base-7 icon-stack-2x color-info-700"></i>
                                <i class="ni ni-graph icon-stack-1x text-white"></i>
                            </span>
                        </div>
                    </div>
                    <div class="rounded-bottom p-1 w-100 d-flex justify-content-center align-items-center text-center">
                        <span class="d-block text-truncate text-muted">base-7</span>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center mb-g">
                <div class="rounded bg-white p-0 m-0 d-flex flex-column w-100 h-100">
                    <div class="rounded-top w-100 bg-danger-50">
                        <div
                            class="rounded-top d-flex align-items-center justify-content-center w-100 pt-3 pb-3 pr-2 pl-2 hover-bg">
                            <span class="icon-stack fa-6x">
                                <i class="base-4 icon-stack-3x color-danger-500"></i>
                                <i class="base-4 icon-stack-1x color-danger-400"></i>
                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                            </span>
                        </div>
                    </div>
                    <div class="rounded-bottom p-1 w-100 d-flex justify-content-center align-items-center text-center">
                        <span class="d-block text-truncate text-muted">base-4</span>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center mb-g">
                <div class="rounded bg-white p-0 m-0 d-flex flex-column w-100 h-100">
                    <div class="rounded-top w-100 bg-warning-50">
                        <div
                            class="rounded-top d-flex align-items-center justify-content-center w-100 pt-3 pb-3 pr-2 pl-2 hover-bg">
                            <span class="icon-stack fa-6x">
                                <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                            </span>
                        </div>
                    </div>
                    <div class="rounded-bottom p-1 w-100 d-flex justify-content-center align-items-center text-center">
                        <span class="d-block text-truncate text-muted">base-16</span>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center mb-g">
                <div class="rounded bg-white p-0 m-0 d-flex flex-column w-100 h-100">
                    <div class="rounded-top w-100 bg-warning-50">
                        <div
                            class="rounded-top d-flex align-items-center justify-content-center w-100 pt-3 pb-3 pr-2 pl-2 hover-bg">
                            <span class="icon-stack fa-6x">
                                <i class="base-19 icon-stack-3x color-primary-400"></i>
                                <i class="base-7 icon-stack-2x color-primary-300"></i>
                                <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                <i class="base-7 icon-stack-1x color-primary-500"></i>
                                <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                            </span>
                        </div>
                    </div>
                    <div class="rounded-bottom p-1 w-100 d-flex justify-content-center align-items-center text-center">
                        <span class="d-block text-truncate text-muted">base-19</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
