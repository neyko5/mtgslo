<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model{

    protected $table = 'competitions';

    protected $fillable = ['text','title','date','question','answer1','answer2','answer3','answer4','answer5','prizes','correct','after','picture'];

    public function competitors(){
        return $this->hasMany("\MtgSlo\CompetitionAnswer","id_competition");
    }

    public function __toString(){
        return $this->title;
    }

    public function link(){
        return convertToLink($this->title)."/".$this->id;
    }
}
