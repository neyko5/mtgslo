<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model{

    protected $table = 'rankings';

    protected $fillable = ['id_tournament','dci','full_name','place','points','leaguepoints','decklist'];

    public static function all($columns=array()){
        return Ranking::where("decklist","<>","")->get();

    }

    public function tournament(){
        return $this->belongsTo("\MtgSlo\Tournament","id_tournament");
    }

    public function link(){
        return convertToLink($this->tournament."-".$this->full_name)."/".$this->id;
    }

}
