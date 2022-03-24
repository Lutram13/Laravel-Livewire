{{-- <div>
    <h6>Hello, {{ $name }}</h6> 
    <button wire:click="$refresh" type="button" class="btn btn-sm btn-outline-dark">refresh</button>
    {{ now() }}
</div> --}}
<div>
    <div class="d-flex w-100 justify-content-between">
        <h6 class="mb-1">Hello, {{ $name }}</h6>
        <small>{{ now() }}</small>
    
    </div>   
    <button wire:click="$refresh" type="button" class="btn btn-sm btn-outline-dark mb-1"><i class="lni lni-reload"></i></button>
    
</div>

