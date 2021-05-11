<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ModeratorokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moderatorok')->insert([
        	'id' => '1',
        	'felhasznalo_id'=> '1',
            'szekcio_id'=> '1',     
        ]);
        DB::table('moderatorok')->insert([
        	'id' => '2',
        	'felhasznalo_id'=> '2',
            'szekcio_id'=> '2',     
        ]);
    }
}
