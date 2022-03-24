<div>
    @foreach ($students as $student)
        <livewire:basic.student-single :student="$student" :key="$student->id"/>        
    @endforeach
    
</div>
