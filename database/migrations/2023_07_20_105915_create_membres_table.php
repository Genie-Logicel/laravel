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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('email');
            $table->string('image')->nullable();
            $table->string('competence_id')->nullable();
            $table->string('role_id')->nullable();
            $table->string('etude_id')->nullable();
            $table->string('autre_competence_id')->nullable();
            $table->string('lien_personnel_id')->nullable();
            $table->string('formation_id')->nullable();
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
        Schema::dropIfExists('membres');
    }
};
