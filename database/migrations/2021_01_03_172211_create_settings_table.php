<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('mail_driver')->default('smtp')->nullable();
            $table->string('mail_host')->default('smtp.yandex.com')->nullable();
            $table->string('mail_port')->default('465')->nullable();
            $table->string('mail_username')->default('skipq@mimocodes.com')->nullable();
            $table->string('mail_password')->default('Vass_311283')->nullable();
            $table->string('mail_encryption')->default('Vass_311283')->nullable();
            $table->string('mail_from_name')->default('Mimocodes | Dashboard')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
