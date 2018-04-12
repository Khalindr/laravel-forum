@extends('layouts.app')

@section('content')
                    <div class="panel-heading">Toutes les catégories</div>


                        <div class="panel-body">
                            <div class="list-group">
                                @foreach($categories as $category)
                                    <a href="/categories/{{$category->id}}" class="list-group-item">
                                        <h4>{{$category->name}}</h4>
                                    </a>
                                @endforeach
                            </div>
                        </div>


@endsection