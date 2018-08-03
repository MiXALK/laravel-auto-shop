<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    public $timestamps = false;

    // Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id'];

    // Get children category
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function setSlugAttribute() {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 30), '_');
    }
}
