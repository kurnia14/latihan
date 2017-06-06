<?php

use Illuminate\Database\Seeder;

class balineseCore_tb_owner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('tb_owner')->insert(
             ['username' => 'dono','password' => '12345', 'email' => 'dono@gmail.com','no_hp' => '085312467']
            );
    }
}
