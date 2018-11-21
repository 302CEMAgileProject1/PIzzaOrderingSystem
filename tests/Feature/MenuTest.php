<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MenuTest extends TestCase
{
    // Below is to test whether Menu page exists by entering the page and finding the word "Pizza Menu"

    public function test_menu_page_exists()
    {
        // This line will navigate to the Menu page to test
        $this->get('/menu')
        // This line will check whether the specific word is in the page
        ->assertSee('Pizza Menu');
    }

    // Below is to test whether the user can see the menu title

    public function test_a_user_can_see_the_menu_title()
    {
        // This line below is to create a fake product page and declare product as a method
    	$product = factory('App\Product')->create();
        // This line below is to navigate to the Menu page
    	$response = $this->get('/menu');
        // This line below will specifically test and see only the title of each product in the menu.
    	$response->assertSee($product->name);
    }

    // Below is to test whether the user can see the menu description

    public function test_a_user_can_see_the_menu_description()
    {
        // This line below is to create a fake product page and declare product as a method
        $product = factory('App\Product')->create();
        // This line below is to navigate to the Menu page
        $response = $this->get('/menu');
        // This line below will specifically test and see only the description of each product in the menu.
        $response->assertSee($product->description);
    }

    // Below is to test whether the user can see the menu price

    public function test_a_user_can_see_the_menu_price()
    {
        // This line below is to create a fake product page and declare product as a method
        $product = factory('App\Product')->create();
        // This line below is to navigate to the Menu page
        $response = $this->get('/menu');
        // This line below will specifically test and see only the price of each product in the menu.
        $response->assertSee($product->price);
    }
}
