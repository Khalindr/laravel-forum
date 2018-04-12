@extends('layouts.app')

@section('content')
    <div>
    <h2>{{ $message->title }}</h2>
        <p>{{ $message->text }}</p>
        <p>Ecrit par <a href="mailto:{{$message->user->email}}">{{ $message->user->name }}</a></p>
    </div>
@endsection

