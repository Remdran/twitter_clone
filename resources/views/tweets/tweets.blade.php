@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading">Tweets</div>
                <div class="panel panel-default">

                    @foreach ($tweets as $tweet)
                        <div class="panel-body">
                            <div class="panel-heading">
                                <a href="#"> {{ $tweet->owner->name }} </a> said
                                {{ $tweet->created_at->diffForHumans() }}:
                            </div>
                            <article>
                                <div class='body'>
                                    <strong> {{ $tweet->body }} </strong>
                                </div>
                            </article>

                            @foreach ($tweet->replies as $reply)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#"> {{ $reply->owner->name }} </a> said
                                        {{ $reply->created_at->diffForHumans() }}:
                                    </div>
                                    <div class="panel-body">
                                        {{ $reply->body }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
