{{--
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $value (Value pada input)
--}}

@php
    $invalid = ($errors->has('form.'.$name)) ? ' is-invalid' : '' ;
    $class = 'form-control'.$invalid;
@endphp

@if ($layout == 'V' || $layout == 'Vertical')
    <div class="mb-3">
        <label class="form-label">{{ $label }}
            @if ($required)
            <span style="color: red">*</span>
            @endif
        </label>
        <textarea name="{{ $name }}" {{ $attributes->merge(['class' => $class]) }}
            placeholder="Masukkan {{ $name }}" @if ($required) required @endif
            {{ $attributes->whereStartsWith('wire:model') }}>{{ $value }}</textarea>
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
            <textarea name="{{ $name }}" {{ $attributes->merge(['class' => $class]) }}
                placeholder="Masukkan {{ $name }}" @if ($required) required @endif
                {{ $attributes->whereStartsWith('wire:model') }}>{{ $value }}</textarea>
            @error('form.'.$name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endif
