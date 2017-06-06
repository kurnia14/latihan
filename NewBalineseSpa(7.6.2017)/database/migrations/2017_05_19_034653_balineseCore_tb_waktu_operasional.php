<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseCoreTbWaktuOperasional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_waktu_operasional', function (Blueprint $table) {
            $table->increments('id');
            $table->char('hari',3);
            $table->char('nama_hari','10');
            $table->time('waktu_buka');
            $table->time('waktu_tutup');
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
        Schema::dropIfExists('tb_waktu_operasional');
    }
}
