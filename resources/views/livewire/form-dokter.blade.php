<div>
    <form action="" method="" class="mt-4" enctype="multipart/form-data">
        <x-input.text layout="H" label="nama lengkap" name="nama" autofocus required wire:model.debounce.150ms='nama' />
        <x-input.text layout="H" type="email" label="email" name="email" icon="envelope" required />
        <x-input.radio layout="H" label="Jenis Kelamin" name="jenisKelamin" :radios="$jenKelRadios" required />
        <x-input.text layout="H" label="tempat lahir" name="tempatLahir" />
        <x-input.text layout="H" type="date" label="tanggal lahir" name="tanggalLahir" value="{{ now() }}" required />
        <x-input.select layout="H" label="Agama" name="agama" :options="$agamaSelect" />
        <x-input.text layout="H" label="nomor telepon" name="nomorTelepon" icon="phone-alt" required />
        <x-input.textarea layout="H" label="alamat" name="alamat" required />
        <x-input.textarea layout="H" label="pendidikan" name="pendidikan" />
        {{-- <x-input.img-file layout="H" label="foto" name="foto" defaultImage="{{ asset('img/userImage.jpg') }}" width="150" required foto='{{ $foto }}' wire:model="foto"/> --}}
        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-ui.button type="link" style="secondary" name="Kembali" href="/dashboard/dokter" icon="chevron-left me-1" />
                <x-ui.button type="submit" style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
