<div class="card-body">
    <div class="text-center mt-4 mb-5">    
        <h5 class="card-title">{{ $greeting }}, {{ $name }} 
            @if ($loud) ! @endif
        
        </h5>          
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">Upper Case</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
        <label class="form-check-label" for="flexRadioDefault2">Lower Case</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
        <label class="form-check-label" for="flexRadioDefault2">Camel Case</label>
    </div>
    
    <div class="form-check">
        <input wire:model="loud" class="form-check-input" type="checkbox" value="" id="loud">
        <label class="form-check-label" for="loud">Loud !</label>
    </div>              

</div>
