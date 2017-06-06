<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalineseCoreTbPelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('tb_pelanggan', function (Blueprint $table) {
              $table->increments('id_pelanggan');
              $table->string('nama_pelanggan');
              $table->date('tgl_lahir');
              $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
              $table->string('alamat');
              $table->string('email');;
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
        Schema::dropIfExists('tb_pelanggan');
    }
}
