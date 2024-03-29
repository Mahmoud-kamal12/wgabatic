<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');


            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('m_name');
            $table->string('m_phone');
            $table->string('pickup_fee')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('Latitude')->nullable();
            $table->string('Longitude')->nullable();
            $table->text('logo')->nullable();
            $table->text('cover')->nullable();
            $table->string('description')->nullable();
            $table->string('contact_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean("table_status")->default(0);

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
        Schema::dropIfExists('restaurants');
    }
};
