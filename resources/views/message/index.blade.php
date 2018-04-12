@extends('layouts.app')

@section('content')
                    <div class="panel-heading">Messages de la catégorie XXX</div>

                        <div class="panel-body">
                            <div class="list-group">
                            @foreach($messages as $message)
                                    <a href="/messages/{{$message->id}}" class="list-group-item">

                                        <div class="list-group-item-heading">
                                            <h4 class="">{{ $message->title }}</h4>


                                        </div>
                                        <div class="list-group-item-text">
                                            {{ $message->text }}
                                            {{--<p><a href="/messages/{{$message->id}}/edit" class="pull-right"><button>Modifier</button></a>--}}
                                            {{--<form method="POST" action="{{ route('messages.destroy', ['id' => $message->id]) }}" class="pull-right">--}}
                                                {{--{{ csrf_field() }}--}}
                                                {{--<input type="hidden" name="_method" value="DELETE">--}}
                                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                                {{--<button type="submit">Supprimer</button>--}}
                                            {{--</form></p>--}}
                                        </div>



                                        {{--<h4 class="list-group-item-heading">{{ $message->title }}</h4>--}}
                                        {{--<p class="list-group-item-text">{{ $message->text }}<</p>--}}
                                        {{--<p class="author">Par : {{ $message->user->name }}</p>--}}
                                    </a>
                            @endforeach
                            </div>
                        </div>
                    </div>
@endsection