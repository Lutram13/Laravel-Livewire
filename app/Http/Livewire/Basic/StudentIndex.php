<?php

namespace App\Http\Livewire\Basic;

use App\Models\Student;
use Livewire\Component;

class StudentIndex extends Component
{

    protected $listeners = [
        'studentAdded',
    ];

    public function studentAdded()
    {
        # code...
    }
    public function render()
    {

        return view('livewire.basic.student-index',  [
            'students' => Student::latest()->get(),
        ]);
    }
}
