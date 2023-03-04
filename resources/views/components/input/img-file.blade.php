{{--
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $defaultImage (Text pada belakang input)
* $width (Value pada input)
--}}

@php
    $invalid = ($errors->has('form.'.$name)) ? ' is-invalid' : '' ;
    $class = 'img-thumbnail'.$invalid;
@endphp

@if ($layout == 'V' || $layout == 'Vertical')
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <div class="mb-3">
            @if ($foto)
                <img src="{{ $foto->temporaryUrl() }}" {{ $attributes->merge(['class' => $class]) }} alt="{{ $name }}" width="{{ $width }}">
            @else
                <img src="{{ $defaultImage }}" {{ $attributes->merge(['class' => $class]) }} alt="{{ $name }}" width="{{ $width }}">
            @endif
        </div>
        <input class="form-control" type="file" name="{{ $name }}" @if ($required) required @endif {{ $attributes->whereStartsWith('wire:model') }}>
        @error('form.'.$name)
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
                    <img src="{{ $foto->temporaryUrl() }}" {{ $attributes->merge(['class' => $class]) }} alt="{{ $name }}" width="{{ $width }}">
                @else
                    <img src="{{ $defaultImage }}" {{ $attributes->merge(['class' => $class]) }} alt="{{ $name }}" width="{{ $width }}">
                @endif
            </div>
            <input class="form-control" type="file" name="{{ $name }}" @if ($required) required @endif {{ $attributes->whereStartsWith('wire:model') }}>
            @error('form.'.$name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endif
