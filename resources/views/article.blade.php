@extends('layout.default')
@section('content')
    <div class="container">
        <div id="blog_post">
        <div class="row">
            <div class="col-sm-8">
                <img class="post_pic img-responsive" src="/files/clanki/580w/{{$article->picture}}" />

                <div class="post_content">
                    <h2>{{$article->title}}</h2>
                    <span class="date">{{$article->date}}</span>
                    {!! $article->text !!}
                    <div class="author_box">
                        <div class="author">{{$article->author}}</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="sidebar">
                    <div class="box">
                        <div class="sidebar_header">
                            <h4>Menu</h4>
                        </div>

                        <ul class="sidebar_menu">
                            <ul>
                                <li><a href="#">Coffee</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Packaging   </a></li>
                            </ul>
                        </ul>
                    </div>

                    <div class="box box2">
                        <div class="sidebar_header">
                            <h4>Recent Posts</h4>
                        </div>

                        <div class="recent">
                                    <span>
                                        <img src="img/recent_photos.jpg" alt="">
                                    </span>
                            <p>There are many  embarrassing hidden in the middle of text.</p>
                        </div>
                        <div class="recent">
                                    <span>
                                        <img src="img/recent_photos.jpg" alt="">
                                    </span>
                            <p>There are many  embarrassing hidden in the middle of text.</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="sidebar_header">
                            <h4>Popular photos</h4>
                        </div>
                        <ul class="recent_photos">
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                            <li>
                                <a href="#"><img src="img/recent_photos.jpg"></a></li>
                        </ul>
                    </div>

                    <div class="box last">
                        <div class="sidebar_header">
                            <h4>Archives</h4>
                        </div>

                        <div class="sidebar_menu">
                            <ul>
                                <li><a href="#">January 2012</a></li>
                                <li><a href="#">May 2012</a></li>
                                <li><a href="#">August 2011</a></li>
                                <li><a href="#">October 2011</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
