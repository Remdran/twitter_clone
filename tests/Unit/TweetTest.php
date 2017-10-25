<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TweetTest extends TestCase {

    use RefreshDatabase;

    /** @test */
    public function a_tweet_has_an_owner()
    {
        $tweet = factory('App\Tweet')->create();

        $this->assertInstanceOf('App\User', $tweet->owner);
    }
}
