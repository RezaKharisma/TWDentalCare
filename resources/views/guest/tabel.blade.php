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
                    <h1 class="d-flex justify-content-center">List Antrian</h1>
                    <h4 class="d-flex justify-content-center">{{ $date }}</h4>
                    <div class="row mt-5">
                        <div class="col">
                            <a class="btn text-white btn-primary mb-3" href="/daftar-antrian">Daftar Antrian</a>
                            <div class="card">
                                <h5 class="card-header">Data Dokter</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Project</th>
                                                <th>Client</th>
                                                <th>Users</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                                <td>Albert Cook</td>
                                                <td>

                                                </td>
                                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-1"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                                                <td>Barry Hunter</td>
                                                <td>

                                                </td>
                                                <td><span class="badge bg-label-success me-1">Completed</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-2"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                                                <td>Trevor Baker</td>
                                                <td>

                                                </td>
                                                <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-2"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                                </td>
                                                <td>Jerry Milton</td>
                                                <td>

                                                </td>
                                                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-2"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
