<div>
    <form wire:submit.prevent='simpan' class="mt-4">
        <x-input.text layout='H' label='nomor rekam medis' name='noRM' value='RM001' wire:model.lazy="form.noRM" readonly />
        <hr class="m-0 mb-4 mt-4">
        <livewire:tools.autocomplete-dokter layout='H' label='dokter' name='idDokter' required />
        <hr class="m-0 mb-4 mt-4">
        <livewire:tools.autocomplete-perawat layout='H' label='perawat' name='idPerawat' required />
        <hr class="m-0 mb-4 mt-4">
        <livewire:tools.autocomplete-pasien layout='H' label='pasien' name='idPasien' required />
        <hr class="m-0 mb-4 mt-4">
        <x-input.textarea layout='H' label='anamnesis' name='anamnesis' wire:model.lazy="form.anamnesis" />
        <livewire:tools.todo-list layout='H' label='Diagnosis' name='diagnosis'/>
        <x-input.textarea layout='H' label='riwayat pasien' name='riwayatPasien' wire:model.lazy="form.riwayatPasien" />
        <x-input.textarea layout='H' label='alergi' name='alergi' wire:model.lazy="form.alergi" />
        <x-input.textarea layout='H' label='perawatan' name='perawatan' wire:model.lazy="form.perawatan" />
        <x-input.text layout='H' label='biaya' name='biaya' iconTxt='Rp.' wire:model.lazy="form.biaya" placeholder="00.0" />
        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-ui.button type="reset" wire:click='resetForm' style="warning" name="Reset" />
                <x-ui.button type="submit" style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
