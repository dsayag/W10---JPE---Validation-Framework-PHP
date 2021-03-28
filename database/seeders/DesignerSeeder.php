<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
            [
                'name' => 'Stan Lee',
                'birth_date' => 1922,
                'nationality' => 'American',
            ],
            [
                'name' => 'Herge',
                'birth_date' => 1907,
                'nationality' => 'Belgium',
            ],
            [
                'name' => 'Steven Dupre',
                'birth_date' => 1967,
                'nationality' => 'Belgium',
            ],
            [
                'name' => 'Albert Uderzo',
                'birth_date' => 1959,
                'nationality' => 'French',
            ],
            [
                'name' => 'Marjane Satrapi',
                'birth_date' => 1969,
                'nationality' => 'Iranian',
            ],

        ]);
    }
}