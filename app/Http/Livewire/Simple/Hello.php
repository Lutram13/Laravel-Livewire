<?php

namespace App\Http\Livewire\Simple;

use Livewire\Component;

class Hello extends Component
{
    public $name = "World";
    public $loud = false;
    public $greeting = "Hello";

    public function render()
    {
        return view('livewire.simple.hello');
    }
}
