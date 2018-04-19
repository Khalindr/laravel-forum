@extends('layouts.app')

@section('content')
                    <div class="panel-heading">
                        <h2>Toutes les catégories</h2><a href="/categories/create" class="pull-right"><button class="btn btn-primary add">Ajouter</button></a>
                    </div>


                        <div class="panel-body">
                            <div class="list-group">
                                @foreach($categories as $category)
                                    <div class="buttons-edit">
                                        <a href="/categories/{{$category->id}}/edit" class=""><button class="btn btn-success">Modifier</button></a>
                                        <form method="POST" action="{{ route('categories.destroy', ['id' => $category->id]) }}" class="pull-right">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </div>
                                    <a href="/categories/showMessages/{{$category->id}}" class="list-group-item">
                                        <h4>{{$category->name}}</h4>
                                    </a>
                                @endforeach
                            </div>
                        </div>
@endsection