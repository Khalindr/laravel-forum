@extends('layouts.app')

@section('content')

                    <div class="panel-heading">Commentaires lié au message XXX</div>


                        <div>
                            @foreach($comments as $comment)
                                <li><a href="/comments/{{$comment->id}}">{{ $comment->text }}</a></li>
                            @endforeach
                        </div>


@endsection