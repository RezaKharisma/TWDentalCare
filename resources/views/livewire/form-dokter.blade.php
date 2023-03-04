<div>
    <form action="/dashboard/dokter" method="POST" class="mt-4" enctype="multipart/form-data">
        @csrf
        <x-input.text layout="H" label="nama lengkap" name="nama" autofocus wire:model.lazy="form.nama" required />
        <x-input.text layout="H" type="email" label="email" name="email" icon="envelope" wire:model.lazy="form.email" required />
        <x-input.radio layout="H" label="Jenis Kelamin" name="jenisKelamin" :radios="$jenKelRadios" wire:model.lazy="form.jenisKelamin" required />
        <x-input.text layout="H" label="tempat lahir" name="tempatLahir" wire:model.lazy="form.tempatLahir"/>
        <x-input.text layout="H" type="date" label="tanggal lahir" name="tanggalLahir" wire:model.lazy="form.tanggalLahir" required />
        <x-input.text layout="H" type='number' label="umur" name="umur" endText="Tahun" wire:model.lazy="form.umur" readonly/>
        <x-input.select layout="H" label="Agama" name="agama" :options="$agamaSelect" wire:model.lazy="form.agama"/>
        <x-input.text layout="H" type="number" label="nomor telepon" name="nomorTelepon" icon="phone-alt" required wire:model.lazy="form.nomorTelepon"/>
        <x-input.textarea layout="H" label="alamat" name="alamat" wire:model.lazy="form.alamat" required />
        <x-input.textarea layout="H" label="pendidikan" name="pendidikan" wire:model.lazy="form.pendidikan"/>
        <x-input.img-file layout="H" label="foto" name="foto" :defaultImage="asset('img/userImage.jpg')" width="150" :foto="$foto" wire:model="foto" required/>
        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-ui.button type="link" style="secondary" name="Kembali" href="/dashboard/dokter" icon="chevron-left me-1" />
                <x-ui.button type="reset" wire:click='resetForm' style="warning" name="Reset" />
                <x-ui.button type="submit" style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
