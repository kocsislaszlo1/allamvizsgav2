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
        	'id' => 1,
        	'esemenynev'=> '15th International Conference on Economics and Business',
            'tema'=> 'Economics and Business',
            'datum'=> '2021-04-29',
        ]);
      
    }
}
