<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_view_login()
    {
        $response = $this->get('/');

        $response->assertSuccessful();
        $response->assertViewIs('admin.index');
    }

    public function user_can_login(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt('password')
        ]);

        $response = $this->post(route('admin.login'), [
            'email' => '',
            'password' => ''
        ]);

        $response->assertStatus(200);
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
//    public function user_cannot_login_with_incorrect_credentials()
//    {
//        $user = User::factory()->create([
//            'password' => bcrypt('password')
//        ]);
//
//        $response = $this->post(route('admin.login'), [
//            'email' => $user->email,
//            'password' => 'teste'
//        ]);
//
//        $response->assertSessionHasErrors();
//        $this->assertGuest();
//    }

    /** @test */
//    public function user_can_logout()
//    {
//        $user = User::factory()->create([
//            'password' => bcrypt('password')
//        ]);
//
//        $this->actingAs($user);
//
//        $response = $this->post(route('admin.logout'));
//
//        $response->assertRedirect(route('admin.login'));
//        $this->assertGuest();
//    }
}
