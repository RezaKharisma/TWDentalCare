<div>
    @php
        $invalid = ($errors->has('form.'.$name)) ? ' is-invalid' : '' ;
        $class = 'form-control'.$invalid;
    @endphp

    <input type="hidden" name="{{ $name }}" value="{{ $value }}">

    @if ($layout == 'V' || $layout == 'Vertical')
        <div class="mb-3">
            <label class="form-label" for="{{ $label }}">{{ $label }}
                @if ($required)
                    <span style="color: red">*</span>
                @endif
            </label>
            <input type='text' class='{{ $class }}' name='todo-{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif wire:model="search" wire:keyup="searchResult">
            @if($showdiv)
                <div class="list-group list-group-flush">
                    @if(!empty($records))
                        @foreach($records as $record)
                            <a href='javascript:void(0);' class="list-group-item list-group-item-action" wire:click="fetchData({{ $record->id }})">{{ $record->nama_diagnosis}}</a>
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
                    <div class="card">
                        <div class="card-header bg-primary text-white mb-3 py-2 px-3">List Diagnosis</div>
                        <div class="card-body">
                                @foreach ($empDetails as $key => $detail)
                                <div class="row mb-3">
                                    <input class="form-control" type="hidden" name="idDiagnosis" value="{{ $detail['id'] }}" readonly>
                                    <div class="col-md-4 col-sm-12 mb-2"><input class="form-control" type="text" name="nama_diagnosis" value="{{ $detail['nama'] }}" readonly></div>
                                    <div class="col-md-7 col-sm-12 mb-2"><textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea></div>
                                    <div class="col-md-1 col-sm-12 mb-2"><button type="button" class="btn btn-danger" wire:click='deleteList({{ $key }})'><i class="fa fa-times"></i></button></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
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
                <input type='text' class='{{ $class }}' name='todo-{{ $name }}' placeholder="Masukkan {{ $label }}" @if ($required) required @endif wire:model="search" wire:keyup="searchResult">
                @if($showdiv)
                    <div class="list-group list-group-flush">
                        @if(!empty($records))
                            @foreach($records as $record)
                                <a href='javascript:void(0);' class="list-group-item list-group-item-action" wire:click="fetchData({{ $record->id }})">{{ $record->nama_diagnosis}}</a>
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
                    <div class="card">
                        <div class="card-header bg-primary text-white mb-3 py-2 px-3">List Diagnosis</div>
                        <div class="card-body">
                                @foreach ($empDetails as $key => $detail)
                                <div class="row mb-3">
                                    <input class="form-control" type="hidden" name="idDiagnosis" value="{{ $detail['id'] }}" readonly>
                                    <div class="col-md-4 col-sm-12 mb-2"><input class="form-control" type="text" name="nama_diagnosis" value="{{ $detail['nama'] }}" readonly></div>
                                    <div class="col-md-7 col-sm-12 mb-2"><textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea></div>
                                    <div class="col-md-1 col-sm-12 mb-2"><button type="button" class="btn btn-danger" wire:click='deleteList({{ $key }})'><i class="fa fa-times"></i></button></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>
