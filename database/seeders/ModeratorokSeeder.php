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
        	'id' => 1,
        	'users_id'=> 1,
            'szekciok_id'=> 1,     
        ]);
        DB::table('moderatorok')->insert([
        	'id' => '2',
        	'users_id'=> 2,
            'szekciok_id'=> 2,     
        ]);
    }
}
