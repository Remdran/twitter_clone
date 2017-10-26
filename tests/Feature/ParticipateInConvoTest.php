<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ParticipateInConvoTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_can_reply_to_a_tweet()
    {
        $user = factory('App\User')->create();
        $this->signIn($user);

        $tweet = factory('App\Tweet')->create();

        $reply = factory('App\Reply')->create();

        $this->post('/tweets/' . $tweet->id . '/replies', $reply->toArray());

        $this->get('/')
            ->assertSee($reply->body);
    }
}
