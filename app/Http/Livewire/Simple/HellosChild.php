<?php

namespace App\Http\Livewire\Simple;

use Livewire\Component;

class HellosChild extends Component
{
    //Deklarasi $name
    public $name;

    //Listenenr untuk melakukan Refresh 
    protected $listeners = ['refreshAll' => '$refresh'];

    //pengganti __Construct
    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.simple.hellos-child');
    }
}
