@extends('layouts.app')

@section('content')
                    <div class="panel-heading">Ajout d'une catégorie</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        <form method="POST" action="{{ route('categories.store') }}">
                            {{ csrf_field() }}

                            <p><input type="text" name="parent_id" placeholder="parent_id ?"></p>
                            <p><input type="text" name="name" placeholder="nom de la catégorie"></p>
                            <p><input type="submit" value="ajouter" ></p>


                        </form>
                    </div>
@endsection