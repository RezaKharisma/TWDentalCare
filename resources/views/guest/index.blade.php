<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>TW Dental Care</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/LogoProgram.ico') }}" />

    <!-- Fonts -->
    <link href="{{ asset('fonts/PublicSans.css') }}" rel="stylesheet" />

    <!-- Icons -->
    <link href="{{ asset('fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/solid.css') }}" rel="stylesheet">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('js/config.js') }}"></script>

    @livewireStyles

    @yield('style')
</head>

<body>

@php
    setlocale(LC_TIME, 'id_ID');
    \Carbon\Carbon::setLocale('id');
@endphp

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar layout-without-menu">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row mb-4">
                        <div class="col-xxl">
                            <div class="card">
                                <h5 class="card-header bg-secondary text-white">Informasi Pendaftaran Antrian Online</h5>
                                <div class="card-body">
                                    <div class="list-group list-group-flush mt-4">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            Tanda (<span class="required">*</span>) wajib diisi.
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            Lihat daftar antrian disini.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl">
                            <div class="card mb-4 ">
                                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                                    <h5 class="mb-0">Daftar Pasien</h5>
                                </div>
                                <div class="card-body">
                                    <livewire:daftar-antrian />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <b>TW Dental Care</b>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->

        </div>
        <!-- / Layout container -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('js/bootstrap-autocomplete.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="{{ asset('vendor/js/buttons.js') }}"></script>

@livewireScripts

<script src="{{ asset('js/ui-toasts.js') }}"></script>

<x-livewire-alert::scripts />

</body>

</html>
