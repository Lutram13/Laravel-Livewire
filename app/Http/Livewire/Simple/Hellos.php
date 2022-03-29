<?php

namespace App\Http\Livewire\Simple;

use Livewire\Component;

class Hellos extends Component
{
    // __Construct
    public function mount()
    {
        $names = ["James", "Munawir", "Kadir", "Vino"];
        $this->names = $names;
    }

    //Fungsi untuk menghapus nama
    public function removeName($name)
    {
        $key = array_search($name, $this->names);
        unset($this->names[$key]);
    }

    //FUngsi untuk melakkan refresh
    public function refreshAll()
    {
        $this->emit('refreshAll');
        //mengembalikan data pertama -> __Construct
        $this->mount();
    }

    public function render()
    {
        return view('livewire.simple.hellos');
    }
}
