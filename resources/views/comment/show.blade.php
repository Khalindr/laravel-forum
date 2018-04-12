@extends('layouts.app')

@section('content')

                    <div class="panel-heading">Commentaire lié au message XXX</div>
                    <div class="panel-body">
                        <p>{{ $comment->text }}</p>
                        <p>Ecrit par <a href="mailto:{{$comment->user->email}}">{{ $comment->user->name }}</a></p>
                    </div>


@endsection