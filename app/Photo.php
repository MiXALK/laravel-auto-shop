<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Goods;

class Photo extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'alt', 'title', 'path'];

}
