<?php

namespace App\Http\Livewire\Basic;

use App\Models\Student;
use Livewire\Component;

class StudentCreate extends Component
{
    public $name;

    public function addStudent()
    {
        Student::create(['name' => $this->name]);

        $this->emit('studentAdded');

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.basic.student-create');
    }
}
