<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model{



    protected $table = 'judges';

    protected $fillable = ['name','level'];

    public function __toString(){
        return $this->name." (".$this->level.")";
    }

}
