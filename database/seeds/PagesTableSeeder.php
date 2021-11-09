<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('pages')->insert([
            [
                'id' => 1,
                'page_id' => '1',
                'title' => 'homepage',
                'content'=>"Home Page",
                'slug'=> 'home-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'page_id' => '2',
                'title' => 'about-page',
                'content'=>"About Page",
                'slug'=> 'about-us',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'page_id' => '3',
                'title' => 'accountpage',
                'content'=>"Account Page",
                'slug'=> 'account-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'page_id' => '4',
                'title' => 'booking',
                'content'=>"Booking Page",
                'slug'=> 'booking-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'page_id' => '5',
                'title' => 'payment',
                'content'=>"Payment Page",
                'slug'=> 'payment-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'page_id' => '6',
                'title' => 'resources',
                'content'=>"Resources Page",
                'slug'=> 'resources-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'page_id' => '7',
                'title' => 'rewards',
                'content'=>"Rewards Page",
                'slug'=> 'rewards-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'page_id' => '8',
                'title' => 'login-page',
                'content'=>"Login Page",
                'slug'=> 'login-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'page_id' => '9',
                'title' => 'Bio-page',
                'content'=>"bio Page",
                'slug'=> 'bio-page',
                'deleted_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),   
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }

}

