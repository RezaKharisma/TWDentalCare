{{--
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $defaultImage (Text pada belakang input)
* $width (Value pada input)
--}}

@php
    $invalid = ($errors->has($name)) ? ' is-invalid' : '' ;
    $class = 'form-control'.$invalid;
@endphp

@if ($layout == 'V' || $layout == 'Vertical')
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <div class="mb-3">
            @if ($foto)
                <img src="{{ $foto->temporaryUrl() }}" class="img-thumbnail" alt="{{ $name }}" width="{{ $width }}">
            @else
                <img src="{{ $defaultImage }}" class="img-thumbnail" alt="{{ $name }}" width="{{ $width }}">
            @endif
        </div>
        <input {{ $attributes->merge(['class' => $class]) }} type="file" name="{{ $name }}" accept="image/png, image/bmp, image/jpeg, image/jpg" @if ($required) required @endif {{ $attributes->whereStartsWith('wire:model') }}>
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
@elseif ($layout == 'H' || $layout == 'Horizontal')
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">{{ $label }}
            @if ($required)
                <span style="color: red">*</span>
            @endif
        </label>
        <div class="col-sm-10">
            <div class="mb-3">
                @if ($foto)
                    <img src="{{ $foto->temporaryUrl() }}" class="img-thumbnail" alt="{{ $name }}" width="{{ $width }}">
                @else
                    <img src="{{ $defaultImage }}" class="img-thumbnail" alt="{{ $name }}" width="{{ $width }}">
                @endif
            </div>
            <input {{ $attributes->merge(['class' => $class]) }} type="file" name="{{ $name }}" accept="image/png, image/bmp, image/jpeg, image/jpg" @if ($required) required @endif {{ $attributes->whereStartsWith('wire:model') }}>
            @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endif
