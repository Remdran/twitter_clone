@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-group">


                    @foreach ($tweets as $tweet)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong><a href="#"> {{ $tweet->owner->name }} </a></strong> -
                                {{ $tweet->created_at->diffForHumans() }}:
                            </div>

                            <div class="panel-body">
                                <strong> {{ $tweet->body }} </strong>
                            </div>

                            @foreach ($tweet->replies as $reply)
                                <hr>
                                <div class="panel-heading">
                                    <strong><a href="#"> {{ $reply->owner->name }} </a></strong> -
                                    {{ $reply->created_at->diffForHumans() }}:
                                </div>

                                <div class="panel-body">
                                    {{ $reply->body }}
                                </div>
                            @endforeach
                        </div>

                        @if (auth()->check())
                            <form action="/tweets/{{ $tweet->id }}/replies" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <textarea name="body" id="body" class="form-control" placeholder="Add a reply"
                                              rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Reply</button>
                            </form>
                        @endif
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
