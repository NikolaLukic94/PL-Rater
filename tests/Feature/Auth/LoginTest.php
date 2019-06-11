<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware; //disables csrf protection fortesting purpose

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_user_can_see_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();

        $response->assertViewIs('auth.login');
    }

    public function test_a_user_cannot_see_login_form_if_auth()
    {
        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/home');
    }

    public function test_user_can_login_with_correct_credentials()
    {
        //we create user
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'test-user'),
        ]);
        //login user
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/home');
    }
}
