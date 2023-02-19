<div>
    <form class="mt-4">
        <x-input.text layout="H" label="nama lengkap" name="nama" icon="user" endText="Contoh" autofocus required/>
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
                <x-ui.button type="link" style="secondary" name="Kembali" href="/dashboard/dokter" icon="chevron-left me-1" />
                <x-ui.button type="submit" style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
