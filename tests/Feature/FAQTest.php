<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FAQTest extends TestCase
{
    /** @test */
    public function FAQ_page_exists()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('Frequently Asked Questions');
    }

    /** @test */
    public function user_can_view_FAQ_page()
    {
        // get the URL
        $this->get('/faq')
            // check to see the file in folder structure and name is correct
            ->assertViewIs('user.FAQ.index');
    }

    /** @test */
    public function user_can_view_first_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('1. How to contact Penang Pizza admin when I have some suggestion and advice?');
    }

    /** @test */
    public function user_can_view_second_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('2. I have problem updating my personal information.');
    }

    /** @test */
    public function user_can_view_third_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('3. I forgot my password. How do I reset?');
    }

    /** @test */
    public function user_can_view_fourth_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('4. I cannot find my previous order history.');
    }

    /** @test */
    public function user_can_view_fifth_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('5. Can I confirm if Penang Pizza has received my online order?');
    }

    /** @test */
    public function user_can_view_sixth_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('6. I have just moved and would like to change my address, how do I do this?');
    }

    /** @test */
    public function user_can_view_seventh_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('7. How can I pay by credit card?');
    }

    /** @test */
    public function user_can_view_eighth_question()
    {
        // get the URL
        $this->get('/faq')
            // check and see if string exists
            ->assertSee('8. I can’t find any help in FAQ section, what should I do?123');
    }
}
