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
        	'szekcionev'=> 'Agriculture and rural economics',
            'idopont'=> '10:00:00',
            'link'=> 'https://meet.google.com/rfn-aktc-baw',
            'online'=> '1',
            'esemenyek_id'=> '1',
        ]);
        DB::table('szekciok')->insert([
        	'id' => '2',
        	'szekcionev'=> 'Business informatics and operational research',
            'idopont'=> '10:00:00',
            'link'=> 'https://meet.google.com/rfn-aktc-baw',
            'online'=> '1',
            'esemenyek_id'=> '1',
        ]);
        DB::table('szekciok')->insert([
        	'id' => '3',
        	'szekcionev'=> 'Capital market, corporate finance and financial',
            'idopont'=> '10:00:00',
            'link'=> 'https://meet.google.com/rfn-aktc-baw',
            'online'=> '1',
            'esemenyek_id'=> '1',
        ]);

        DB::table('szekciok')->insert([
        	'id' => '4',
        	'szekcionev'=> 'Current Issues in financial regulation',
            'idopont'=> '10:00:00',
            'link'=> 'https://meet.google.com/rfn-aktc-baw',
            'online'=> '1',
            'esemenyek_id'=> '1',
        ]);
        DB::table('szekciok')->insert([
        	'id' => '5',
        	'szekcionev'=> 'Marketing',
            'idopont'=> '10:00:00',
            'link'=> 'https://meet.google.com/rfn-aktc-baw',
            'online'=> '1',
            'esemenyek_id'=> '1',
        ]);

        
    }
}
