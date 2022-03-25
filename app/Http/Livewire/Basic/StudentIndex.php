<?php

namespace App\Http\Livewire\Basic;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['studentAdded' => '$refresh'];

    protected $updatesQueryString = [
        ['page' => ['except' => 1]],
        ['search' => ['except' => '']],
    ];

    public $search;

    public function render()
    {
        return view('livewire.basic.student-index',  [
            'students' => $this->search === null ?
                Student::latest()->paginate(5) :
                Student::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5),
        ]);
    }
}
