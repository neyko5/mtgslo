<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Format extends Model{

    protected $table = 'formats';

    protected $fillable = ['name', 'description','limited','picture'];

    public $timestamps=false;

    public function __toString(){
        return $this->name;
    }
}
