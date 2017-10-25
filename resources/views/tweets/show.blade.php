@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong><a href="#"> {{ $tweet->owner->name }} </a></strong> -
                        {{ $tweet->created_at->diffForHumans() }}:
                    </div>

                    <div class="panel-body">
                        <strong>{{ $tweet->body }}</strong>
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
            </div>
        </div>
    </div>
@endsection