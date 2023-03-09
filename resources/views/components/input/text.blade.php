{{--
* $type (Menentukan tipe input)
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $icon (Icon pada input)
* $iconTxt (Icon pada input berupa text)
* $endText (Text pada belakang input)
* $value (Value pada input)
--}}

@php
    $invalid = ($errors->has('form.'.$name)) ? ' is-invalid' : '' ;
    $class = 'form-control'.$invalid;
@endphp

@if ($layout == 'V' || $layout == 'Vertical')
    <div class="mb-3">
        <label class="form-label" for="{{ $label }}">{{ $label }}
            @if ($required)
                <span style="color: red">*</span>
            @endif
        </label>
        @if ($icon || $endText || $iconTxt)
            <div class="input-group input-group-merge">
                @if ($icon || $iconTxt)
                    <span class="input-group-text" @error('form.'.$name) style="border: 1px solid red" @enderror>
                        @if ($icon)<i class="fas fa-{{ $icon }}"></i>@endif
                        @if ($iconTxt){{ $iconTxt }}@endif
                    </span>
                @endif
                <input type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
                {{ $attributes->whereStartsWith('wire:model') }}>
                @if ($endText)
                    <span class="input-group-text">{{ $endText }}</span>
                @endif
                @error('form.'.$name)
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        @else
            <input type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
            {{ $attributes->whereStartsWith('wire:model') }}>
            @error('form.'.$name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        @endif
    </div>
@elseif ($layout == 'H' || $layout == 'Horizontal')
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">{{ $label }}
            @if ($required)
                <span style="color: red">*</span>
            @endif
        </label>
        <div class="col-sm-10">
            @if ($icon || $endText || $iconTxt)
                <div class="input-group">
                    @if ($icon || $iconTxt)
                        <span class="input-group-text" @error('form.'.$name) style="border: 1px solid red" @enderror>
                            @if ($icon)<i class="fas fa-{{ $icon }}"></i>@endif
                            @if ($iconTxt){{ $iconTxt }}@endif
                        </span>
                    @endif
                    <input type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
                    {{ $attributes->whereStartsWith('wire:model') }}>
                    @if ($endText)
                        <span class="input-group-text">{{ $endText }}</span>
                    @endif
                    @error('form.'.$name)
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            @else
                <input type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
                {{ $attributes->whereStartsWith('wire:model') }}>
                @error('form.'.$name)
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            @endif
        </div>
    </div>
@endif
