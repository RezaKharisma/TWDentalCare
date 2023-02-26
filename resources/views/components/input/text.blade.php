{{--
* $type (Menentukan tipe input)
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $icon (Icon pada input)
* $endText (Text pada belakang input)
* $value (Value pada input)
--}}

@if ($layout == 'V' || $layout == 'Vertical')
    <div class="mb-3">
        <label class="form-label" for="{{ $label }}">{{ $label }}
            @if ($required)
                <span style="color: red">*</span>
            @endif
        </label>
        @if ($icon)
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-{{ $icon }}"></i></span>
                <input type="{{ $type }}" {{ $attributes->merge(['class' => 'form-control']) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
                {{ $attributes->whereStartsWith('wire:model') }}>
                @if ($endText)
                    <span class="input-group-text">{{ $endText }}</span>
                @endif
            </div>
        @else
            <input type="{{ $type }}" {{ $attributes->merge(['class' => 'form-control']) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
            {{ $attributes->whereStartsWith('wire:model') }}>
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
            @if ($icon)
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-{{ $icon }}"></i></span>
                    <input type="{{ $type }}" {{ $attributes->merge(['class' => 'form-control']) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
                    {{ $attributes->whereStartsWith('wire:model') }}>
                    @if ($endText)
                        <span class="input-group-text">{{ $endText }}</span>
                    @endif
                </div>
            @else
                <input type="{{ $type }}" {{ $attributes->merge(['class' => 'form-control']) }} name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif value='{{ $value }}'
                {{ $attributes->whereStartsWith('wire:model') }}>
            @endif
        </div>
    </div>
@endif
