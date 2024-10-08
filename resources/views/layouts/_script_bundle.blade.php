    <!--
        base vendor bundle:
        DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations
        + pace.js (recommended)
        + jquery.js (core)
        + jquery-ui-cust.js (core)
        + popper.js (core)
        + bootstrap.js (core)
        + slimscroll.js (extension)
        + app.navigation.js (core)
        + ba-throttle-debounce.js (core)
        + waves.js (extension)
        + smartpanels.js (extension)
        + src/../jquery-snippets.js (core)
    -->
    <script src="{{ asset('') }}assets/js/vendors.bundle.js"></script>
    <script src="{{ asset('') }}assets/js/app.bundle.js"></script>
    <script src="{{ asset('') }}assets/js/confirmRedirect.js"></script>
    <script src="{{ asset('') }}assets/js/customAlert.js"></script>
    {{--
    <script type="text/javascript">
        /* Activate smart panels */
        $('#js-page-content').smartPanel();
    </script>
    --}}
    <script src="{{ asset('') }}assets/js/notifications/toastr/toastr.js"></script>
