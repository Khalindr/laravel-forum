@extends('layouts.app')

@section('content')

                    <div class="panel-heading">
                        <h2 class="">{{ $message->title }}</h2>
                    <span class="">
                        Ecrit par <a href="mailto:{{$message->user->email}}">{{ $message->user->name }}</a>
                    </span>
                    </div>

                    <div class="panel-body">
                        <p>{{ $message->text }}</p>
                        <p><img src="{{ Storage::url($message->file) }}"></p>
                        <form method="POST" action="{{ route('messages.destroy', ['id' => $message->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit">Delete</button>
                        </form>
                        <div class="list-group-item">
                            @foreach($message->comments as $comment)
                                <div class="list-group-item">
                                    <h4 class="">Par ...</h4>
                                    <p>{{ $comment->text }}</p>
                                </div>
                            @endforeach
                        </div>
                        <form method="POST" action="{{ route('comments.store') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="message_id" value="{{ $message->id }}">
                            <textarea type="text" name="text" placeholder="Votre commentaire"></textarea>
                            <button type="submit">Soumettre</button>
                        </form>
                    </div>
@endsection
