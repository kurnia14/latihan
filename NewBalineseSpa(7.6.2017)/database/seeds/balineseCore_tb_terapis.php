<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class balineseCore_tb_terapis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_terapis')->insert([
                 ['id_karyawan' => 1, 'username' => 'andi','password' => '12345'],
                 ['id_karyawan' => 2, 'username' => 'dhipa','password' => '12345'],
                 ['id_karyawan' => 3, 'username' => 'rizky','password' => '12345'],
                 ['id_karyawan' => 4, 'username' => 'puan','password' => '12345']
               ]);
    }
}
