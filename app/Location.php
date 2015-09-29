<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Location extends Model{

    protected $table = 'locations';

    protected $fillable = ['name','address','city','logo','link','store','description','coorX','coorY'];

    public function __toString(){
        return $this->name;
    }

}
