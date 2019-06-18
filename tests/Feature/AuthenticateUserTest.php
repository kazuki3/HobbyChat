<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;

class AuthenticateUserTest extends TestCase
{
    use RefreshDatabase;

    public function testVisitAunthenticationPage()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testCanCreateUser() {
        $response = $this->post('/register', [
            'name' => 'kazuki',
            'email' => 'test@gmail.com',
            'password' => '11111111',
            'password_confirmation' => '11111111',
            'gender' => 'other',
            'age' => '39',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'kazuki',
            'email' => 'test@gmail.com',
            'gender' => 'other',
            'age' => '39',
        ]);

        $response->assertRedirect('/');
    } 

    public function test_user_is_not_created_if_validation_fails() {
        $response = $this->post('/register');

        $response->assertSessionHasErrors(['name','email','password','gender','age']);
    }

}
