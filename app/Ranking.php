<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model{

    protected $table = 'rankings';

    protected $fillable = ['tournid','dci','full_name','place','points','leaguepoints','decklist'];

    public function tournament(){
        return $this->belongsTo("\MtgSlo\Tournament","id_tournament");
    }

    public function link(){
        return convertToLink($this->tournament."-".$this->full_name)."/".$this->id;
    }

}
