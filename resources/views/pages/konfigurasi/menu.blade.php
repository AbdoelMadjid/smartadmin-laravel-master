@extends('layouts.main')
@section('title', 'Menu')
@section('pages-css')
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.4/af-2.7.0/datatables.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" media="screen, print"
        href="{{ asset('') }}assets/css/datagrid/datatables/datatables.bundle.css"> --}}
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

        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">

            {{ $dataTable->table() }}

        </div>
    </main>
@endsection
@section('pages-script')
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.4/af-2.7.0/datatables.min.js"></script>
    {{-- <script src="{{ asset('') }}assets/js/datagrid/datatables/datatables.bundle.js"></script> --}}
    {{ $dataTable->scripts() }}
@endsection
