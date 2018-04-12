@extends('layouts.app')

@section('content')
                    <div class="panel-heading">Modification d'une catégorie</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        <form method="POST" action="{{ route('categories.update', ['id' => $category->id]) }}">

                            {{ csrf_field() }}

                            <p><input type="text" name="parent_id" placeholder="parent_id ?" value="{{ $category->parent_id }}"></p>
                            <p><input type="text" name="name" placeholder="name" value="{{ $category->name }}"></p>
                            <p><input type="submit" value="Modifier" ></p>
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        </form>
                        {{ dump($category->id) }}
                        {{ dump($category->parent_id) }}
                        {{ dump($category->name) }}
                    </div>

@endsection