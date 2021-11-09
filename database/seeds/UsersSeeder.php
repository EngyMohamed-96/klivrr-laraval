<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'first_name' => 'System',
                    'last_name' => 'Administrator',
                    'email' => 'admin@mimocodes.com',
                    'gender' => 'male',
                    'phone' => '012345678',
                    'role_id' => 1,
                    'partner_id' => null,
                    'website' => 'https://www.mimocodes.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
        ]);
    }
}
