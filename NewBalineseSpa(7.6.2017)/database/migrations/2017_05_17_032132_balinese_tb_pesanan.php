<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseTbPesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pesanan', function (Blueprint $table) {
            $table->increments('no_pesanan');
            $table->integer('id_admin')->unsigned();
            $table->string('alamat');
            $table->dateTime('waktu_pesan');
            $table->enum('status_pemayaran',['belum bayar','bayar','diterima']);
            $table->timestamps();

            //menambahkan constrain
            $table->foreign('id_admin')
                  ->references('id_admin')->on('tb_admin')
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
        Schema::dropIfExists('tb_pesanan');
    }
}
