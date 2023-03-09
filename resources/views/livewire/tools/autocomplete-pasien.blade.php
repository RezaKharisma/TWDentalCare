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

    @if ($layout == 'V' || $layout == 'Vertical')
        <div class="mb-3">
            <label class="form-label" for="{{ $label }}">{{ $label }}
                @if ($required)
                    <span style="color: red">*</span>
                @endif
            </label>
            <input type='text' class='{{ $class }}' name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif wire:model="search" wire:keyup="searchResult">
            @if($showdiv)
                <div class="list-group list-group-flush">
                    @if(!empty($records))
                        @foreach($records as $record)
                            <a href='javascript:void(0);' class="list-group-item list-group-item-action" wire:click="fetchData({{ $record->id }})">{{ $record->nama}}</a>
                        @endforeach
                    @endif
                </div>            
            @endif
            @error('form.'.$name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        @if(!empty($empDetails))
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="list-group">
                    <button disabled class="list-group-item list-group-item-action bg-primary text-white">Detail Pasien</button>
                    <li class="list-group-item"><b>Name :</b>{{ $empDetails->nama }}</li>
                    <li class="list-group-item"><b>Alamat :</b> {{ $empDetails->alamat }}</li>
                    <li class="list-group-item"><b>Tempat, Tanggal Lahir :</b> {{ $empDetails->tempatLahir }}, {{ date('d-M-Y', (int)$empDetails->tanggalLahir) }}</li>
                    <li class="list-group-item"><b>Umur :</b> {{ $empDetails->umur }} Tahun</li>
                    <li class="list-group-item"><b>Pekerjaan :</b> {{ $empDetails->pekerjaan }}</li>
                    <li class="list-group-item"><b>Kunjungan :</b> Ke. {{ $empDetails->kunjungan }}</li>
                </div>
            </div>
        </div>
    @endif
    @elseif ($layout == 'H' || $layout == 'Horizontal')
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ $label }}
                @if ($required)
                    <span style="color: red">*</span>
                @endif
            </label>
            <div class="col-sm-10">
                <input type='text' class='{{ $class }}' name='{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif wire:model="search" wire:keyup="searchResult">
                @if($showdiv)
                    <div class="list-group list-group-flush">
                        @if(!empty($records))
                            @foreach($records as $record)
                                <a href='javascript:void(0);' class="list-group-item list-group-item-action" wire:click="fetchData({{ $record->id }})">{{ $record->nama}}</a>
                            @endforeach
                        @endif
                    </div>            
                @endif
                @error('form.'.$name)
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        @if(!empty($empDetails))
        <div class="row mb-3">
            <div class="offset-sm-2 col-sm-10">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-primary text-white">Detail Pasien
                        <button type="button" class="btn btn-danger btn-xs" wire:click='batalPilih'><i class="fa fa-times"></i></button>
                    </li>
                    <li class="list-group-item"><b>Name :</b> {{ $empDetails->nama }}</li>
                    <li class="list-group-item"><b>Alamat :</b> {{ $empDetails->alamat }}</li>
                    <li class="list-group-item"><b>Tempat, Tanggal Lahir :</b> {{ $empDetails->tempatLahir }}, {{ date('d F Y', (int)$empDetails->tanggalLahir) }}</li>
                    <li class="list-group-item"><b>Umur :</b> {{ $empDetails->umur }} Tahun</li>
                    <li class="list-group-item"><b>Pekerjaan :</b> {{ $empDetails->pekerjaan }}</li>
                    <li class="list-group-item"><b>Kunjungan :</b> Ke. {{ $empDetails->kunjungan }}</li>
                </ul>
            </div>
        </div>
        @endif
    @endif
</div>
