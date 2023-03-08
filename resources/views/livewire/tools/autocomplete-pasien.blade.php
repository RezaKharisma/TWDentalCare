{{--
* $layout (Menentukan layout input : Horizontal / Vertical)
* $label (Penamaan label input)
* $name (Name label input)
* $required (Input diperlukan)
* $value (Value pada input)
--}}

<div>
    @php
        $invalid = ($errors->has('form.'.$name)) ? ' is-invalid' : '' ;
        $class = 'form-control'.$invalid;
    @endphp

    <div class="search-box">
        @if ($layout == 'V' || $layout == 'Vertical')
            <div class="mb-3">
                <label class="form-label" for="{{ $label }}">{{ $label }}
                    @if ($required)
                        <span style="color: red">*</span>
                    @endif
                </label>
                <input type='text' list="list-{{ $name }}" class='{{ $class }}' name='{{ $name }}' placeholder="Masukkan {{ $label }}"  @if ($required) required @endif wire:model="search" wire:keyup="searchResult">
                    @if($showdiv)
                        <datalist id="list-{{ $name }}">
                            @if(!empty($records))
                                @foreach($records as $record)
                                    <option wire:click="fetchEmployeeDetail({{ $record->id }})">
                                        {{ $record->nama}}
                                    </option>
                                @endforeach
                            @endif
                        </datalist>
                    @endif
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
                    <input type='text' list="list-{{ $name }}" class='{{ $class }}' name='{{ $name }}' placeholder="Masukkan {{ $label }}"  @if ($required) required @endif wire:model="search" wire:keyup="searchResult">
                    @if($showdiv)
                        <datalist id="list-{{ $name }}">
                            @if(!empty($records))
                                @foreach($records as $record)
                                    <option wire:click="fetchEmployeeDetail({{ $record->id }})">
                                        {{ $record->nama}}
                                    </option>
                                @endforeach
                            @endif
                        </datalist>
                    @endif
                    @error('form.'.$name)
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        @endif
    </div>

    @if (!empty($empDetails))
        {{ $empDetails->nama }}
    @endif

    {{-- <x-input.text layout='H' label='umur' name='umur' wire:model.lazy="form.umur" value="{{ $empDetails->umur ?? 'asd' }}" readonly />
    <x-input.textarea layout='H' label='pekerjaan' name='pekerjaan' wire:model.lazy="form.pekerjaan" value="{{ $empDetails->pekerjaan ?? '' }}" readonly />
    <x-input.text layout='H' label='kunjungan' name='kunjungan' wire:model.lazy="form.kunjungan" readonly /> --}}
</div>
