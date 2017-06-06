<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseTbPesananReseller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pesanan_reseller', function (Blueprint $table) {
            $table->increments('id_pesanan_reseller');
            $table->integer('no_pesanan')->unsigned();
            $table->integer('id_reseller')->unsigned();
            $table->timestamps();

            //menambahkan constrain
            $table->foreign('no_pesanan')
                  ->references('no_pesanan')->on('tb_pesanan')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_reseller')
                  ->references('id_reseller')->on('tb_reseller')
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
        Schema::dropIfExists('tb_pesanan_reseller');
    }
}
