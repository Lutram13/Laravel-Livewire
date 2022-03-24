<?php

namespace App\Http\Livewire\Simple;

use Livewire\Component;

class HellosChild extends Component
{
    public $name;

    protected $listeners = ['refreshAll' => '$refresh'];

    public function mount($name)
    {
        $this->name = $name;
    }


    public function render()
    {
        return view('livewire.simple.hellos-child');
    }
}
