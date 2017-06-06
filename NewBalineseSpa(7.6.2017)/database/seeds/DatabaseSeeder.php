<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(balineseCore_tb_karyawan::class);
        $this->call(balineseCore_tb_owner::class);
        $this->call(balineseCore_tb_reseller::class);
        $this->call(balineseCore_tb_treatment::class);
        $this->call(balineseCore_tb_terapis::class);
        $this->call(balineseCore_tb_terapis_dan_treatment::class);
        $this->call(balineseCore_tb_waktu_operasional::class);
    }
}
