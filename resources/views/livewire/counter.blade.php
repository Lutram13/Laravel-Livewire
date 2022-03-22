
{{-- <div class="container">
    <label for="customRange3" class="form-label">Example range</label>
    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">

</div> --}}

<div class="container" >
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            <button type="button" class="btn btn-primary btn-sm" wire:click="decrement">-</button>  
        </div>
        <div class="col-md-auto">
            <h1>{{ $count }}</h1>
        </div>
        <div class="col col-lg-2">
            <button type="button" class="btn btn-primary btn-sm" wire:click="increment">+</button>
        </div>
    </div>
</div>