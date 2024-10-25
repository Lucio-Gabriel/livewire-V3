<?php

namespace App\Livewire;

use Livewire\Component;

class Properties extends Component
{

    public string $nameSystem;

    public string $name;

    public string $lastName;

    public string $msg = "Sua mensagem";

    public function mount()
    {
        $this->fill([
            'name' => 'Lucio',
            'lastName' => 'Azevedo'
        ]);

        $this->nameSystem = "égua do chamado";
    }

    public function render()
    {
        return view('livewire.properties');
    }

    public function refresh()
    {

    }

}