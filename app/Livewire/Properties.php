<?php

namespace App\Livewire;

use Livewire\Component;

class Properties extends Component
{

    public string $nameSystem;

    public function mount()
    {
        $this->nameSystem = "égua do chamado";
    }

    public function render()
    {
        return view('livewire.properties');
    }

}