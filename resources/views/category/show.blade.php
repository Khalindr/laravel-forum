@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $cat->name }}</div>
                    @foreach( $messages as $mes)
                        {{$mes->title}}
                        {{$mes->text}}
                        {{$mes->created_at}}
                    @endforeach
                    @if(! empty($subcat))
                        @foreach( $subcat as $sub)
                            {{$sub->name}}
                        @endforeach
                    @endif
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

