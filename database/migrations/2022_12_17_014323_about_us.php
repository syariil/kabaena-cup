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
        //create table
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('Asking');
            $table->string('Answer');
            $table->string('style')->default('font-poppins font-semibold text-[28px] dark:text-white text-gray-900');
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
        //droop table
        Schema::drop('about_us');
    }
};
