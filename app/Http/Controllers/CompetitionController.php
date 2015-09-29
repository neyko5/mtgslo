<?php

namespace MtgSlo\Http\Controllers;

use MtgSlo\Http\Controllers\Controller;


class CompetitionController extends Controller
{
    public function index(){
        $data['page']="competitions";
        $data['competition']=\MtgSlo\Competition::orderBy("date","DESC")->first();
        return view("competition",$data);
    }

    public function show($link,$id){
        $data['page']="competitions";
        $data['competition']=\MtgSlo\Competition::find($id);
        return view("competition",$data);
    }
}
