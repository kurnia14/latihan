<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseTbDetailPesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail_pesanan', function (Blueprint $table) {
            $table->increments('id_tb_detail_pesanan');
            $table->integer('no_pesanan')->unsigned();
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('id_treatment')->unsigned();
            $table->integer('id_terapis')->unsigned();
            $table->double('tagihan');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->enum('status_pesanan',['proses','terima','otw','mulai','selesai','batal']);
            $table->timestamps();

            //menambahkan constrain
            $table->foreign('no_pesanan')
                  ->references('no_pesanan')->on('tb_pesanan')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_pelanggan')
                  ->references('id_pelanggan')->on('tb_pelanggan')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_treatment')
                  ->references('id_treatment')->on('tb_treatment')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_terapis')
                  ->references('id_terapis')->on('tb_terapis')
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
        Schema::dropIfExists('tb_detail_pesanan');
    }
}
