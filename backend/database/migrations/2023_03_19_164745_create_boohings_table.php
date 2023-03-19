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
        Schema::create('boohings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->integer('user_id')->unsigned();
            $table->integer('resturant_id')->unsigned();
            $table->string('table_id');
            $table->date("day");
            $table->time("from");
            $table->time("to");


            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('resturant_id')
                ->references('id')->on('restaurants')
                ->onDelete('cascade');
            $table->foreign('table_id')
                ->references('id')->on('tables')
                ->onDelete('cascade');

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
        Schema::dropIfExists('boohings');
    }
};
