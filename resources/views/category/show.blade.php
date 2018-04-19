@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $category->name }}</div>
                    @foreach( $message as $mes)
                        {{$mes->title}}
                    @endforeach
                    @if($sub_categories)
                        @foreach( $sub_categories as $sub)
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

