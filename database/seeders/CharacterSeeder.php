<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Matt Murdock',
                'creation_date' => 1964,
                'comic' => 'Daredevil',
                'designer' => 'Stan Lee',
            ],
            [
                'name' => 'Captain Haddock',
                'creation_date' => 1941,
                'comic' => 'The adventures of Tintin',
                'designer' => 'Herge',
            ],
            [
                'name' => 'King arthur',
                'creation_date' => 1972,
                'comic' => 'Kaamelott',
                'designer' => 'Steven Dupre',
            ],
            [
                'name' => 'Asterix',
                'creation_date' => 1974,
                'comic' => 'Asterix & Obelix',
                'designer' => 'Albert Uderzo',
            ],
            [
                'name' => 'Marjane',
                'creation_date' => 2000,
                'comic' => 'Persepolis',
                'designer' => 'Marjane Satrapi',
            ],

        ]);
    }
}