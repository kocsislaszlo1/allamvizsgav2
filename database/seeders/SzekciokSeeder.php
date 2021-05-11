<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SzekciokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('szekciok')->insert([
        	'id' => '1',
        	'szekcionev'=> 'szekcio1',
            'idopont'=> '2021-04-29 19:18:44',
            'link'=> 'https://meet.google.com/rfn-aktc-baw',
            'online'=> '1',
            'esemenyek_id'=> '1',
        ]);
        DB::table('szekciok')->insert([
        	'id' => '2',
        	'szekcionev'=> 'szekcio2',
            'idopont'=> '2021-04-30 19:18:44',
            'link'=> 'https://meet.google.com/rfn-aktc-baw',
            'online'=> '1',
            'esemenyek_id'=> '2',
        ]);
    }
}
