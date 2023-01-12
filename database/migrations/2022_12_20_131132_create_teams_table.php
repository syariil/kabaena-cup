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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('Ketua');
            $table->string('Team');
            $table->string('Kota')->default('kota');
            $table->bigInteger('Whatsapp');
            $table->string('Logo')->default('logo_default.jpeg');
            $table->string('bukti_pembayaran');

            $table->string('Username');
            $table->bigInteger('Id_game');
            $table->string('Role');

            $table->string('Username2');
            $table->bigInteger('Id_game2');
            $table->string('Role2');

            $table->string('Username3');
            $table->bigInteger('Id_game3');
            $table->string('Role3');

            $table->string('Username4');
            $table->bigInteger('Id_game4');
            $table->string('Role4');

            $table->string('Username5');
            $table->bigInteger('Id_game5');
            $table->string('Role5');

            $table->string('Username6')->nullable();
            $table->string('Id_game6')->nullable();
            $table->string('Role6')->nullable();

            $table->integer('Season');

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
        Schema::dropIfExists('teams');
    }
};
