<?php

use Illuminate\Database\Seeder;
use App\Good;

class PostGoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Good::class, 50)->create()->each(function ($u){
            $u->goods()->save(factory(Good::class)->make());
        });
    }
}
