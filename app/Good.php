<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //если в таблице нет времени создания
    public $timestamps = false;

    protected $fillable = ['name', 'short_description', 'description', 'icon'];

    public static function getItem($id){
        return static :: where ('id', $id )->get();
    }

}
