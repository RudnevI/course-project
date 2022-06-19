<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_login()
    {

        $user = User::factory()->create();
        $user->password = bcrypt('test');
        $user->save();

        $this->post('login', ['email' => $user->email, 'password' => 'test']);
        $this->assertAuthenticatedAs($user);
    }

    public function test_login_failure_invalid_credentials()
    {
        $user = User::factory()->create();
        $user->password = bcrypt('test');
        $user->save();

        session()->setPreviousUrl('login');
        $this->followingRedirects();
        $this->from('login')->post('login', ['email' => $user->email, 'password' => 'dasfdsaf'])->assertViewIs('login');
    }
}
