<li class="nav-title">Master Data</li>
<li class="{{ Request::is('konfigurasi/*') ? 'active open' : '' }}">
    <a href="#" title="Konfigurasi" data-filter-tags="konfigurasi">
        <i class="fal fa-cog"></i>
        <span class="nav-link-text" data-i18n="nav.konfigurasi">Konfigurasi</span>
    </a>
    <ul>
        <li class="{{ Request::is('konfigurasi/menu*') ? 'active' : '' }}">
            <a href="/konfigurasi/menu" title="Konfigurasi Menu" data-filter-tags="konfigurasi menu">
                <span class="nav-link-text" data-i18n="nav.konfigurasi_menu">Menu</span>
            </a>
        </li>
    </ul>
</li>
