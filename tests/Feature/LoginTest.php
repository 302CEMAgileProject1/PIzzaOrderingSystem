<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
	use RefreshDatabase;

    public function test_login_page_exists()
    {
        // This line will navigate to the Login page to test
        $this->get('/login')       
        // This line will check whether the specific word is in the page
        ->assertSee('Login');
    }

    public function test_user_can_view_login_form()
    {
        // This line will navigate to the Login page to test
    	$response = $this->get('/login');
        
        // This line will test and return a true value whether the specific page returns a HTTP Request of 200, which means webpage exists.
        $response->assertSuccessful();
        
        // This line will test whether the Login form exists when viewing.
        $response->assertViewIs('auth.login');
    }

    public function test_login_page_with_mock_email_to_check_page_redirection()
    {
        // This line will initiate a fake login
    	Session ::start();
        
        // This line will POST to the login page with a mock email and password through a token.
    	$response = $this->call('POST', '/login',
            [
    	        'email' => 'matt@test.com',
                'password' => 'test123',
                '_token' => csrf_token()
    	    ]
        );

        // This line will ensure that the test is running and when the user logins, it must be redirected to the next page, hence HTTP request 302 is the redirection status. This test is only initiated when the response of the above code is true and it will get the status code.
    	$this->assertEquals(302, $response->getStatusCode());
    }

    public function test_user_can_be_authenticated_and_redirect_to_home()
    {
        // From this line below, a class User has to be created and declared first as a mock database that holds a fake email and password.
        $user = factory(User::class)->make();

        // This line below ensures that, when the test uses the mock email and password as a user, it should get to the login page.
        $response = $this->actingAs($user)->get('/login');

        // This line enables the test to redirect to the homepage once login is successful.
        $response->assertRedirect('/home');
    }

    public function test_user_can_login_with_correct_credentials()
    {
        // From this line below, class User is reused for this test. This time, the password is overrided and set to "secret".
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'secret'),
        ]);
        
        // From this line below, the test will be declared as a response and tries to login to the home page using the provided email and the password set here.
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        
        // From this line below, once the response is successfully tested, it will test for redirection to the homepage.
        $response->assertRedirect('/');
        
        // From this line below, once the page is redirected, the test will start to authenticate as the user. Once authentication is completed, it will login as the user.
        $this->assertAuthenticatedAs($user);
    }
}
