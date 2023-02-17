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
                    <form class="mt-4">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Lengkap <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Masukan nama lengkap" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Email <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="john.doe">
                                    <span class="input-group-text">@example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin <span class="required">*</span></label>
                            <div class="col-md">
                                <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="Laki - laki" id="defaultRadio1">
                                    <label class="form-check-label">
                                        Laki - laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="Perempuan" id="defaultRadio2">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2 col-form-label">Tempat Lahir</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Masukan tempat lahir">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" value="2021-06-18" id="html5-date-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Masukkan umur">
                                    <span class="input-group-text">Tahun</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-select">
                                    <option disabled selected>Pilih Agama...</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label">Nomor Telepon <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                    <input type="text" class="form-control phone-mask" placeholder="Masukkan nomor telepon">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alamat <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Masukkan alamat"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Masukkan pendidikan"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <div class="mb-3">
                                    <img src="{{ asset('img/userImage.jpg') }}" class="img-thumbnail" alt="user image" width="150">
                                </div>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <a class="btn btn-secondary" href="/dashboard/dokter"><i class="fa fa-chevron-left me-1"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.main>