<x-layouts.main>
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Users</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">12</h3>
                                <small class="text-success">(100%)</small>
                            </div>
                            <small>Total Users</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Verified Users</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">5</h3>
                                <small class="text-success">(+95%)</small>
                            </div>
                            <small>Recent analytics </small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-user-check bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Duplicate Users</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">0</h3>
                                <small class="text-success">(0%)</small>
                            </div>
                            <small>Recent analytics</small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Verification Pending</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">7</h3>
                                <small class="text-danger">(+6%)</small>
                            </div>
                            <small>Recent analytics</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="fw-bold py-3">Dokter</h4>

    <div class="row mb-5">
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="{{ asset('img/avatars/1.png') }}" alt="Card image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nama Dokter</h5>
                            <p class="card-text">
                            <table>
                                <tr>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        : admin@gmail.com<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        NoTelp
                                    </td>
                                    <td>
                                        : 08129389128
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Alamat
                                    </td>
                                    <td>
                                        : Pemogan
                                    </td>
                                </tr>
                            </table>

                            </p>
                            <p class="card-text">
                                <small class="text-muted">Status : <span class="badge bg-success">Aktif</span></small> |
                                <small class="text-muted">Pasien Ditangani : <span
                                        class="badge badge-center bg-primary">20</span></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="{{ asset('img/avatars/1.png') }}" alt="Card image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nama Dokter</h5>
                            <p class="card-text">
                            <table>
                                <tr>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        : admin@gmail.com<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        NoTelp
                                    </td>
                                    <td>
                                        : 08129389128
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Alamat
                                    </td>
                                    <td>
                                        : Pemogan
                                    </td>
                                </tr>
                            </table>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Status : <span class="badge bg-danger">Tidak
                                        Aktif</span></small> |
                                <small class="text-muted">Pasien Ditangani : <span
                                        class="badge badge-center bg-primary">12</span></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:form-dokter />

    <x-ui.button type='button' name='Simpan' />

</x-layouts.main>
