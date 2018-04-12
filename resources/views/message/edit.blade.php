@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajout d'un message</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        <form method="POST" action="{{ route('message.update', ['id' => $message->id]) }}">
                            @method('PUT')
                            {{ csrf_field() }}

                            <p><input type="text" name="user_id" placeholder="user_id" value="{{ $message->user_id }}"></p>
                            <p><input type="text" name="category_id" placeholder="category_id" value="{{ $message->category_id }}"></p>
                            <p><input type="text" name="title" placeholder="titre" value="{{ $message->titre }}"></p>
                            <p><textarea type="text" name="text" placeholder="texte">{{ $message->texte }}</textarea></p>
                            <p><input type="submit" value="Modifier" ></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection