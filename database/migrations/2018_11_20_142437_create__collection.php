<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Collection', function (Blueprint $table) {
            $table->increments('id_collection');
            $table->unsignedInteger('id_bd');
            $table->string('nom_collection');
            $table->string('resume_collection');
            $table->string('image_collection');
            $table->timestamps();
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
        Schema::dropIfExists('Collection');
    }
}
