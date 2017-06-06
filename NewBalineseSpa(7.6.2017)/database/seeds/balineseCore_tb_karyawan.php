<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class balineseCore_tb_karyawan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tb_karyawan')->insert([
             ['nama' => 'Andi Saputra','tgl_lahir' => '1993-10-15', 'jenis_kelamin' => 'Laki-laki',
              'alamat' => 'Jl.Taman Sari','email' => 'andi@gamil.com','no_hp' => '08546782'],

             ['nama' => 'Dhipa Barus','tgl_lahir' => '1993-11-15', 'jenis_kelamin' => 'Laki-laki',
               'alamat' => 'Jl.Taman Sari','email' => 'andi@gamil.com','no_hp' => '08546782'],

             ['nama' => 'Rizky','tgl_lahir' => '1994-11-15', 'jenis_kelamin' => 'Laki-laki',
               'alamat' => 'Jl.Taman Sari','email' => 'rizky@gamil.com','no_hp' => '08546782'],

             ['nama' => 'Puan Safitry','tgl_lahir' => '1993-10-15', 'jenis_kelamin' => 'Perempuan',
               'alamat' => 'Jl.Taman Sari','email' => 'puan@gamil.com','no_hp' => '08546782'],

             ['nama' => 'Dini','tgl_lahir' => '1993-11-15', 'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Taman Sari','email' => 'dini@gamil.com','no_hp' => '08546782'],

             ['nama' => 'Idam','tgl_lahir' => '1994-11-15', 'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl.Taman Sari','email' => 'idam@gamil.com','no_hp' => '08546782']
            ]);
    }
}
