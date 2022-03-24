@extends('layouts.admin.app')

@section('title', 'Basic')
@section('subtitle', 'Student')

@section('contents')    

<livewire:basic.student-create>
    
{{-- Start Table --}}
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Student</h5>
            <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                    <ion-icon name="search-sharp"></ion-icon>
                </div>
                <input class="form-control ps-5" type="text" placeholder="search">
            </form>
        </div>
        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>                    
                    <livewire:basic.student-index>                  
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- End Table --}}






@endsection