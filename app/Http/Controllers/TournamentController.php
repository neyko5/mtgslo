<?php

namespace MtgSlo\Http\Controllers;

use MtgSlo\Http\Controllers\Controller;


class TournamentController extends Controller
{
    public function index(){
        $data['page']="tournaments";
        $data['tournaments']=\MtgSlo\Tournament::orderBy("id","DESC")->get();
        return view("tournaments",$data);
    }

    public function show($link,$id){
        $data['page']="tournaments";
        $data['tournament']=\MtgSlo\Tournament::find($id);
        return view("tournament",$data);
    }

    public function calendar(){
        $tournaments=\MtgSlo\Tournament::where("date","<",\Input::get("end"))->where("date",">",\Input::get("start"))->get();
        $array=array();
        foreach($tournaments as $tournament){
            $array[]=array("id"=>$tournament->id,"start"=>$tournament->date,"title"=>substr($tournament->name,0,19),"url"=>"/turnirji/".$tournament->link());
        }
        return json_encode($array);
    }
    public function decklist($link,$id){
        $data['page']="tournaments";
        $data['ranking']=\MtgSlo\Ranking::find($id);
        return view("decklist",$data);
    }



}
