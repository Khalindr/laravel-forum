@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="">{{ $message->title }}</h2>
                    <span class="">
                        Ecrit par <a href="mailto:{{$message->user->email}}">{{ $message->user->name }}</a>
                    </span>
                    </div>

                    <div class="panel-body">
                        <p>{{ $message->text }}</p>
                        <form method="POST" action="{{ route('messages.destroy', ['id' => $message->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection