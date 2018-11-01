<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PromotionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     
    public function testExample()
    {
        $this->assertTrue(true);
    }*/

    // Below is to test whether promotion page exists by entering the page and finding the word "Promotions"

    public function test_promotion_page_exists()
    {
        $this->get('/promotion')
        ->assertSee('Promotions');
    }

    public function test_a_user_can_see_the_promo_title()
    {
        $product = factory('App\Promotion')->create();

        $response = $this->get('/promotion');
        $response->assertSee($product->name);
    }

    public function test_a_user_can_see_the_promo_description()
    {
        $product = factory('App\Promotion')->create();

        $response = $this->get('/promotion');
        $response->assertSee($product->description);
    }

    public function test_a_user_can_see_the_promo_price()
    {
        $product = factory('App\Promotion')->create();

        $response = $this->get('/promotion');
        $response->assertSee($product->code);
    }
}
