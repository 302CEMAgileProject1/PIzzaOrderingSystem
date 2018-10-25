<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutUsTest extends TestCase
{
    // Below is to test whether AboutUs page exists by entering the page and finding the specified word.

    public function test_aboutus_page_exists_by_finding_store_location_text()
    {
        // This line will navigate to the aboutUs page to test
        $this->get('/aboutUs')
        // This line will check whether the specific word is in the page
        ->assertSee('Store Location');
    }

    // Below is to test whether AboutUs page exists by entering the page and finding the specified word.

    public function test_aboutus_page_exists_by_finding_working_hours_text()
    {
        // This line will navigate to the aboutUs page to test
        $this->get('/aboutUs')
        // This line will check whether the specific word is in the page
        ->assertSee('Working Hours');
    }
}
