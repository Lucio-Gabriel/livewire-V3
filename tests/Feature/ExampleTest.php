<?php

use Livewire\Livewire;

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('console command', function(){
        $this->artisan('inspire')->assertExitCode(0);
});


// test('basic', function () {
//     expect(true)->toBeTrue();
// });

