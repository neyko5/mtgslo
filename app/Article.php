<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{

    protected $table = 'articles';

    protected $fillable = ['author', 'title','date','intro','text','picture'];

    public function __toString(){
        return $this->title;
    }

    public function link(){
        return convertToLink($this->title)."/".$this->id;
    }

}
