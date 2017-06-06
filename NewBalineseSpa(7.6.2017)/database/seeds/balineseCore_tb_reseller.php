<?php

use Illuminate\Database\Seeder;

class balineseCore_tb_reseller extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('tb_reseller')->insert(
             ['nama_reseller' => 'Putra','tgl_lahir' => '1993-10-15', 'jenis_kelamin' => 'Laki-laki',
              'alamat' => 'Jl.Taman Sari','email' => 'putra@gamil.com','no_hp' => '08546782',
              'username' => 'putra','password' => '12345']
            );
    }
}
