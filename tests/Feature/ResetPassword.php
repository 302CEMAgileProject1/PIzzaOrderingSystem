<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResetPassword extends TestCase
{
    // Below is to test whether Reset Password page exists by entering the page and finding the word "Reset Password"

    /** @test */
    public function user_can_view_reset_password_page()
    {
    	// Get the URL
        $this->get('/password/reset')
        	// See the string
            ->assertSee('Reset Password');
    }
}


