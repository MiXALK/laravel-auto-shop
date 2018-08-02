<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopsGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopsGoods', function (Blueprint $table) {
            $table->integer('id', true);

            $table->integer('goods_id');

            $table->foreign('goods_id')
                ->references('id')->on('goods')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->integer('shop_id');

            $table->foreign('shop_id')
                ->references('id')->on('shops')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopsGoods');
    }
}
