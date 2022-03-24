<?php

namespace App\Http\Livewire\Simple;

use Livewire\Component;

class QuickStart extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.simple.quick-start');
    }
}
