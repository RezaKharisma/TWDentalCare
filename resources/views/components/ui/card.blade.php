<div>
    <div class="card">
        <h5 class="card-header bg-secondary text-white">{{ $cardHeader }}</h5>
        <div class="card-body">
            {{ $slot }}
        </div>
        @if ($cardFooter)
            <div class="card-footer">
                {{ $cardFooter }}
            </div>
        @endif
    </div>
</div>
