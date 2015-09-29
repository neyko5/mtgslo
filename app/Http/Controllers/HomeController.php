<?php

namespace MtgSlo\Http\Controllers;

use MtgSlo\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index(){
        $data['page']="home";
        $data['news']=\MtgSlo\News::orderBy("date","DESC")->paginate(6);
        return view("home",$data);
    }

    public function stores(){
        $data['page']="stores";
        $data['shops']=\MtgSlo\Location::where("store","1")->get();
        return view("shops",$data);
    }
}
