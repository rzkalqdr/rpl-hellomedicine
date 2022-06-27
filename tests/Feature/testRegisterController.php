<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testRegisterController extends TestCase
{
    /**
     * @tests
     */
    public function test_register_user()
    {
        $user = [
            'displayname' => 'mamang',
            'username' => 'mamangjabrik',
            'password' => '12345'
        ];

        $response = $this->post('/register', $user)->toArray();

        $response
            ->assertRedirect('/login')
            ->assertSessionHas('success', 'Registration Sucessfull! Please login');

        $this->assertDatabaseHas('users', $user);
    }
}
