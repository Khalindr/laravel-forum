@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Commentaire lié au message XXX</div>
                    <div class="panel-body">
                        <p>{{ $comment->text }}</p>
                        <p>Ecrit par <a href="mailto:{{$comment->user->email}}">{{ $comment->user->name }}</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection