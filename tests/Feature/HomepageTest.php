<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomepageTest extends TestCase
{
    // Below is to test whether Home page exists by entering the page and finding the word "Penang Pizza Ordering Menu"

    public function test_home_page_exists()
    {
        // This line will navigate to the Home page to test   
        $this->get('/')
        // This line will check whether the specific word is in the page
        ->assertSee('Penang Pizza Ordering Menu');
    }
}
