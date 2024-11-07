<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class UserResume extends Component
{

    #[Rule('required', 'max:255', 'min:5')]
    public ?string $resume;

    // public string $user = "";

    public function mount()
    {
        // $this->resume = auth()->$this->user()->resume;
    }

    public function render()
    {
        return view('livewire.user-resume');
    }

    public function updated($attr, $value)
    {
        // auth()->$this->user()->update([
        //     $attr => $value
        // ]);
    }
}
