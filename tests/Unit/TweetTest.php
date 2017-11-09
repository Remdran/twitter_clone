<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TweetTest extends TestCase {

    use RefreshDatabase;

    protected $tweet;

    public function setUp()
    {
        parent::setUp();

        $this->tweet = factory('App\Tweet')->create();
    }
    /** @test */
    public function a_tweet_has_an_owner()
    {
        $this->assertInstanceOf('App\User', $this->tweet->owner);
    }

    /** @test */
    public function a_tweet_can_be_replied_to()
    {
        $this->setUp();

        $this->tweet->addReply([
            'body'    => 'test',
            'user_id' => 1
        ]);

        $this->assertCount(1, $this->tweet->replies);
    }
}
