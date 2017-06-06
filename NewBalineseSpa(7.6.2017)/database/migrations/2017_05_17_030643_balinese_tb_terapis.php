<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseTbTerapis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_terapis', function (Blueprint $table) {
            $table->increments('id_terapis');
            $table->integer('id_karyawan')->unsigned();
            $table->string('username');
            $table->string('password');
            $table->enum('status',['aktif','tidak aktif']);
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
        Schema::dropIfExists('tb_terapis');
    }
}
