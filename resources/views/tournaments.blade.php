@extends('layout.default')
@section('content')
    <div style="margin-top: 20px;" id="calendar"></div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#calendar').fullCalendar({
                events: '/turnirji/koledar',
                header: {
                    right: 'prev,next',
                    center: '',
                    left: 'title'
                },
                lang:"sl"
            });
        });
    </script>
@endsection
