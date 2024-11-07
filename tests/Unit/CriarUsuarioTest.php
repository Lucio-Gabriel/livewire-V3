<?php

namespace Tests\Feature;

use Tests\TestCase;

class CriarUsuarioTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}