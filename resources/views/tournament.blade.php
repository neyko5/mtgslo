@extends('layout.default')
@section('content')
    <div class="container">
        <div id="blog_post">
            <div class="row">
                <div class="col-sm-8">
                    <img class="post_pic img-responsive" src="/files/tournaments/594w/{{$tournament->picture}}" />

                    <div class="post_content">
                        <h2>{{$tournament->name}}</h2>
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
                        <div class="box">
                            <div class="sidebar_header">
                                <h4>Turnirji lige</h4>
                            </div>
                            <ul class="sidebar_menu">
                                <ul>

                                </ul>
                            </ul>
                        </div>

                        <div class="box last">
                            <div class="sidebar_header">
                                <h4>Ostale lige</h4>
                            </div>
                            <ul class="sidebar_menu">
                                <ul>

                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
