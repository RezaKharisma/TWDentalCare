<div>
    <div class="d-flex align-items-start align-items-sm-center gap-4">
        @if ($foto)
            <img src="{{ $foto->temporaryUrl() }}" alt="user foto" class="d-block rounded img-thumbnail" width="150">
        @else
            <img src="{{ asset('img/userImage.jpg') }}" alt="user foto" class="d-block rounded img-thumbnail" width="150">
        @endif
        <div class="button-wrapper">
            <button type="button" wire:click='resetFoto' class="btn btn-outline-secondary account-image-reset">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
            </button>
            <label for="upload" class="btn btn-secondary" tabindex="0">
                <div wire:loading.remove>
                    <span class="d-none d-sm-block">Unggah Foto</span>
                </div>
                <div wire:loading>
                    <span class="d-none d-sm-block">Memuat...</span>
                </div>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" id="upload" name="foto" wire:model='foto' class="account-file-input" hidden="" accept="image/png, image/jpeg, image/jpg">
            </label>
            @error('foto')
                <p class="mt-3 mb-0" style="color: red" >{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
