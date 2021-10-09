<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguePersonne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langue_personne', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('personne_id')->constrained()->onDelete('cascade');
            $table->foreignId('langue_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('langue_personne');
    }
}
