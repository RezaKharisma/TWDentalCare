<button type="{{ $type }}" {{ $attributes->merge([
    'class' => "btn btn-$style @if($rounded) rounded-pill @endif @if($size) btn-$size @endif"
]) }}>{{ $name }}</button>
