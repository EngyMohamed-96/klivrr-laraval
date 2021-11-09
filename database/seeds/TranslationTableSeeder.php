<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('translations')->insert([
            ['key' => 'simulation', 'group' => 'board', 'en' => 'simulation', 'de' => 'simulation', 'fr' => 'simulation' ],
            ['key' => 'start_date', 'group' => 'board', 'en' => 'start date', 'de' => 'start date', 'fr' => 'start date' ],
            ['key' => 'trainer', 'group' => 'board', 'en' => 'trainer', 'de' => 'trainer', 'fr' => 'trainer' ],
            ['key' => 'container', 'group' => 'board', 'en' => 'container', 'de' => 'container', 'fr' => 'container' ],
            ['key' => 'cash', 'group' => 'board', 'en' => 'cash', 'de' => 'cash', 'fr' => 'cash' ],
            ['key' => 'delete', 'group' => 'board', 'en' => 'delete', 'de' => 'delete', 'fr' => 'delete' ],
            ['key' => 'year', 'group' => 'board', 'en' => 'year', 'de' => 'year', 'fr' => 'year' ],
        ]);

    }
}
