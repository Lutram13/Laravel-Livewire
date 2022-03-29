<?php

namespace App\Http\Livewire\Simple;

use Livewire\Component;

class QuickStart extends Component
{
    //deklarasi nilai $count
    public $count = 0;

    //Fungsi untuk melakukan increment
    public function increment()
    {
        $this->count++;
    }

    // Fungsi untuk melakukan decrement
    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.simple.quick-start');
    }
}
