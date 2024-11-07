<?php

namespace App\Livewire;

use App\Livewire\Form\UserForm;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class CreateUser extends Component
{

    public UserForm $form;

    public function render()
    {
        return view('livewire.create-user');
    }

    public function submit()
    {
        $this->form->save();
    }
}
