{{--
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $value (Value pada input)
--}}

@if ($layout == 'V' || $layout == 'Vertical')
    <div class="mb-3">
        <label class="form-label">{{ $label }}
            @if ($required)
            <span style="color: red">*</span>
            @endif
        </label>
        <textarea {{ $attributes->merge(['class' => 'form-control']) }} placeholder="Masukkan {{ $name }}" @if ($required) required @endif>{{ $value }}</textarea>
    </div>
@elseif ($layout == 'H' || $layout == 'Horizontal')
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">{{ $label }}
            @if ($required)
            <span style="color: red">*</span>
            @endif
        </label>
        <div class="col-sm-10">
            <textarea {{ $attributes->merge(['class' => 'form-control']) }} placeholder="Masukkan {{ $name }}" @if ($required) required @endif>{{ $value }}</textarea>
        </div>
    </div>
@endif