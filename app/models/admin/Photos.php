<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'alt', 'title', 'path'];

    public static function getItem($id){
        return static :: where ('id', $id )->get();
    }
}
