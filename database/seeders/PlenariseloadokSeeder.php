<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PlenariseloadokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plenariseloadok')->insert([
        	'id' => 1,
            'nev' => 'Nagy Bálint Zsolt',
            'fokozat' => 'Dr',
            'intezmeny' => ', Babes-Bolyai University',
            'eloadascim' => 'Financial markets and the real economy in the Covid-19 crisis',
            'email' => 'nagy@gmail.com',
            'kivonat' => 'kivonat helye',
            'kezdete' => '10:00',
            'vege' => '10:30',
            'esemenyek_id'=> 1,
        ]);
        DB::table('plenariseloadok')->insert([
        	'id' => 2,
            'nev' => 'Csonka Arnold',
            'fokozat' => 'Dr',
            'intezmeny' => 'Hungarian University of Agriculture and Life Sciences Kaposvár Campus',
            'eloadascim' => 'Spread of sustainable practices in agri-food chains - local drivers and barriers',
            'email' => 'csonka@gmail.com',
            'kivonat' => 'kivonat helye',
            'kezdete' => '10:30',
            'vege' => '11:00',
            'esemenyek_id'=> 1,
        ]);
        DB::table('plenariseloadok')->insert([
        	'id' => 3,
            'nev' => 'Tóth József',
            'fokozat' => 'Dr',
            'intezmeny' => 'Sapientia Hungarian University of Transylvania / Corvinus University of Budapest',
            'eloadascim' => 'Food Waste and Covid19: Did We Learn or Unlearn?',
            'email' => 'toth@gmail.com',
            'kivonat' => 'kivonat helye', 
            'kezdete' => '11:00',
            'vege' => '11:30',       
            'esemenyek_id'=> 1,
        ]);

    }
}
