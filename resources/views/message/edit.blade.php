@extends('layouts.app')

@section('content')
                    <div class="panel-heading">Ajout d'un message</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        <form method="POST" action="{{ route('messages.update', ['id' => $message->id]) }}">

                            {{ csrf_field() }}

                            <p><input type="text" name="user_id" placeholder="user_id" value="{{ $message->user_id }}"></p>
                            <p><input type="text" name="category_id" placeholder="category_id" value="{{ $message->category_id }}"></p>
                            <p><input type="text" name="title" placeholder="titre" value="{{ $message->title }}"></p>
                            <p><textarea type="text" name="text" placeholder="texte">{{ $message->text }}</textarea></p>
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <p><input type="submit" value="Modifier" ></p>

                        </form>
                        {{dump($message->user_id )}}
                    </div>
@endsection