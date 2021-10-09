<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',14);
            $table->string('prenom',25);
            $table->string('date2naiss')->format('d-m-Y');
            $table->string('lieu2naiss');
            $table->string('email')->unique();
            $table->string('tel',10);
            $table->mediumText('infosup');
            $table->string('password');
            $table->string('username')->unique();
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
        Schema::dropIfExists('personnes');
    }
}
