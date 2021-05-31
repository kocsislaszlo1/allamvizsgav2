<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class EsemenyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esemenyek')->insert([
        	'id' => '1',
        	'esemenynev'=> 'SapiEconf',
            'tema'=> 'it',
            'datum'=> '2021-04-29 19:18:44',
        ]);
      
    }
}
