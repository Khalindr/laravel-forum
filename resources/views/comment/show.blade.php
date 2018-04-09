@extends('layouts.app')

@section('content')
    <div>
        <p>{{ $comment->text }}</p>
        <p>Ecrit par <a href="mailto:{{$comment->user->email}}">{{ $comment->user->name }}</a></p>
    </div>
@endsection

