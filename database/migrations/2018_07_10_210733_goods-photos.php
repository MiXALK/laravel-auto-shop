<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GoodsPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodsPhotos', function (Blueprint $table) {
            $table->integer('goods_id');

            $table->foreign('goods_id')
                ->references('id')->on('goods')
                ->onDelete('cascade');


            $table->integer('photos_id');

            $table->foreign('photos_id')
                ->references('id')->on('photos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goodsPhotos');
    }
}
