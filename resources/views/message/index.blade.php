@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Messages de la catégorie XXX</div>

                        <div>
                            @foreach($messages as $message)
                                <li><a href="/messages/{{$message->id}}">{{ $message->titre }}</a></li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection