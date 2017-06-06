<?php

use Illuminate\Database\Seeder;

class balineseCore_tb_terapis_dan_treatment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('tb_terapis_dan_treatment')->insert([
               ['id_terapis' => 1,'id_treatment' => 1],
               ['id_terapis' => 1,'id_treatment' => 2],
               ['id_terapis' => 2,'id_treatment' => 1],
               ['id_terapis' => 2,'id_treatment' => 3]
              ]);
    }
}
