<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin') }}">
            <span class="align-middle">Laravel</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Beranda</li>

            <li class="sidebar-item {{ (request()->is('home*')) ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">Menu Utama</li>

            <li class="sidebar-item {{ (request()->is('post*')) ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('post') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Blog Post</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('kategori*')) ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('kategori') }}">
                    <i class="align-middle" data-feather="list"></i>
                    <span class="align-middle">Kategori</span>
                </a>
            </li>

            <li class="sidebar-header">Pengaturan</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">Manajemen Akun</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-forms.html">
                    <i class="align-middle" data-feather="check-square"></i>
                    <span class="align-middle">Profil Saya</span>
                </a>
            </li>
        </ul>
    </div>
</nav>