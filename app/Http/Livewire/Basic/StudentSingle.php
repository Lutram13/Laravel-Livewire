<?php

namespace App\Http\Livewire\Basic;

use Livewire\Component;

class StudentSingle extends Component
{
    public $student;

    // __Construct
    public function mount($student)
    {
        $this->student = $student;
    }

    public function render()
    {
        return view('livewire.basic.student-single');
    }
}
