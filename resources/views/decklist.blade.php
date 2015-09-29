@extends('layout.default')
@section('content')
    <div id="blog_post">
        <div class="row">
            <div class="col-sm-8">
                    <div class="post_content">
                    <h2>{{$ranking->tournament}} - {{$ranking->full_name}}</h2>
                    <span class="date">{{$ranking->place}}. mesto</span>
                    @foreach(preg_split("/((\r?\n)|(\r\n?))/", $ranking->decklist) as $line)
                    @if(!is_numeric(substr($line, 0, 1)))
                    <h4>{{$line}}</h4>
                    @elseif(sizeof($card=explode(" ",$line,2))>1)
                    {{$card[0]}} <a name='{{$card[1]}}' class='card-over' href='http://gatherer.wizards.com/Pages/Card/Details.aspx?name={{$card[1]}}'>{{$card[1]}}</a><br>
                    @endif
                    @endforeach
                </div>
            </div>

            <div class="col-sm-4">
                <div class="sidebar">
                    <div class="box">
                         <img id='card-hover' class='card' src='http://gatherer.wizards.com/Handlers/Image.ashx?size=small&multiverseid=10100000&type=card'>
                    </div>
                    <div class="box last">
                        <div class="sidebar_header">
                            <h4>Vse deckliste</h4>
                        </div>
                        <div class="sidebar_menu">
                            <ul>
                                @foreach(\MtgSlo\Ranking::where("id_tournament",$ranking->id_tournament)->orderBy("place","ASC")->get() as $other)
                                    <li @if($ranking->id==$other->id)class="active"@endif>{{$other->place}}. <a href="/deckliste/{{$other->link()}}">{{$other->full_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".card-over").hover(
                    function () {
                        var src ="http://gatherer.wizards.com/Handlers/Image.ashx?type=card&name="+ $(this).attr("name")+"&size=small";
                        $("#card-hover").attr("src",src);
                    }
            );
        });
    </script>
@endsection
