<meta charset="utf-8">
<title>
    @yield('title', 'My App') - {{ $profileApp->app_nama ?? '' }}
</title>
<meta name="description" content="@yield('title', 'My App')">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf_token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
<!-- Call App Mode on ios devices -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Remove Tap Highlight on Windows Phone IE -->
<meta name="msapplication-tap-highlight" content="no">
<!-- base css -->
<link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/vendors.bundle.css">
<link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/app.bundle.css">
<link id="mytheme" rel="stylesheet" media="screen, print" href="#">
<link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/skins/skin-master.css">
<!-- Place favicon.ico in the root directory -->
<link rel="apple-touch-icon" sizes="180x180"
    href="{{ asset('') }}assets/img/favicon/{{ $profileApp->app_icon ?? '' }}">
<link rel="icon" type="image/png" sizes="32x32"
    href="{{ asset('') }}assets/img/favicon/{{ $profileApp->app_icon ?? '' }}">
<link rel="mask-icon" href="{{ asset('') }}assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">

<link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-duotone.css">
<link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-solid.css">
<link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-light.css">
<link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-regular.css">
<link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/fa-brands.css">
