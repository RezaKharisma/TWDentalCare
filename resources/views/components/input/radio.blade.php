<div class="row mb-3">
    <label class="col-sm-2 col-form-label">{{ $label }}
        @if ($required)
            <span style="color: red">*</span>
        @endif
    </label>
    <div class="col-md">
        @foreach ($radio as $rad)
            <div class="form-check">
                <input name="{{ $name }}" {{ $attributes->merge(['class' => 'form-check-input']) }} type="radio" value="{{ $rad->value }}">
                <label class="form-check-label">
                    {{ $rad->value }}
                </label>
            </div>
        @endforeach
    </div>
</div>
