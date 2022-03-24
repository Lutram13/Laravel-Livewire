<div class="card-body">
    <div class="text-center mt-4 mb-5">    
        <h5 class="card-title">Hello Every Body</h5>    
    </div>

    <div class="list-group">
        @foreach ($names as $name)            
            <a class="list-group-item list-group-item-action">
                @livewire('simple.hellos-child', ['name' => $name], key($name))
                <button wire:click="removeName('{{ $name }}')" type="button" class="btn btn-sm  btn-outline-danger  mb-1"><i class="lni lni-trash"></i></button>                    
            </a>
        @endforeach  
    </div>
    <hr>
    <div class="text-center">
        <h6>{{ now() }}</h6>
        <div class="d-grid">
            <button wire:click="refreshAll" type="button" class="btn btn-sm btn-outline-dark">Refresh All</button>
        </div>
    </div>


</div>