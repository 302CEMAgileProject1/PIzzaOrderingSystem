<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    /** @test  **/
    function a_profile_has_a_user()
    {
        $profile = factory('App\Profile')->create();

        $this->assertInstanceOf('App\User', $profile->user);
    }
}
