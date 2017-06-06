<?php

use Illuminate\Database\Seeder;

class balineseCore_tb_treatment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('tb_treatment')->insert([
               ['treatment' => 'New Balinese Massage (90 mnt)','durasi' => '90', 'harga' => 100000],
               ['treatment' => 'New Balinese Massage (120 mnt)','durasi' => '120', 'harga' => 120000],
               ['treatment' => 'Face Care Massage (30 mnt)','durasi' => '30', 'harga' => 60000],
               ['treatment' => 'Face Care Massage (90 mnt)','durasi' => '90', 'harga' => 90000]
              //  ['treatment' => 'Shiatsu Massage (60 mnt)','durasi' => 60, 'harga' => 100000],
              //  ['treatment' => 'Shiatsu Massage (90 mnt)','durasi' => 90, 'harga' => 120000],
              //  ['treatment' => 'Hot Stone Massage (90 mnt)','durasi' => 90, 'harga' => 120000],
              //  ['treatment' => 'Hot Stone Massage (120 mnt)','durasi' => 120, 'harga' => 140000],
              //  ['treatment' => 'New Balinese Ratu Body Spa (120 mnt)','durasi' => 120, 'harga' => 150000],
              //  ['treatment' => 'Ginger (90 mnt)','durasi' => 90, 'harga' => 100000],
              //  ['treatment' => 'Ginger (120 mnt)','durasi' => 120, 'harga' => 120000],
              //  ['treatment' => 'Reflexology (30 mnt)','durasi' => 30, 'harga' => 45000],
              //  ['treatment' => 'Reflexology (60 mnt)','durasi' => 60, 'harga' => 80000],
              //  ['treatment' => 'Kids Massage (30 mnt)','durasi' => 30, 'harga' => 50000],
              //  ['treatment' => 'Kids Massage (60 mnt)','durasi' => 60, 'harga' => 70000]
              ]);
    }
}
