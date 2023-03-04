<div>
    <div class="d-flex align-items-start align-items-sm-center gap-4">
        @if ($foto)
            <img src="{{ $foto->temporaryUrl() }}" alt="user foto" class="d-block rounded" width="100" id="uploadedAvatar">
        @else
            <img src="{{ asset('img/userImage.jpg') }}" alt="user foto" class="d-block rounded" width="100" id="uploadedAvatar">
        @endif
        <div class="button-wrapper">
            <button type="button" wire:click='resetFoto' class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
            </button>
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Unggah Foto</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" id="upload" name="foto" wire:model='foto' class="account-file-input" hidden="" accept="image/png, image/jpeg, image/jpg">
            </label>
            @error('foto')
                <span style="color: red" class="me-2 mb-4">{{ $message }}</span>
            @enderror
            <p class="text-muted mb-0">Jenis file jpg, jpeg atau png.</p>
        </div>
    </div>
</div>
