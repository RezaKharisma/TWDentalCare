<div>
    <form wire:submit.prevent='simpan' class="mt-4">
        <x-input.text layout='H' label='nomor rekam medis' name='noRM' value='RM001' wire:model.lazy="form.noRM" readonly />
        <x-input.text layout='H' label='dokter' name='idDokter' wire:model.lazy="form.idDokter" required />
        <x-input.select layout='H' label='dokter' :options='$dataDokter' />
        <x-input.text layout='H' label='perawat' name='idPerawat' wire:model.lazy="form.idPerawat" required />

        <hr class="m-0 mb-4 mt-4">

        <x-input.text layout='H' label='pasien' name='idPasien' wire:model.lazy="form.idPasien" required />
        <x-input.text layout='H' label='umur' name='umur' wire:model.lazy="form.umur" readonly />
        <x-input.textarea layout='H' label='pekerjaan' name='pekerjaan' wire:model.lazy="form.pekerjaan" readonly />
        <x-input.text layout='H' label='kunjungan' name='kunjungan' wire:model.lazy="form.kunjungan" readonly />

        <hr class="m-0 mb-4 mt-4">

        <x-input.textarea layout='H' label='alergi' name='alergi' wire:model.lazy="form.alergi" />
        <x-input.textarea layout='H' label='anamnesis' name='anamnesis' wire:model.lazy="form.anamnesis" />
        <x-input.textarea layout='H' label='diagnosis' name='diagnosis' wire:model.lazy="form.diagnosis" />
        <x-input.textarea layout='H' label='riwayat pasien' name='riwayatPasien' wire:model.lazy="form.riwayatPasien" />
        <x-input.textarea layout='H' label='perawatan' name='perawatan' wire:model.lazy="form.perawatan" />
        <x-input.text layout='H' label='biaya' name='biaya' icon="Rp" wire:model.lazy="form.biaya" placeholder="00.0" />

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-ui.button type="reset" wire:click='resetForm' style="warning" name="Reset" />
                <x-ui.button type="submit" style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
