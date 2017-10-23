@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tweets</div>

                    <div class="panel-body">
                        @foreach ($tweets as $tweet)
                            <article>
                                <div class='body'>
                                    {{ $tweet->body }}
                                </div>
                            </article>
                            <hr>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
