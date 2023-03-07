<div>
    <form wire:submit.prevent='simpan' class="mt-4">
        @csrf
        <x-input.text layout="H" label="nama lengkap" name="nama" autofocus wire:model.lazy="form.nama" />
        <x-input.text layout="H" type="email" label="email" name="email" icon="envelope" wire:model.lazy="form.email" />
        <x-input.radio layout="H" label="Jenis Kelamin" name="jenisKelamin" :radios="$jenKelRadios" wire:model.lazy="form.jenisKelamin" />
        <x-input.text layout="H" label="tempat lahir" name="tempatLahir" wire:model.lazy="form.tempatLahir"/>
        <x-input.text layout="H" type="date" label="tanggal lahir" name="tanggalLahir" wire:model.lazy="form.tanggalLahir" />
        <x-input.text layout="H" type='number' label="umur" name="umur" endText="Tahun" wire:model.lazy="form.umur" readonly/>
        <x-input.select layout="H" label="Agama" name="agama" :options="$agamaSelect" wire:model.lazy="form.agama"/>
        <x-input.text layout="H" type="number" label="nomor telepon" name="nomorTelepon" icon="phone-alt" wire:model.lazy="form.nomorTelepon"/>
        <x-input.textarea layout="H" label="alamat" name="alamat" wire:model.lazy="form.alamat" />
        <x-input.textarea layout="H" label="pendidikan" name="pendidikan" wire:model.lazy="form.pendidikan"/>
        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-ui.button type="reset" wire:click='resetForm' style="warning" name="Reset" />
                <x-ui.button type="submit" style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
