<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TweetsTest extends TestCase
{
    use RefreshDatabase;

    protected $tweet;

    public function setUp()
    {
        parent::setUp();

        $this->tweet = factory('App\Tweet')->create();
    }

    /** @test */
    public function a_user_can_see_all_tweets()
    {
        $this->get('/')
            ->assertSee($this->tweet->body);
    }

    /** @test */
    public function a_user_can_see_a_single_tweet()
    {
        $this->get('/tweets/' . $this->tweet->id)
            ->assertSee($this->tweet->body);
    }

    /** @test */
    public function a_user_can_see_replies_to_a_tweet()
    {
        $reply = factory('App\Reply')->create(['tweet_id' => $this->tweet->id]);

        $this->get('/')
            ->assertSee($reply->body);
    }
}
