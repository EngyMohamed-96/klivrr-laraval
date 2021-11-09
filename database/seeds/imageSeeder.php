<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class imageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'id' => 1,
                'page_id' => '1',
                'key' => 'mainImage',
                'src'=>"uploads/home-page/main.png",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
