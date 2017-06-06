<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseTbAbsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_absensi', function (Blueprint $table) {
            $table->increments('id_absensi');
            $table->integer('id_karyawan')->unsigned();
            $table->dateTime('waktu_datang');
            $table->dateTime('waktu_pulang');
            $table->enum('status',['ada','tidak']);
            $table->timestamps();

            //menambahkan constrain
            $table->foreign('id_karyawan')
                  ->references('id_karyawan')->on('tb_karyawan')
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
        Schema::dropIfExists('tb_absensi');
    }
}
