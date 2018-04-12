@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Toutes les catégories</div>


                        <div class="panel-body">
                            @foreach($categories as $category)
                                <?php url()->current(); ?>
                                <li><a href="/categories/{{$category->id}}">{{ $category->name }}</a></li>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection