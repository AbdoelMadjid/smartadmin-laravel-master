@extends('layouts.main')
@section('title', 'Menu')
@section('pages-css')
    <link href="{{ asset('') }}assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
        rel="stylesheet" />
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
        <div class="card">
            <div class="card-header">
                <h4>Menu</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @can('create konfigurasi/menu')
                            <a class="mb-3 btn btn-primary action" href="{{ route('konfigurasi.menu.create') }}">Add</a>
                        @endcan
                        @can('sort konfigurasi/menu')
                            <a class="mb-3 btn btn-info sort" href="{{ route('konfigurasi.menu.sort') }}">Sort Menu</a>
                        @endcan
                    </div>
                </div>
                {{ $dataTable->table() }}
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script src="{{ asset('') }}assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

    {{ $dataTable->scripts() }}

    <script src="{{ asset('') }}assets/js/main.js"></script>

    <script>
        const datatable = 'menu-table';

        function handleMenuChange() {
            $('[name=level_menu]').on('change', function() {
                if (this.value == 'sub_menu') {
                    $('#main_menu_wrapper').removeClass('d-none')
                } else {
                    $('#main_menu_wrapper').addClass('d-none')
                }
            })
        }

        $('.sort').on('click', function(e) {
            e.preventDefault()

            handleAjax(this.href, 'put')
                .onSuccess(function(res) {
                    window.location.reload()
                }, false)
                .execute()
        })

        handleAction(datatable, function() {
            handleMenuChange()
        })
    </script>
@endsection
