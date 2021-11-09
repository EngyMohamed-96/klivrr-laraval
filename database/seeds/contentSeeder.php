<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class contentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            [
                'id' => 1,
                'page_id' => '1',
                'key' => 'heading',
                'value_en' => 'Klivvr',
                'value_ar' => 'كليفر',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'page_id' => '2',
                'key' => 'about',
                'value_en' => 'About Klivvr',
                'value_ar' => 'عن كليفر',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'page_id' => '8',
                'key' => 'welcome',
                'value_en' => 'Welcome Back',
                'value_ar' => 'مرحبا بعودتك',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'page_id' => '8',
                'key' => 'phone',
                'value_en' => 'Mobile Number',
                'value_ar' => 'رقم الهاتف',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'page_id' => '8',
                'key' => 'mobile_placeholder',
                'value_en' => 'Mobile Number',
                'value_ar' => 'رقم الهاتف',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'page_id' => '8',
                'key' => 'password',
                'value_en' => 'Password',
                'value_ar' => 'كلمه المرور',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'page_id' => '8',
                'key' => 'password_placeholder',
                'value_en' => 'Password',
                'value_ar' => 'كلمه المرور',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'page_id' => '8',
                'key' => 'remember',
                'value_en' => 'Remember me',
                'value_ar' => 'تذكرني',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'page_id' => '8',
                'key' => 'reset_password',
                'value_en' => 'Forget your Password',
                'value_ar' => 'استرجاع كلمة المرور',
                'edit' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'page_id' => '8',
                'key' => 'sign',
                'value_en' => 'Sign in',
                'value_ar' => 'دخول',
                'edit' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'page_id' => '8',
                'key' => 'google',
                'value_en' => 'Sign-in using Google Account',
                'value_ar' => 'تسجيل الدخول باستخدام حساب جوجل',
                'edit' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'page_id' => '8',
                'key' => 'facebook',
                'value_en' => 'Sign-in using Facebook Account',
                'value_ar' => 'تسجيل الدخول باستخدام حساب الفيسبوك',
                'edit' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'page_id' => '8',
                'key' => 'powered',
                'value_en' => 'Powered By',
                'value_ar' => 'برعايه',
                'edit' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
