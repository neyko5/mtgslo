<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model{

    protected $table = 'tournaments';

    protected $fillable = ['id_place','date','registration','start','id_judge','name','id_league','id_format','prizes','price','rel','pwp','picture','forum_link','text','id_type',];

    public function __toString(){
        return $this->name;
    }

    public function link(){
        return convertToLink($this->name)."/".$this->id;
    }

    public function league(){
        return $this->belongsTo("\MtgSlo\League","id_league");
    }

    public function judge(){
        return $this->belongsTo("\MtgSlo\Judge","id_judge");
    }

    public function location(){
        return $this->belongsTo("\MtgSlo\Location","id_location");
    }

    public function format(){
        return $this->belongsTo("\MtgSlo\Format","id_format");
    }

    public function rankings(){
        return $this->hasMany("\MtgSlo\Ranking","id_tournament")->orderBy("place","ASC");
    }

    public function hasDecklists(){
        return $this->rankings()->where("decklist","<>","")->count()>0;

    }


}
