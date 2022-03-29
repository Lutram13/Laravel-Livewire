<?php

namespace App\Http\Livewire\Basic;

use App\Models\Student;
use Livewire\Component;

class StudentCreate extends Component
{
    public $name;

    public function addStudent()
    {
        //Memvaliasi nama dibutuhkan
        $this->validate([
            'name' => 'required',
        ]);

        //Membuat data nama
        Student::create(['name' => $this->name]);

        //Mengirimkan event ke component induk
        $this->emit('studentAdded');

        //Mendeklarasi nilai name di form input menjadi kosong 
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.basic.student-create');
    }
}
