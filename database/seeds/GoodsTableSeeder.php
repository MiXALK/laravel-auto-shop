<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            'name' => 'Mobile 1111',
            'short_description' => 'Mobile 1111',
            'description' => 'Mobile 1111',
            'icon' => 'Mobile 1111'
        ]);
    }
}
