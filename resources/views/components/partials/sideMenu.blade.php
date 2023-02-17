<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- Logo TW Dental Care -->
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="">
                <img src="{{ asset('img/LogoProgram.png') }}" class="w-px-40 h-auto rounded-circle" />
            </span>
            <span class="menu-text fw-bolder ms-3 h4 mt-3">TWDental</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon fas fa-tachometer-alt"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Manajemen User -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Manajemen User</span>
        </li>
        <!-- Dokter -->
        <li class="menu-item {{ request()->segment(2) == 'dokter' ? 'active' : '' }}">
            <a href="/dashboard/dokter" class="menu-link ">
                <i class="menu-icon fas fa-user-md "></i>
                <div data-i18n="Basic">Dokter</div>
            </a>
        </li>
        <!-- Perawat -->
        <li class="menu-item {{ request()->segment(2) == 'perawat' ? 'active' : '' }}">
            <a href="/dashboard/perawat" class="menu-link">
                <i class="menu-icon fas fa-user-nurse"></i>
                <div data-i18n="Basic">Perawat</div>
            </a>
        </li>
        <!-- Pasien -->
        <li class="menu-item {{ request()->segment(2) == 'pasien' ? 'active' : '' }}">
            <a href="/dashboard/pasien" class="menu-link">
                <i class="menu-icon fas fa-hospital-user"></i>
                <div data-i18n="Basic">Pasien</div>
            </a>
        </li>

        <!-- Manajemen Rekam Medis -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Manajemen Rekam Medis</span>
        </li>
        <!-- Tambah Rekam Medis -->
        <li
            class="menu-item {{ request()->segment(2) == 'rekam_medis' && request()->segment(3) == '' ? 'active' : '' }}">
            <a href="/dashboard/rekam_medis" class="menu-link ">
                <i class="menu-icon fas fa-book-medical"></i>
                <div data-i18n="Basic">Rekam Medis</div>
            </a>
        </li>
        <!-- Tambah Rekam Medis -->
        <li
            class="menu-item {{ request()->segment(2) == 'rekam_medis' && request()->segment(3) == 'create' ? 'active' : '' }}">
            <a href="/dashboard/rekam_medis/create" class="menu-link ">
                <i class="menu-icon  fas fa-file-alt"></i>
                <div data-i18n="Basic">Tambah Rekam Medis</div>
            </a>
        </li>

        <!-- Laporan -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Laporan</span>
        </li>
        <!-- Lihat Laporan -->
        <li class="menu-item {{ request()->segment(2) == 'laporan' }}">
            <a href="/dashboard/laporan_keuangan" class="menu-link ">
                <i class="menu-icon fas fa-file"></i>
                <div data-i18n="Basic">Laporan Keuangan</div>
            </a>
        </li>
    </ul>
</aside>
