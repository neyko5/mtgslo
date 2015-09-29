@extends('layout.default')
@section('content')
    <div id="blog">
        <div class="section_header">
            <h3>Članki</h3>

            <!--<input type="text" class="search-query form-control" placeholder="Search">-->
        </div>
        <div class="row post_row">
            @foreach($articles as $key=>$article)
            <div class="col-sm-4">
                <div class="post @if($key%3==2) last @endif">
                    @if($article->picture)
                    <div class="img">
                        <a href="/clanki/{{$article->link()}}">
                            <img src="/files/articles/305w/{{$article->picture}}" alt="" class="img-responsive" />
                        </a>
                    </div>
                    @endif
                    <div class="text">
                        <h5><a href="/clanki/{{$article->link()}}">{{$article->title}}</a></h5>
                        <span class="date">{{$article->date}}</span>
                        {!! $article->intro !!}
                    </div>
                    <div class="author_box">
                        <h6>{{$article->author}}</h6>
                    </div>
                </div>
            </div>
            @if($key%3==2)
        </div>
        <div class="row post_row">
            @endif
            @endforeach
        </div>
        {!! $articles->render() !!}
    </div>
@endsection
