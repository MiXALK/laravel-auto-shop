<?php

namespace App;

use App\Models\Admin\Goods;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $timestamps = true;

    protected $fillable = ['text', 'goods_id'];

    public function goods(){
        return $this->belongsTo(Goods::class);
    }
}
