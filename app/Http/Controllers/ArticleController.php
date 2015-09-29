<?php

namespace MtgSlo\Http\Controllers;

use MtgSlo\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function index(){
        $data['page']="articles";
        $data['articles']=\MtgSlo\Article::orderBy("date","DESC")->paginate(6);
        return view("articles",$data);
    }

    public function show($link,$id){
        $data['page']="articles";
        $data['article']=\MtgSlo\Article::find($id);
        return view("article",$data);
    }
}
