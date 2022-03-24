@extends('layouts.admin.app')

@section('title', 'Simple')
@section('subtitle', 'Hello World')

@section('contents')    

<div class="row row-cols-1 row-cols-lg-2">
    <div class="col">
        <div class="card radius-10">
            
            {{-- Start Body --}}
            <livewire:simple.hello />                 
            {{-- End Body --}}

        </div>
    </div>
</div>
    
</div>
<!--end row-->


@endsection