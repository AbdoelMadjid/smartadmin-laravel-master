@extends('layouts.main')
@section('title', 'Privacy')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb', ['category_1' => 'Application Intel'])
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'info-circle',
                'heading1' => 'Privacy',
                'pagedescription' => 'SmartAdmin Privacy',
            ])
            @endcomponent
        </div>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h2>Privacy</h2>
            <p class="mb-g">
                Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your
                personal data are our prime concerns.
                We will only use your personal information to administer your account, provide the products and services you
                have requested from us, and to keep you informed about our products and services (if you have consented to
                this).
                We only use your data for the purposes for which it was collected and, where relevant, to meet local legal
                obligations.
                We will retain your personal information only for as long as is necessary for the purposes for which the
                information was collected, or as long as is required pursuant to law.
            </p>
            <h3>Cookies and other similar technologies</h3>
            <p>
                We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device
                identifiers). Cookies are text files placed on your computer to collect standard internet log information
                and visitor behaviour information. This information is used to track visitor use of the website and to
                compile statistical reports on website activity. We register your interaction with our services in order to
                improve our website, content and services. Our use of such technologies and the data collected is described
                in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.
            </p>
        </div>
    </main>
@endsection
