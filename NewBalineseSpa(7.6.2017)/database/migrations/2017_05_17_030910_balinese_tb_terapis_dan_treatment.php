<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseTbTerapisDanTreatment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_terapis_dan_treatment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_terapis')->unsigned();
            $table->integer('id_treatment')->unsigned();
            $table->timestamps();

            //menambahkan constrain
            $table->foreign('id_terapis')
                  ->references('id_terapis')->on('tb_terapis')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            //menambahkan constrain
            $table->foreign('id_treatment')
                  ->references('id_treatment')->on('tb_treatment')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_terapis_dan_treatment');
    }
}
