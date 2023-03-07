<div>
    <form wire:submit.prevent="simpan" class="mt-4">
        @csrf
        <x-input.text layout="H" type="password" label="password" name="passwordLama" autofocus wire:model.lazy="form.passwordLama"/>
        <x-input.text layout="H" type="password" label="komfirmasi password" name="konfirmPasswordLama" autofocus wire:model.lazy="form.konfirmPasswordLama"/>

        <hr class="my-0 mb-3">

        <x-input.text layout="H" type="password" label="komfirmasi password" name="konfirmPasswordLama" autofocus wire:model.lazy="form.konfirmPasswordLama"/>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-ui.button type="submit" style="primary" name="Simpan" />
            </div>
        </div>
    </form>
</div>
