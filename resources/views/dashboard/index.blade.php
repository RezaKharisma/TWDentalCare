<x-layouts.main>
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-header bg-success text-white py-2 px-3">Dokter</div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <div class="d-flex align-items-end">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <div class="d-flex alert-success p-3 rounded-3">
                                                <i class="fa fa-user-md fa-lg"></i> 
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="col mt-3">
                                        <h3>{{ $dokter }}</h3>
                                    </div>
                                </div>
                            </div>
                            <small>Total Dokter</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="/dashboard/dokter">Lihat Data</a>
                                <a class="dropdown-item" href="/dashboard/dokter/create">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-header bg-info text-white py-2 px-3">Perawat</div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <div class="d-flex align-items-end">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <div class="d-flex alert-info p-3 rounded-3">
                                                <i class="fa fa-user-nurse fa-lg"></i> 
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="col mt-3">
                                        <h3>{{ $perawat }}</h3>
                                    </div>
                                </div>
                            </div>
                            <small>Total Perawat</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="/dashboard/perawat">Lihat Data</a>
                                <a class="dropdown-item" href="/dashboard/perawat/create">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-header bg-danger text-white py-2 px-3">Pasien</div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <div class="d-flex align-items-end">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <div class="d-flex alert-danger p-3 rounded-3">
                                                <i class="fa fa-hospital-user fa-lg"></i> 
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="col mt-3">
                                        <h3>{{ $pasien }}</h3>
                                    </div>
                                </div>
                            </div>
                            <small>Total Pasien</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="/dashboard/pasien">Lihat Data</a>
                                <a class="dropdown-item" href="/dashboard/pasien/create">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-header bg-primary text-white py-2 px-3">Antrian</div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <div class="d-flex align-items-end">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <div class="d-flex alert-primary p-3 rounded-3">
                                                <i class="fa fa-users fa-lg"></i> 
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="col mt-3">
                                        <h3>{{ $dokter }}</h3>
                                    </div>
                                </div>
                            </div>
                            <small>Total Antrian Hari Ini</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="/dashboard/dokter">Lihat Data</a>
                                <a class="dropdown-item" href="/dashboard/dokter/create">Tambah Data</a>
                            </div>
                        </div>
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
</x-layouts.main>
