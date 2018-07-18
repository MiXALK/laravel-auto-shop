<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'alt', 'title', 'path'];


    public static function getItem(){
        return static :: where ('id', 1 )->get();
    }
}
