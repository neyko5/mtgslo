@extends('layout.default')
@section('content')
    <div id="blog">
        <div class="section_header">
            <h3>Lige</h3>
        </div>
        <div class="row post_row">
            @foreach($leagues as $key=>$league)
            <div class="col-sm-4">
                <div class="post @if($key%3==2) last @endif">
                    @if($league->picture)
                        <div class="img">
                            <a href="/lige/{{$league->link()}}">
                                <img src="/files/leagues/305w/{{$league->picture}}" alt="" class="img-responsive" />
                            </a>
                        </div>
                    @endif
                    <div class="text">
                        <h5><a href="/lige/{{$league->link()}}">{{$league->title}}</a></h5>
                        {!! $league->intro !!}
                    </div>
                    <div class="author_box">

                    </div>
                </div>
            </div>
            @if($key%3==2)
        </div>
        <div class="row post_row">
            @endif
            @endforeach
        </div>

    </div>

@endsection