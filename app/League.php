<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class League extends Model{

    protected $table = 'leagues';

    protected $fillable = ['title','picture','intro','description'];

    public function __toString(){
        return $this->title;
    }

    public function tournaments(){
        return $this->hasMany("\MtgSlo\Tournament","id_league");
    }

    public function link(){
        return convertToLink($this->title)."/".$this->id;
    }

    public function rankings(){
        return \DB::table('tournaments')->join('rankings','rankings.id_tournament','=','tournaments.id')->select("full_name",\DB::raw('SUM(leaguepoints) as total_points'))->where("tournaments.id_league",$this->id)->groupBy("dci")->orderBy("total_points","DESC")->get();
    }

}
