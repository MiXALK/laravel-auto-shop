<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);

        $this->get('/')->assertSee('Auto');
    }

    public function testMyTest()
    {
        $this->get('/')->assertSee('Club');
    }

    public function testAdminTest()
    {
        $this->get('/admin/goods')->assertStatus(302);
    }
}
