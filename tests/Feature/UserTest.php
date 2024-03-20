<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testUserRegistration()
    {
        $userData = [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'phone' => '07311789880',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $userData);

        $response->assertStatus(302);
        $this->assertDatabaseHas('users', ['email' => $userData['email']]);
    }

    public function testUserLogin()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password', // Assuming the password is 'password'
        ]);

        $response->assertStatus(302);
        $this->assertAuthenticatedAs($user);
    }

    public function testUserProfileUpdate()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('user/name/update', [
            'name' => 'Updated Name',
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Updated Name']);
    }


}
