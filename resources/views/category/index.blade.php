@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Les catégories</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                        {{--{{ session('status') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}

                        <ul>
                            <li>La liste des categories s'affichera ici</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection