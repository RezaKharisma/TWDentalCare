@if ($layout == 'V')
    <div class="mb-3">
        <label class="form-label" for="basic-default-fullname">Full Name</label>
        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" {{ $attributes }}>
    </div>
@elseif ($layout == 'H')
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe"
                {{ $attributes }}>
        </div>
    </div>
@endif
