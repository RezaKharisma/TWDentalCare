<x-layouts.main title="Tambah Data Rekam Medis">

    <h4 class="fw-bold mt-3">Tambah Data Rekam Medis</h4>
    <nav class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">
                <a href="/dashboard/rekam_medis">Rekam Medis</a>
            </li>
            <li class="breadcrumb-item active">Tambah Data Rekam Medis</li>
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
                    <h5 class="mb-0">Form Rekam Medis</h5>
                </div>
                <form class="mt-4">
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nomor Rekam Medis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" disabled value="RM001">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Dokter <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Masukan nama lengkap dokter" autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Perawat <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Masukan nama lengkap perawat" autofocus>
                            </div>
                        </div>
                    </div>

                    <hr class="m-0 mb-3 mt-3">

                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pasien <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Masukan nama lengkap pasien" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" disabled></textarea>
                            </div>
                        </div>
                        <div class="row ">
                            <label class="col-sm-2 col-form-label">Kunjungan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                    </div>

                    <hr class="m-0 mb-2 mt-3">

                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Alergi</label>
                                <textarea class="form-control" placeholder="Masukkan alergi"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Anamnesis</label>
                                <textarea class="form-control" placeholder="Masukkan anamnesis"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Diagnosis</label>
                                <textarea class="form-control" placeholder="Masukkan diagnosis"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Riwayat Pasien</label>
                                <textarea class="form-control" placeholder="Masukkan riwayat pasien"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Perawatan</label>
                                <textarea class="form-control" placeholder="Masukkan perawatan"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Biaya</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" name="phoneNumber" class="form-control" placeholder="00,0">
                                </div>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-sm-10">
                                <a class="btn btn-secondary" href="/dashboard/rekam_medis"><i class="fa fa-chevron-left me-1"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.main>