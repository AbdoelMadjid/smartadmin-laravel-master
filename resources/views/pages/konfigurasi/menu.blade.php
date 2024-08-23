@extends('layouts.main')
@section('title', 'Menu')
@section('pages-css')
    {{-- <link href="https://cdn.datatables.net/v/dt/dt-2.1.4/af-2.7.0/datatables.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" media="screen, print"
        href="{{ asset('') }}assets/css/datagrid/datatables/datatables.bundle.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb')
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'list-alt',
                'heading1' => 'Menu',
            ])
            @endcomponent
        </div>
        <div class="card mb-g border shadow-0">
            <div class="card-header">
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <span class="h6 font-weight-bold text-uppercase">Daftar Menu</span>
                    </div>
                    <div class="col d-flex">
                        @can('create konfigurasi/menu')
                            <a href="javascript:void(0);"
                                class="btn btn-outline-success btn-sm ml-auto mr-2 flex-shrink-0 waves-effect waves-themed">
                                <i class="fal fa-pencil-alt"></i> Add</a>
                        @endcan
                        <a href="javascript:void(0);"
                            class="btn btn-outline-danger btn-sm flex-shrink-0 waves-effect waves-themed"><i
                                class="fal fa-sort"></i> Sort</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    {{-- <script src="https://cdn.datatables.net/v/dt/dt-2.1.4/af-2.7.0/datatables.min.js"></script> --}}
    <script src="{{ asset('') }}assets/js/datagrid/datatables/datatables.bundle.js"></script>
    {{ $dataTable->scripts() }}
@endsection
