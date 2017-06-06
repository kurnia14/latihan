<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseTbPesananOwner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pesanan_owner', function (Blueprint $table) {
            $table->increments('id_pesanana_owner');
            $table->integer('no_pesanan')->unsigned();
            $table->integer('id_owner')->unsigned();
            $table->timestamps();

            //menambahkan constrain
            $table->foreign('no_pesanan')
                  ->references('no_pesanan')->on('tb_pesanan')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_owner')
                  ->references('id_owner')->on('tb_owner')
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
        Schema::dropIfExists('tb_pesanan_owner');
    }
}
