@extends('layout.default')
@section('content')
    <div class="container">
        <div id="blog_post">
            <div class="row">
                <div class="col-sm-8">
                    @if($tournament->picture)
                    <img class="post_pic img-responsive" src="/files/tournaments/594w/{{$tournament->picture}}" />
                    @endif
                    <div class="post_content">
                        <h2>{{$tournament->name}}</h2>
                        <table class="table">
                            <tr>
                                <td>Lokacija</td>
                                <td>{{$tournament->location}}</td>
                            </tr>
                            <tr>
                                <td>Datum</td>
                                <td>{{$tournament->date}}</td>
                            </tr>
                            <tr>
                                <td>Začetek prijav</td>
                                <td>{{$tournament->registration}}</td>
                            </tr>
                            <tr>
                                <td>Začetek turnirja</td>
                                <td>{{$tournament->start}}</td>
                            </tr>
                            <tr>
                                <td>Sodnik</td>
                                <td>{{$tournament->judge}}</td>
                            </tr>
                            @if($tournament->league)
                            <tr>
                                <td>Liga</td>
                                <td><a href="/lige/{{$tournament->league->link()}}">{{$tournament->league->title}}</td>
                            </tr>
                            @endif
                            <tr>
                                <td>Format</td>
                                <td>{{$tournament->format}}</td>
                            </tr>
                            <tr>
                                <td>Cena</td>
                                <td>{{$tournament->price}}</td>
                            </tr>
                            <tr>
                                <td>REL</td>
                                <td>{{$tournament->rel}}</td>
                            </tr>
                            <tr>
                                <td>Forum link</td>
                                <td><a href="{{$tournament->forum_link}}" target="_blank">LINK</a></td>
                            </tr>
                        </table>
                        {!! $tournament->text !!}

                        @if($tournament->rankings->count())
                        <h4>Rezultati</h4>
                        <table class="table">
                            <thead>
                                <th>Mesto</th>
                                <th>Ime</th>
                                <th>Točke</th>
                                @if($tournament->hasDecklists())
                                <th>Decklist</th>
                                @endif
                            </thead>
                            <tbody>
                                @foreach($tournament->rankings as $result)
                                <tr>
                                    <td>{{$result->place}}</td>
                                    <td>{{$result->full_name}}</td>
                                    <td>{{$result->points}}</td>
                                    @if($tournament->hasDecklists())
                                    <td><a href="/deckliste/{{$result->link()}}">Decklista</a></td>
                                    @endif
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="sidebar">
                        @if($tournament->league)
                        <div class="box last">
                            <div class="sidebar_header">
                                <h4>Turnirji lige</h4>
                            </div>
                            <ul class="sidebar_menu">
                                <ul>
                                    @foreach($tournament->league->tournaments as $tour)
                                        <li @if($tournament->id==$tour->id) class="active" @endif><a href="/turnirji/{{$tour->link()}}}">{{$tour->name}}</a></li>
                                    @endforeach
                                </ul>
                            </ul>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
@endsection
