<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class News extends Model{

    protected $table = 'news';

    protected $fillable = ['date','picture','title','text','link','linktext'];

}
