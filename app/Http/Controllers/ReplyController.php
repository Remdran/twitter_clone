<?php

namespace App\Http\Controllers;

use App\Tweet;

class ReplyController extends Controller {


    /**
     * ReplyController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Tweet $tweet)
    {
        $tweet->addReply([
            'body'    => request('body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
