<x-layouts.main title="Tambah Data Dokter">

    <h4 class="fw-bold mt-3">Tambah Data Dokter</h4>
    <nav class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">
                <a href="/dashboard/dokter">Dokter</a>
            </li>
            <li class="breadcrumb-item active">Tambah Data Dokter</li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-xxl">
            <x-ui.card cardHeader="Informasi">
                <div class="list-group list-group-flush mt-4">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                        Tanda (<span class="required">*</span>) wajib diisi.
                    </a>
                </div>
            </x-ui.card>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4 ">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Form Dokter</h5>
                </div>
                <div class="card-body">
                    <livewire:form-dokter />
                </div>
            </div>
        </div>
    </div>

    <div class="bs-toast toast fade bg-primary" role="alert" aria-live="assertive" aria-atomic="true" id="toastAlert">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Bootstrap</div>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
    </div>
    </div>

</x-layouts.main>
