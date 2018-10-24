<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfileTest extends TestCase
{
    /** @test */
    public function an_authenticated_user_can_view_the_profile_page()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Will get the URL
        $this->get('/profile/'.$user->name)
            // Check whether the string exists
            ->assertSee('Personal details for '.$user['name']);
    }

    /** @test */
    public function an_authenticated_user_can_view_form()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Will get the URL
        $this->get('/profile/'.$user->name)
            // Check whether the it's showing the right View file
            ->assertViewIs('user.profiles.show');
    }
    
    /** @test */
    public function validate_that_company_field_in_form_is_required()
    {
        $this->withExceptionHandling();

        //Generate a fake profile
        $profile = factory('App\Profile')->create(['company' => null]);

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Test the patch route in the controller
        $this->patch('/profile', [
            'company' => ''
        ])
            // Session should have an error in company's field
            ->assertSessionHasErrors('company');
    }

    /** @test */
    public function validate_that_street_field_in_form_is_required()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Test the patch route in the controller
        $this->patch('/profile', [
            'street' => ''
        ])
            // Session should have an error in company's field
            ->assertSessionHasErrors('street');
    }

    /** @test */
    public function validate_that_city_field_in_form_is_required()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Test the patch route in the controller
        $this->patch('/profile', [
            'city' => ''
        ])
            // Session should have an error in company's field
            ->assertSessionHasErrors('city');
    }

    /** @test */
    public function validate_that_zipCode_field_in_form_is_required()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Test the patch route in the controller
        $this->patch('/profile', [
            'zip_code' => ''
        ])
            // Session should have an error in company's field
            ->assertSessionHasErrors('zip_code');
    }

    /** @test */
    public function validate_that_state_field_in_form_is_required()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Test the patch route in the controller
        $this->patch('/profile', [
            'state' => ''
        ])
            // Session should have an error in company's field
            ->assertSessionHasErrors('state');
    }

    /** @test */
    public function validate_that_country_field_in_form_is_required()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Test the patch route in the controller
        $this->patch('/profile', [
            'country' => ''
        ])
            // Session should have an error in company's field
            ->assertSessionHasErrors('country');
    }

    /** @test */
    public function validate_that_phone_field_in_form_is_required()
    {
        //Generate a fake profile
        $profile = factory('App\Profile')->create();

        // Assign it to the user
        $user = $profile->user;

        // Authenticate the user
        $this->be($user);

        // Test the patch route in the controller
        $this->patch('/profile', [
            'phone' => ''
        ])
            // Session should have an error in company's field
            ->assertSessionHasErrors('phone');
    }
}
