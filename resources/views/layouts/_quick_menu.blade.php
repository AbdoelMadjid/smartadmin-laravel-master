<nav class="shortcut-menu d-none d-sm-block">
    <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
    <label for="menu_open" class="menu-open-button ">
        <span class="app-shortcut-icon d-block"></span>
    </label>
    <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
        <i class="fal fa-arrow-up"></i>
    </a>
    <form method="POST" action="{{ route('logout') }}" class="menu-item btn">
        @csrf
        <a href="{{ route('logout') }}" id="ya-atau-tidak" class="menu-item btn" data-title="Konfirmasi"
            data-message="Apakah Anda yakin ingin logout?" data-redirect-url="/" data-toggle="tooltip"
            data-placement="left" title="Logout">
            <i class="fal fa-sign-out"></i>
        </a>
    </form>
    <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left"
        title="Full Screen">
        <i class="fal fa-expand"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left"
        title="Print page">
        <i class="fal fa-print"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left"
        title="Voice command">
        <i class="fal fa-microphone"></i>
    </a>
</nav>
