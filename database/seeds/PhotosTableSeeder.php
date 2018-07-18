<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert(
            [
                'name' => 'Grass',
                'alt' => 'grass',
                'title' => 'grass',
                'path' => 'http://bipbap.ru/wp-content/uploads/2017/10/0_8eb56_842bba74_XL-220x220.jpg'
            ]);
    }
}
