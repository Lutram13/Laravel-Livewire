@extends('layouts.admin.app')

@section('title', 'Basic')
@section('subtitle', 'Student')

@section('contents')    

<livewire:basic.student-create>
    
<h6 class="mb-0 text-uppercase">Students List</h6>
<div class="my-3 border-bottom"></div>
<div class="card">
    <div class="card-body">
        <livewire:basic.student-index>                    
    </div>
</div>




@endsection