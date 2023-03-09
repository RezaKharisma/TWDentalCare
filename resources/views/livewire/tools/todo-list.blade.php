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
                <div class="row">
                    <div class="col-6">asd</div>
                    <div class="col-6">asd</div>
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
            <div class="offset-2 col-sm-10">
                <div class="row">
                    <div class="col-6"><input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus=""></div>
                    <div class="col-6"><input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus=""></div>
                </div>
            </div>
        </div>
        @endif
    @endif
</div>
