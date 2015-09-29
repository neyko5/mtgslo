@extends('layout.default')
@section('content')
    <div class="container">
        <div id="blog_post">
            <div class="row">
                <div class="col-sm-8">
                    <img class="post_pic img-responsive" src="/files/leagues/594w/{{$league->picture}}" />

                    <div class="post_content">
                        <h2>{{$league->title}}</h2>
                        {!! $league->description !!}
                    </div>
                    @if(sizeof($league->rankings()))
                        <h4>Rezultati</h4>
                        <table class="table">
                            <thead>
                            <th>Mesto</th>
                            <th>Ime</th>
                            <th>Točke</th>
                            </thead>
                            <tbody>
                            @foreach($league->rankings() as $key=>$result)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$result->full_name}}</td>
                                    <td>{{$result->total_points}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <div class="col-sm-4">
                    <div class="sidebar">
                        <div class="box">
                            <div class="sidebar_header">
                                <h4>Turnirji lige</h4>
                            </div>
                            <ul class="sidebar_menu">
                                @foreach($league->tournaments as $tournament)
                                <li><a href="/turnirji/{{$tournament->link()}}">{{$tournament->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="box last">
                            <div class="sidebar_header">
                                <h4>Ostale lige</h4>
                            </div>
                            <div class="sidebar_menu">
                                <ul>
                                @foreach(\MtgSlo\League::where("id","<>",$league->id)->get() as $other)
                                    <li><a href="/lige/{{$other->link()}}">{{$other->title}}</a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
