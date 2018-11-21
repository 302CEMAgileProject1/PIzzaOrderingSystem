<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderHistoryTest extends TestCase
{
    // Below is to test whether OrderHistory form exists by entering the page and viewing

    /** @test */
    public function authenticated_user_can_view_order_history_page_exists()
    {
        // Create a fake user
        $this->be(factory(User::class)->create());
        // Get URL of page
        $this->get('/orderHistory')
        // Test to view order history form
            ->assertViewIs('user.orders.index');
    }

    // Below is to test whether OrderHistory page exists by entering the page and finding the word "Order History"

    /** @test */
    public function authenticated_user_can_view_order_history()
    {
        // Create a fake user
        $this->be(factory(User::class)->create());
        // Get URL of Page
        $this->get('/orderHistory')
        // To check string whether exists
            ->assertSee('Order History');
    }
}
