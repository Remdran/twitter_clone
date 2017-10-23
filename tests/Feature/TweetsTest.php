<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class TweetsTest extends TestCase {

    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_all_tweets()
    {
        $tweet = factory('App\Tweet')->create();

        $response = $this->get('/');
        $response->assertSee($tweet->body);
    }

    public function a_user_can_see_a_single_tweet()
    {
        $tweet = factory('App\Tweet')->create();

        $response = $this->get('/' . $tweet->id);
        $response->assertSee($tweet->body);
    }
}
