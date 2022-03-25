<ul class="list-group">

    <input wire:model="search" type="text" class="form-control my-3" placeholder="Search student name">

    @foreach ($students as $student)
    <livewire:basic.student-single :student="$student" :wire:key="$student->id"/>        
    @endforeach

    <nav class="mt-3" aria-label="Page navigation example">
        <ul class="pagination">
            {{ $students->links() }}
        </ul>
    </nav>
</ul>
