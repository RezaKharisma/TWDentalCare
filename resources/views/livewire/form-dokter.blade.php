<div>
    <form action="/dashboard/dokter" method="POST" class="mt-4" enctype="multipart/form-data">
        @csrf
        <x-input.text layout="H" label="nama lengkap" name="nama" required autofocus wire:model.lazy="form.nama" />
        <x-input.text layout="H" type="email" label="email" name="email" icon="envelope" required wire:model.lazy="form.email" />
        <x-input.radio layout="H" label="Jenis Kelamin" name="jenisKelamin" :radios="$jenKelRadios" required wire:model.lazy="form.jenisKelamin"/>
        <x-input.text layout="H" label="tempat lahir" name="tempatLahir" wire:model.lazy="form.tempatLahir"/>
        <x-input.text layout="H" type="date" label="tanggal lahir" name="tanggalLahir" value="2023-02-27" required wire:model.lazy="form.tanggalLahir"/>
        <x-input.text layout="H" type='number' label="umur" name="umur" endText="Tahun" required wire:model.lazy="form.umur"/>
        <x-input.select layout="H" label="Agama" name="agama" :options="$agamaSelect" wire:model.lazy="form.agama"/>
        <x-input.text layout="H" type="number" label="nomor telepon" name="nomorTelepon" icon="phone-alt" required wire:model.lazy="form.nomorTelepon"/>
        <x-input.textarea layout="H" label="alamat" name="alamat" required wire:model.lazy="form.alamat"/>
        <x-input.textarea layout="H" label="pendidikan" name="pendidikan" wire:model.lazy="form.pendidikan"/>
        <x-input.img-file layout="H" label="foto" name="foto" :defaultImage="asset('img/userImage.jpg')" width="150" :foto="$foto" required wire:model="foto"/>
        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-ui.button type="link" style="secondary" name="Kembali" href="/dashboard/dokter" icon="chevron-left me-1" />
                <x-ui.button type="reset" wire:click='resetForm' style="warning" name="Reset" />
                <x-ui.button type="{{ $buttonType }}" wire:click='simpan' style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
