<?php

use Illuminate\Database\Seeder;

class balineseCore_tb_waktu_operasional extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              DB::table('tb_waktu_operasional')->insert([
                                         ['hari' => '0','nama_hari' => 'minggu','waktu_buka' => '08:00','waktu_tutup' => '20:00'],
                                         ['hari' => '1','nama_hari' => 'senin','waktu_buka' => '08:00','waktu_tutup' => '20:00'],
                                         ['hari' => '2','nama_hari' => 'selasa','waktu_buka' => '08:00','waktu_tutup' => '20:00'],
                                         ['hari' => '3','nama_hari' => 'rabu','waktu_buka' => '08:00','waktu_tutup' => '20:00'],
                                         ['hari' => '4','nama_hari' => 'kamis','waktu_buka' => '08:00','waktu_tutup' => '20:00'],
                                         ['hari' => '5','nama_hari' => 'jumat','waktu_buka' => '08:00','waktu_tutup' => '20:00'],
                                         ['hari' => '6','nama_hari' => 'sabtu','waktu_buka' => '08:00','waktu_tutup' => '20:00']
              ]);
    }
}
