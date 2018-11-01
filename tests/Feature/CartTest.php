<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartTest extends TestCase
{
    // Below is to test whether Cart form exists by entering the page and viewing

    /** @test */
    public function authenticated_user_can_view_cart()
    {
        // Create fake user
        $this->be(factory(User::class)->create());
        // Get URL of page
        $this->get('/cart')
        // Check whether form exists
            ->assertViewIs('user.cart.index');
    }

    // Below is to test whether Cart page exists by entering the page and finding the word "Cart"

    /** @test */
    public function authenticated_user_can_view_cart_page()
    {
        // Create fake user
        $this->be(factory(User::class)->create());
        // Get URL of page
        $this->get('/cart')
        // Check string whether exists
            ->assertSee('Cart');
    }
}
