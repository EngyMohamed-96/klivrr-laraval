<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'mail_driver' => 'smtp',
                'mail_host' => 'smtp.yandex.com',
                'mail_port' => '465',
                'mail_username' => 'skipq@mimocodes.com',
                'mail_password' => 'Vass_311283',
                'mail_encryption' => 'ssl',
                'mail_from_name' => 'Mimocodes | Dashboard',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
