<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserForm extends Component
{

    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;


    public function rules()
    {
        return[
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'string', 'max:255', 'min:2'],
            'password' => ['required', 'string', 'max:255', 'min:2', 'confirmed'],
        ];
    }

    public function render()
    {
        return view('livewire.user-form');
    }


    public function submit()
    {
        // $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

    }
}