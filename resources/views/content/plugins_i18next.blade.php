@extends('layouts.main')
@section('title', 'i18Next')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/theme-demo.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb', ['category_1' => 'Core Plugins'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-shield-alt'></i> i18Next <sup
                    class='badge badge-success fw-500'>EXTENSION</sup>
                <small>
                    i18next is a full-featured i18n javascript library for translating your webapplication.
                </small>
            </h1>
        </div>
        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2 hidden-md-down">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">About</span>
                        <p>I18next is an internationalization-framework written in and for JavaScript. But it's much more
                            than that.
                            i18next goes beyond just providing the standard i18n features such as (plurals, context,
                            interpolation, format). It provides you with a complete solution to localize your product from
                            web to mobile and desktop.</p>
                        <p>
                            There are other variations and versions of this plugin that is a little more advanced. The one
                            we used is a bit ancient and for a purpose of demonstration only.
                        </p>
                        <p class="m-0">
                            Find in-depth, guidelines, tutorials and more on i18Next's <a
                                href="http://i18next.github.io/i18next/" target="_blank">Official Documentation</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Integration <span class="fw-300"><i>demo</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                The plugin file is loaded via our lazyload script mechanism
                                <code>initApp.loadScript("js/my_lovely_script.js", myFunction);</code>. This way the plugin
                                and the language file is loaded on demand of the user only. This is triggered using the data
                                attributes <code>data-action="lang"</code> <code>data-lang="en"</code>
                            </div>
                            <p>
                                <strong>Click on the buttons below to change the menu's language:</strong>
                            </p>
                            <div class="d-flex demo-h-spacing">
                                <a href="javascript:void(0);" class="btn btn-light btn-sm" data-action="lang"
                                    data-lang="en">English</a>
                                <a href="javascript:void(0);" class="btn btn-light btn-sm" data-action="lang"
                                    data-lang="ch">Chinese (traditional)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-2" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Configuration <span class="fw-300"><i>options</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                The lang files are stored in the <code>src/custom/lang</code> directory. Each language will
                                have its own file and structure looks like below:
                            </div>
                            <h5 class="frame-heading">Lang file layout</h5>
                            <div class="frame-wrap">
                                <pre class="prettyprint">
{
  "app": {
    "name": "SmartAdmin"
  },
  "nav": {
    "application_intel": "Analytics Intel",
    "application_intel_analytics_dashboard": "Analytics Dashboard",
    "application_intel_marketing_dashboard": "Marketing Dashboard",
  }
}</pre>
                            </div>
                            <h5 class="frame-heading">HTML indicators to trigger change</h5>
                            <div class="frame-wrap">
                                <pre class="prettyprint">
&lt;nav&gt;
    &lt;span data-i18n="nav.application_intel"&gt;&lt;/span&gt;
    &lt;span data-i18n="nav.application_intel_analytics_dashboard"&gt;&lt;/span&gt;
    &lt;span data-i18n="nav.application_intel_marketing_dashboard"&gt;&lt;/span&gt;
&lt;/nav&gt;</pre>
                            </div>
                            <h5 class="frame-heading">Script</h5>
                            <div class="frame-wrap">
                                <pre class="prettyprint">
$.i18n.init({
	resGetPath: 'media/data/__lng__.json',
	load: 'unspecific',
	fallbackLng: false,
	lng: applang
}, function (t){
	$('[data-i18n]').i18n();
});
</pre>
                            </div>
                            <h5 class="frame-heading">Dependencies (if you wish to load it manually)</h5>
                            <div class="frame-wrap">
                                <pre class="prettyprint">
&lt;script src="js/app.jquery.bundle.js"&gt;&lt;/script&gt;
&lt;script src="js/i18n/i18n.js"&gt;&lt;/script&gt;
</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
@endsection
