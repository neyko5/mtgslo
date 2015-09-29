@extends('layout.default')
@section('content')
    <div id="blog">
        <div class="container">
            <div class="section_header">
                <h3>Zadnje novice</h3>
            </div>
            <div class="row post_row">
                @foreach($news as $key=>$new)
                <div class="col-sm-4">
                    <div class="post @if($key%3==2) last @endif">
                        @if($new->picture)
                            <div class="img">
                                <img src="/files/news/305w/{{$new->picture}}">
                            </div>
                        @endif
                        <div class="text">
                            <h5>{{$new->title}}</h5>
                            <span class="date">{{$new->date}}</span>
                            {!! $new->text !!}
                        </div>
                        <div class="author_box"> </div>
                    </div>
                </div>
                @if($key%3==2)
            </div>
            <div class="row post_row">
                @endif
                @endforeach
            </div>
            {!! $news->render() !!}
        </div>
    </div>
@endsection


