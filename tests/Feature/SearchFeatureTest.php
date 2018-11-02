<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchFeatureTest extends TestCase
{
    // Below is to test whether search feature page exists by entering the page and finding the word "Search Result"

    public function test_search_feature_page_exists()
    {
        // This line will navigate to the search feature page to test   
        $this->get('/menu/search')
        // This line will check whether the specific word is in the page
        ->assertSee('Search Result');
    }
}
