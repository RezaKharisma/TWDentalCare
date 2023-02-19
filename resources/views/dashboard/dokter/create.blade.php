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
            <div class="card">
                <h5 class="card-header bg-secondary text-white">Informasi</h5>
                <div class="card-body">
                    <div class="list-group list-group-flush mt-4">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                            Tanda (<span class="required">*</span>) wajib diisi.
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
                    <h5 class="mb-0">Form Dokter</h5>
                </div>
                <div class="card-body">
                    <livewire:form-dokter />
                </div>
            </div>
        </div>
    </div>

</x-layouts.main>