<?php

namespace Database\Seeders;
use App\Models\Eloadok;
use Illuminate\Database\Seeder;

class EloadokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eloadok = [
            [   'id' => 1,
                'nev' => 'Horváth Eszter',
                'fokozat' => 'Dr',
                'intezmeny' => 'Széchényi István University of Győr',
                'eloadascim' => 'Agriculture and sustainability in Szigetköz',
                'email' => 'horvatheszter@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [   'id' => 2,
                'nev' => 'Róbert Jakab',
                'fokozat' => 'Dr',
                'intezmeny' => 'University of Pannonia',
                'eloadascim' => 'Application Lifecycle Management for Sustainable Quality during and after Pandemic situation',
                'email' => 'jakob@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [
                'id' => 3,     
                'nev' => 'Fetter István',
                'fokozat' => 'Dr',
                'intezmeny' => 'Óbuda University',
                'eloadascim' => 'How banking has been changing as a response to COVID-19 – an introduction to a new digital era',
                'email' => 'fetter@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [
                'id' => 4,
                'nev' => 'Maria Moraru',
                'fokozat' => 'Dr',
                'intezmeny' => 'West University of Timisoara',
                'eloadascim' => 'The economic impact of Covid-19 on Romania and other EU states',
                'email' => 'maria@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [
                'id' => 5,
                'nev' => 'Sandra Schneider',
                'fokozat' => 'Dr',
                'intezmeny' => 'Hungarian University of Agriculture and Life Sciences Kaposvár Campus',
                'eloadascim' => 'Analysis of factors influencing the purchase intention of frugal innovations in Generation Y using the example of household appliances',
                'email' => 'sandra@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [
                'id' => 6,
                'nev' => 'Koponicsné Györke Diána, Horváthné Kovács Bernadett, Kinga Szabó ',
                'fokozat' => 'Dr',
                'intezmeny' => 'Hungarian University of Agriculture and Life Sciences Kaposvár Campus',
                'eloadascim' => 'Young farmer as key players in rural areas: how the EU supports can contribute to the population retention capacity of the countryside (E)',
                'email' => 'diana@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [
                'id' => 7,
                'nev' => 'Carmen Răduț',
                'fokozat' => 'Dr',
                'intezmeny' => 'Constantin Brancoveanu- FMMAE RM. Valcea',
                'eloadascim' => 'Oracle Cloud Infrastructure',
                'email' => 'carment@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [
                'id' => 8,
                'nev' => 'Kiss Gábor Dávid, Mészáros Mercédesz, Sallai Dóra',
                'fokozat' => 'Dr',
                'intezmeny' => 'University of Szeged',
                'eloadascim' => 'Differences in capital market network structures under Covid-19',
                'email' => 'kiss@gmail.com',
                'kivonat' => 'kivonat helye',
            ],  
            [
                'id' => 9,
                'nev' => 'Lippai-Makra Edit, Kovács Zsuzsanna Ilona',
                'fokozat' => 'Dr',
                'intezmeny' => 'Faculty of Economics and Business Administration',
                'eloadascim' => 'OCOVID-related disclosure practices of Hungarian entities',
                'email' => 'lippai@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
            [
                'id' => 10,
                'nev' => 'Andrei Coca',
                'fokozat' => 'Dr',
                'intezmeny' => 'UMFST Târgu Mureș',
                'eloadascim' => 'Geographical indications and optional quality term ’mountain product’. Where do we stand in the Carpathian Countries.',
                'email' => 'andrei@gmail.com',
                'kivonat' => 'kivonat helye',
            ],
        
        ];
        foreach($eloadok as $eloado)
        {
            $elo=Eloadok::create($eloado);
            $elo->szekciok()->sync(rand(1,5));
        }
    }
}
