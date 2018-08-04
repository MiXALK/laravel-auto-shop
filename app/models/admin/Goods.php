<?php

namespace App\Models\Admin;

use App\Comments;
use App\Category;
use App\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Goods extends Model
{
    //если в таблице нет времени создания
    public $timestamps = false;

    protected $fillable = ['name', 'short_description', 'description', 'icon'];

    public static function getItem($id){
        return static :: where ('id', $id )->get();
    }

    public function comments(){
        return $this->hasMany(Comments::class)->orderByDesc('created_at');
    }

    public function addComments ($text){
        $this->comments()->create(['text' => $text]);
    }

    public function photos(){
        return $this->belongsToMany(Photos::class, 'goodsPhotos');
    }

    public function addPhotos ($goods_id){
        $this->photos()->attach(['goods_id' => $goods_id]);
    }

    public function shops(){
        return $this->belongsToMany(Shop::class, 'shopsGoods');
    }

    public function addShop ($addressId){
        $this->shops()->attach(['shop_id' => $addressId]);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryables');
    }

    public static function limitGoods(){
        return DB::table('goods')
            ->whereBetween('price', array(100, 200))->get();
    }
}
