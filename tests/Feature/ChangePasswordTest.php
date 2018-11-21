<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChangePasswordTest extends TestCase
{
    // // Below is to test whether Change Password form exists by entering the page and viewing

    /** @test */
    public function authenticated_user_can_view_change_password_form_exists()
    {
        $this->be(factory(User::class)->create());

        $this->get('/changePassword')
            ->assertViewIs('auth.passwords.change');
    }

    // Below is to test whether Change Password page exists by entering the page and finding the word "Change Password"

    /** @test */
    public function authenticated_user_can_view_change_password_page()
    {
        $this->be(factory(User::class)->create());

        $this->get('/changePassword')
            ->assertSee('Change Password');
    }
}
