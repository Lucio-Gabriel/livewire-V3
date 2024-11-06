<?php

namespace App\Livewire;

use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Log as FacadesLog;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Calculadora extends Component
{

    public ?string $num1 = null;

    public float $num2 = 0;

    public string $operator = '+';

    public ?float $result = null;

    public function render()
    {
        return view('livewire.calculadora');
    }

    public function calculate()
    {
        sleep(2);

        $tmp = "{$this->num1}{$this->operator}{$this->num2};";

        $this->result = eval('return'. $tmp);
    }

    public function naoQueroY()
    {
        $this->num1 = str($this->num1)->replace('y', 'Gabriel no Y', true);

    }

    #[Renderless]
    public function toLogando()
    {
        FacadesLog::inf('logando ...' . now()->timestamp);
    }

    // class SearchComponent extends \Livewire\Component
    // {
    //     public $query = '';
    //     public $results = [];

    //     public function updatedQuery()
    //     {
    //         $this->results = Model::where('name', 'like', '%' . $this->query . '%')->get();
    //     }
    // }


}
