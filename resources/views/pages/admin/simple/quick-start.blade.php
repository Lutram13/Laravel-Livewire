@extends('layouts.admin.app')

@section('title', 'Simple')
@section('subtitle', 'Quick Start')

@section('contents')    

<div class="row row-cols-1 row-cols-lg-3">
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="text-center mt-4 mb-5">    
                    <h5 class="card-title">Increment-Decrement</h5>    
                        <livewire:simple.quick-start /> 
                </div>
            </div>
        </div>        
    </div>
</div>
    
</div>
<!--end row-->


@endsection