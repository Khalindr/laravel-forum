@extends('layouts.app')

@section('content')
                    <div class="panel-heading">Ajout d'un message</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        <form method="POST" action="{{ route('messages.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            {{--<p><input type="text" name="user_id" placeholder="user_id"></p>--}}
                            <p><input type="text" name="category_id" placeholder="category_id"></p>
                            <p><input type="text" name="title" placeholder="titre"></p>
                            <p><textarea type="text" name="text" placeholder="texte"></textarea></p>
                            <p><input type="file" name="file"></p>
                            <p><input type="submit" value="ajouter" ></p>


                        </form>
                    </div>

@endsection