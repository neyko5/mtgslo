<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class CompetitionAnswer extends Model{

    protected $table = 'competition_answers';

    protected $fillable = ['id_competition','full_name','city','email','answer'];

    public function __toString(){
        return $this->full_name;
    }

    public function competition(){
        return $this->belongsTo("\MtgSlo\Competition","id_competition");
    }
}
