<?php

namespace Tests\Feature\Livewire;

use App\Livewire\UserForm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CriarUsuarioTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(UserForm::class)
            ->assertSuccessful();
    }

    public function it_should_be_able_to_create_an_user()
    {
        Livewire::test(UserForm::class)
            ->set('name', 'usuario1')
            ->set('email', 'usuario@gmail.com')
            ->set('password', '12345678')
            ->call('submit')
            ->assertHasNoErrors();



        $this->assertDatabaseHas([
            'name' => 'usuario1',
            'email' => 'usuario@gmail.com'
        ]);
    }

    // pra testar as validacoes
    public function name_should_be_required()
    {
        Livewire::test(UserForm::class)
            ->set('name', null)
            ->call('submit')
            ->assertHasErrors([
                'name' => 'required'
            ]);
    }
}
