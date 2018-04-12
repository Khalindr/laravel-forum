@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Commentaires lié au message XXX</div>


                        <div>
                            @foreach($comments as $comment)
                                <li><a href="/comments/{{$comment->id}}">{{ $comment->text }}</a></li>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection