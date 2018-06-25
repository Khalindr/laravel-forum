@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    {{--{{$messages}}--}}
                    {{--<div class="panel-heading">{{ $category->name }}</div>--}}
                    @foreach( $messages as $mes)
                        {{$mes->title}}
                        {{$mes->text}}
                        {{$mes->created_at}}

                    @endforeach
                    {{--{{$subcategories}}--}}
                    {{--@if(! empty($subcategories))--}}
                    {{--@foreach( $subcategories as $sub)--}}
                    {{--{{$sub->name}}--}}
                    {{--@endforeach--}}
                    {{--@endif--}}
                    <div class="panel-body">

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

