@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        <h2>{{ $cat->name }}</h2><a href="/messages/create" class="pull-right"><button class="btn btn-primary add">Ajouter</button></a>
    </div>

    <div class="panel-body">
        <div class="list-group">
            @if(!empty($subcat))
                @foreach( $subcat as $sub)
                    <h3>Sous-catégories</h3>
                <div class="buttons-edit">
                    <a href="/categories/{{$sub->id}}/edit" class=""><button class="btn btn-success">Modifier</button></a>
                    <form method="POST" action="{{ route('categories.destroy', ['id' => $sub->id]) }}" class="pull-right">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
                <a href="/categories/showMessages/{{$sub->id}}" class="list-group-item">
                    <h4>{{$sub->name}}</h4>
                </a>
            @endforeach
            @endif
                <hr>
            <h3>Messages</h3>
                @foreach( $messages as $mes)
                    <div class="buttons-edit">
                        <a href="/messages/{{$mes->id}}/edit" class=""><button class="btn btn-success">Modifier</button></a>
                        <form method="POST" action="{{ route('messages.destroy', ['id' => $mes->id]) }}" class="pull-right">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                    <a href="/messages/{{$mes->id}}" class="list-group-item">
                        <h4>{{$mes->title}}</h4><span style="font-style: italic;">{{$mes->created_at}}</span>
                        <p class="author pull-right">Par : <strong>{{ $mes->user_id }}</strong></p>
                        {{--{{request()->get('user')->where()}}--}}
                        {{--{{ $mes->user->name }}--}}
                    </a>

                @endforeach



        </div>
    </div>



    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">{{ $cat->name }}</div>--}}
                    {{--@foreach( $messages as $mes)--}}
                        {{--{{$mes->title}}--}}
                        {{--{{$mes->text}}--}}
                        {{--{{$mes->created_at}}--}}
                    {{--@endforeach--}}
                    {{--@if(! empty($subcat))--}}
                        {{--@foreach( $subcat as $sub)--}}
                            {{--{{$sub->name}}--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                    {{--<div class="panel-body">--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection

