{{-- 
* $type (Tipe tombol : link, button, input, submit, reset || Default = button)
* $style (Style bootstrap : primary, secondary, success, danger, warning, info, dark || Default = primary)
* $size (Ukuran tombol : xs, sm, md, lg, xl || Default = normal)
* $rounded (Tombol sisi bulat : true, false || Default = null)
* $outline (Tombol garis outline || Default = null)
* $name (Nama tombol || Default = Tombol) 
* $icon (Ikon tombol || Default = null) 
--}}

@php
    $rounded = ($rounded) ? 'rounded-pill ' : '' ;
    $size = ($size) ? "btn-$size" : '';
    $style = ($outline) ? "outline-$style" : "$style";
@endphp

@if ($type == "link")
    <a 
        {{ $attributes->merge(['class' => "btn btn-$style ".$rounded.$size]) }} 
        href="{{ $href }}" 
        role="button">
        @if ($icon)
            <i class="fas fa-{{ $icon }}"></i>
        @endif
        {{ $name }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $attributes->merge(['class' => "btn btn-$style ".$rounded.$size]) }}
        @if ($modal)
            data-bs-toggle="modal" data-bs-target="#{{ $modal }}"
        @endif  >
        @if ($icon)
            <i class="fas fa-{{ $icon }}"></i>
        @endif
        {{ $name }}
    </button>
@endif