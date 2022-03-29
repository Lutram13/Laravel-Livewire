<?php

namespace App\Http\Livewire\Basic;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    //Memanggil Library Pagination
    use WithPagination;

    //Memanggil tema pagination milik bootsrap
    protected $paginationTheme = 'bootstrap';

    //Listener untuk melakukan refresh
    protected $listeners = ['studentAdded' => '$refresh'];

    //FUngsi untuk melakukan udate query
    protected $updatesQueryString = [
        //Perintah untuk tidak melakukan paginasi jika hanya terdapat 1 page
        ['page' => ['except' => 1]],
        //Perintah tidak melakukan search jika tidak ada kata kunci
        ['search' => ['except' => '']],
    ];

    public $search;

    public function render()
    {
        return view('livewire.basic.student-index',  [
            //Jika search adalah nilai kosong
            'students' => $this->search === null ?
                //Maka akan menampilkan semua data dengan paginasi 5
                Student::latest()->paginate(5) :
                //Jika tidak maka menampilkan data seperti kata kunci dengan paginasi 5
                Student::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5),
        ]);
    }
}
