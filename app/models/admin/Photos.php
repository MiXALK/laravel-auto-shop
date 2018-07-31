<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'alt', 'title', 'path'];

}
