@extends('layout.default')
@section('content')
    <div class="container">
        <div id="blog_post">
            <div class="row">
                <div class="col-sm-8">
                    <img class="post_pic img-responsive" src="/files/competitions/594w/{{$competition->picture}}" />

                    <div class="post_content">
                        <h2>{{$competition->title}}</h2>
                        {!! $competition->text !!}
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="sidebar">
                        <div class="box last">
                            <div class="sidebar_header">
                                <h4>Ostale nagradne igre</h4>
                            </div>
                            <div class="sidebar_menu">
                                <ul>
                                    @foreach(\MtgSlo\Competition::where("id","<>",$competition->id)->get() as $other)
                                    <li><a href="/nagradne/{{$other->link()}}">{{$other->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
