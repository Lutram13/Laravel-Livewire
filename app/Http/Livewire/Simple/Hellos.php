<?php

namespace App\Http\Livewire\Simple;

use Livewire\Component;

class Hellos extends Component
{
    public function mount()
    {
        $names = ["James", "Munawir", "Kadir", "Vino"];
        $this->names = $names;
    }

    public function removeName($name)
    {
        $key = array_search($name, $this->names);
        unset($this->names[$key]);
    }

    public function refreshAll()
    {
        $this->emit('refreshAll');
        $this->mount();
    }
    public function render()
    {
        return view('livewire.simple.hellos');
    }
}
