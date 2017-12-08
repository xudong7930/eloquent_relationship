@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Websites</div>

                <div class="panel-body">
                    <div class="list-group">
                        @foreach ($websites as $website)
                            <div class="list-group-item">
                                The following articles from this website:
                                <a href="{{$website->url}}">{{$website->url}}</a>
                            </div>
                            <div class="list-group-item">
                                @foreach ($website->articles as $article)
                                <p>{{$article->title}}</p>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
