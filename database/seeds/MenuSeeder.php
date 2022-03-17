<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
        	'nama' => 'Makanan',
        	'jenis' => 'makanan',
        	'gambar' => 'makanan.jpg',
        ]);

        DB::table('menus')->insert([
        	'nama' => 'Minuman',
        	'jenis' => 'minuman',
        	'gambar' => 'minuman.jpg',
        ]);

        DB::table('menus')->insert([
        	'nama' => 'Cemilan',
        	'jenis' => 'cemilan',
        	'gambar' => 'cemilan.jpg',
        ]);
    }
}
