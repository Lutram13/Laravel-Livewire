@extends('layouts.admin.app')

@section('title', 'Simple')
@section('subtitle', 'Hello Everybody')

@section('contents')    

<div class="row row-cols-1 row-cols-lg-2">
    
    <div class="col">
        <div class="card radius-10">
            
                {{-- Start Body --}}
                <livewire:simple.hellos />                 
                {{-- End Body --}}
        </div>        
    </div>
    
</div>
    
</div>
<!--end row-->


@endsection