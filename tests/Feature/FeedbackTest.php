<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeedbackTest extends TestCase
{
    // Below is to test whether Feedback page exists by entering the page and finding the word "Feedback"

    public function test_feedback_page_exists()
    {
        //This line below is used to go to the feedback page
        $this->get('/feedback')
        //This line below is used to see whether the word "Feedback" can be seen to pass the test
        ->assertSee('Feedback');
    }

    //Below is to test whether the user can see the feedback form

    public function test_user_can_view_feedback_form()
    {
        //This line below is first attached to a method called 'response' and then response is used to go to feedback page
        $response = $this->get('/feedback');
        //This line below is used to confirm that the feedback page is successfully viewed by asserting a HTTP Request 200 which means OK.
        $response->assertSuccessful();
        //This line below is used to see whether the user can view the feedback form specifically.
        $response->assertViewIs('user.feedback.create');
    }

    //Below is to test whether the user can see the specific name form in feedback page
    public function validate_whether_name_field_in_form_is_required()
    {
        $this->withExceptionHandling();

        //Generate a fake profile
        $feedback = factory('App\Feedback')->create(['name' => null]);

        // Test the post route in the controller
        $this->post('/feedback', [
            'name' => ''
        ])
            // Session should have an error in name's field
            ->assertSessionHasErrors('name');
    }

    //Below is to test whether the user can see the specific title form in feedback page
    public function validate_whether_title_field_in_form_is_required() 
    {

        //Generate a fake profile
        $profile = factory('App\Feedback')->create(['title' => null]);

        // Test the post route in the controller
        $this->post('/profile', [
            'title' => ''
        ])
            // Session should have an error in title's field
            ->assertSessionHasErrors('title');
    }

    //Below is to test whether the user can see the specific message form in feedback page
    public function validate_whether_message_field_in_form_is_required() 

    {
        //Generate a fake profile
        $profile = factory('App\Feedback')->create(['message' => null]);

        // Test the post route in the controller
        $this->post('/profile', [
            'message' => ''
        ])
            // Session should have an error in message's field
            ->assertSessionHasErrors('message');
    }



}
