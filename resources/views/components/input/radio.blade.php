{{--
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $radios (Isi pilihan radio, (array),
    [
        'value' => '...',
        'label' => '...'
    ])
--}}

@php
    $invalid = ($errors->has('form.'.$name)) ? ' is-invalid' : '' ;
@endphp

@if ($layout == 'V' || $layout == 'Vertical')
<div class="col-md mb-3">
    <label class="form-label d-block mb-3"
        >{{ $label }}
        @if ($required)
        <span style="color: red">*</span>
        @endif
    </label>
    @foreach ($radios as $key => $rad)
        <div class="form-check form-check-inline {{ $invalid }}">
            <input name="{{ $name }}" {{ $attributes->merge(['class' => 'form-check-input'])}} type="radio"
            value="{{ $rad["value"] }}" id="radio-{{ $name }}{{ $key + 1 }}" @if ($required) required @endif
            {{ $attributes->whereStartsWith('wire:model') }}>
            <label class="form-check-label">
                {{ $rad["label"] }}
            </label>
        </div>
    @endforeach
    @error('form.'.$name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
@elseif ($layout == 'H' || $layout == 'Horizontal')
<div class="row mb-3">
    <label class="col-sm-2 col-form-label"
        >{{ $label }}
        @if ($required)
        <span style="color: red">*</span>
        @endif
    </label>
    <div class="col-sm-10">
        @foreach ($radios as $key => $rad)
        <div class="form-check {{ $invalid }}">
            <input name="{{ $name }}" {{ $attributes->merge(['class' => 'form-check-input']) }} type="radio"
            value="{{ $rad["value"] }}" id="radio{{ $name }}{{ $key + 1 }}" @if ($required) required @endif
            {{ $attributes->whereStartsWith('wire:model') }}>
            <label class="form-check-label">
                {{ $rad["label"] }}
            </label>
        </div>
        @endforeach @error('form.'.$name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
@endif
