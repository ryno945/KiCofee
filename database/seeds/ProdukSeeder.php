<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        	'nama' => 'Coppucino',
            'menu_id' => 1,
            'gambar' => 'coppucino.jpg'
        ]);
    }
}
