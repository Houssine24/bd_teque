<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bd', function (Blueprint $table) {
            $table->increments('id_bd');
            $table->string('nom_bd');
            $table->string('resume_bd');
            $table->string('image_bd');
            $table->integer('tome_bd');
            $table->string('commentaire_bd');
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
        Schema::dropIfExists('Bd');
    }
}
