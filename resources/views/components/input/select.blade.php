{{--
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $options (Isi pilihan option (array),
    [
        'label' => '...',
        'value' => '...',
        'disabled' => true/false,
        'selected' => true/false,
    ])
--}}

@php
    $invalid = ($errors->has('form.'.$name)) ? ' is-invalid' : '' ;
    $class = 'form-select'.$invalid;
@endphp

@if ($layout == 'V' || $layout == 'Vertical')
    <div class="mb-3">
        <label class="form-label">{{ $label }}
            @if ($required)
                <span style="color: red">*</span>
            @endif
        </label>
        <select {{ $attributes->merge(['class' => $class]) }} name="{{ $name }}" @if ($required) required @endif
            {{ $attributes->whereStartsWith('wire:model') }}>
            @foreach ($options as $key => $opt)
                <option
                    {{ $opt['disabled'] == true ? 'disabled' : '' }}
                    {{ $opt['selected'] == true ? 'disabled' : '' }}
                    value="{{ $opt['value'] }}">
                    {{ $opt['label'] }}
                </option>
            @endforeach
        </select>
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
            <select {{ $attributes->merge(['class' => $class]) }} name="{{ $name }}" @if ($required) required @endif
                {{ $attributes->whereStartsWith('wire:model') }}>
                @foreach ($options as $key => $opt)
                    <option
                        {{ $opt['disabled'] == true ? 'disabled' : '' }}
                        {{ $opt['selected'] == true ? 'selected' : '' }}
                        value="{{ $opt['value'] }}">
                        {{ $opt['label'] }}
                    </option>
                @endforeach
            </select>
            @error('form.'.$name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endif
