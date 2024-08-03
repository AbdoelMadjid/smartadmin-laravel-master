@extends('layouts.main')
@section('title', 'Menu')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/css/theme-demo.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb', ['category_1' => 'Konfigurasi'])
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'info-circle',
                'heading1' => 'Menu',
                'pagedescription' => 'A brief introduction to this WebApp',
            ])
            @endcomponent
        </div>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            {!! $dataTable->table() !!}
        </div>
    </main>
@endsection
@section('pages-script')
    <script src="/assets/js/datagrid/datatables/datatables.bundle.js"></script>
    {!! $dataTable->scripts() !!}
@endsection
