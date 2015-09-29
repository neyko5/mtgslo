@extends('layout.default')
@section('content')
    <div class="section_header">
        <h3>Trgovine z Magic izdelki</h3>
    </div>

    <div id="map"></div>



    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB12Z7HGoYaebjtMYKwa4NdikOVQRlY1J4&sensor=false"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
    <script type="text/javascript">
        function initialize() {
            geocoder = new google.maps.Geocoder();
            var mapOptions = {
                zoom: 17,
                disableDefaultUI: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map"),mapOptions);
            bounds = new google.maps.LatLngBounds ();
            var infowindow=new Array();
            var lastwindow=1;
                    @foreach($shops as $key=>$shop)
                    var address = "{{$shop->address}}, {{$shop->city}}, Slovenija";
            infowindow[{{$key}}] = new InfoBox({
                content: document.getElementById("infobox-{{$key}}"),
                disableAutoPan: false,
                maxWidth: 150,
                pixelOffset: new google.maps.Size(-140, 0),
                zIndex: null,
                boxStyle: {
                    background: "url('http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/examples/tipbox.gif') no-repeat",
                    opacity: 0.8,
                    width: "280px"
                },
                closeBoxMargin: "12px 4px 2px 2px",
                closeBoxURL: "/img/map-close.gif",
                infoBoxClearance: new google.maps.Size(1, 1)
            });
            position=new google.maps.LatLng({{$shop->coorX}},{{$shop->coorY}});
            bounds.extend(position);
            map.fitBounds(bounds);
            marker{{$key}} = new google.maps.Marker({
                map: map,
                icon: "/img/map-marker.png",
                position: position,
                title:"{{$shop->title}}"
            });
            google.maps.event.addListener(marker{{$key}}, 'click', function() {
                infowindow[lastwindow].close();
                infowindow[{{$key}}].open(map,marker{{$key}});
                lastwindow={{$key}};
            });
            @endforeach



        }
        $(document).ready(function(){
            $("#map").css({height: $(window).height()-220});
            $("body").css({height: $(window).height()-220});
            $(window).resize(function(){
                $("#map").css({height: $(window).height()-220});
                $("body").css({height: $(window).height()-220});
            });
            initialize();

        });
    </script>


    @foreach($shops as $key=>$shop)
        <div class="infobox-wrapper">
            <div class="infobox" id="infobox-{{$key}}">
                <b>{{$shop->name}}</b><br>
                {{$shop->address}}<br>
                @if($shop->link)
                    <a href="{{$shop->link}}" target="_blank">Povezava</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection

