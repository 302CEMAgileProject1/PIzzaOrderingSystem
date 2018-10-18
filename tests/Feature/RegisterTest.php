<?php

namespace Tests\Feature;

use Session;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     
    public function testExample()
    {
        $this->assertTrue(true);
    }*/

// Below is to test whether register page exists by entering the page and finding the word "Register"

    public function test_register_page_exists()
    {
        $this->get('/register')
        ->assertSee('Register');
    }

    // a user can view registration form

    public function test_user_can_view_register_form()
    {
        $response = $this->get('/register');
        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }

    /*public function testStoreAction()
    {
        Session::start();
        $response = $this->call('POST', 'questions', array(
            '_token' => csrf_token(),
        ));
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('questions');
    }*/
}
