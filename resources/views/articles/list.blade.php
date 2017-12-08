@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Articles</div>

                <div class="panel-body">
                    <div class="list-group">
                        @foreach ($articles as $article)
                            <div class="list-group-item-title">
                                <h4>{{$article->title}}</h4>
                            </div>

                            <p>By <span style="color:red">{{$article->user->name}}</span></p>
                            <p>
                                @foreach ($article->websites as $website)
                                <a href="{{$website->url}}">{{$website->url}}</a>
                                <br>
                                @endforeach
                            </p>

                            <div class="list-group-item-content">
                                {{$article->content}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
