<?php

namespace MtgSlo\Http\Controllers;

use MtgSlo\Http\Controllers\Controller;


class LeagueController extends Controller
{
    public function index(){
        $data['page']="leagues";
        $data['leagues']=\MtgSlo\League::orderBy("id","DESC")->get();
        return view("leagues",$data);
    }

    public function show($link,$id){
        $data['page']="leagues";
        $data['league']=\MtgSlo\League::find($id);
        return view("league",$data);
    }
}
