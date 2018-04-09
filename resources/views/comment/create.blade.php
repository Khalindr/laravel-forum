@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajout d'un commentaire</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        <form method="POST" action="{{ route('comment.store') }}">
                            {{ csrf_field() }}

                            <p><input type="text" name="message_id" placeholder="message_id"></p>
                            <p><input type="text" name="user_id" placeholder="user_id"></p>
                            <p><textarea type="text" name="text" placeholder="texte"></textarea></p>
                            <p><input type="submit" value="ajouter" ></p>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection