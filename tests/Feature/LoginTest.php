<?php

namespace Tests\Feature;

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
}
