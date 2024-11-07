<?php

namespace App\Livewire\Form;

use App\Models\User;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserForm extends Component
{

    // propriedades
    #[Locked]
    public ?int $id = null;

    #[Rule(['required', 'string', 'max:255', 'min:2'])]
    public string $name;

    #[Rule(['required', 'email', 'max:255', 'min:2'])]
    public string $email;

    #[Rule(['required', 'email', 'max:255', 'min:2'])]
    public string $password;
    public string $password_confirmation;

    public function save()
    {
        $this->validate();

        User::updatedOrCreate(
            ['id' => $this->id],
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password
            ]
        );
    }

    public function setUser(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->id = $user->id;
    }


    public function render()
    {

       return view('livewire.form.user-form');
    }
}
