<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Compte', function (Blueprint $table) {
            $table->unsignedInteger('id_utilisateur');
            $table->unsignedInteger('id_collection');
            $table->unsignedInteger('id_bd');
            $table->timestamps();
            $table->foreign('id_utilisateur')
                ->references('id_utilisateur')->on('Utilisateur')
                ->onDelete('cascade');               
            $table->foreign('id_collection')
                ->references('id_collection')->on('Collection')
                ->onDelete('cascade');
            $table->foreign('id_bd')
                ->references('id_bd')->on('Bd')
                ->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Compte');
    }
}
