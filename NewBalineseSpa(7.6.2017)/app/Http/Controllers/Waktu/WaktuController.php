<?php

namespace App\Http\Controllers\Waktu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Datatables;


class WaktuController extends Controller
{
    #menampilkan halaman utama fitur waktu operasional
    public function index()
    {
      return view('waktu.waktu');
    }

    #fungsi menampilkan data waktu operasional dari database
    public function tampilDataWaktu()
    {
      return view('waktu.tampilDataWaktu');
    }

    public function dataTablesWaktu()
    {
      $waktu = DB::table('tb_waktu_operasional')
                  ->get();
      return Datatables::of($waktu)
                        ->addColumn('edit',function($waktu){
                          return "<button class='btn btn-default btn-xs'
                                          onclick='edit($waktu->id)'
                                          data-toggle='modal' data-target='#modalEditWaktu'>
                                   Edit
                                  </button>";
                        })
                        ->rawcolumns(['edit'])
                        ->make(true);
    }

    //fungsi menerima data dan mengirimkan data untuk edit
    public function tampilEditWaktu(Request $request)
    {
      $id = $request->id;

      $tWaktu = DB::table('tb_waktu_operasional')
                    ->where('id','=',$id)
                    ->get();
      return $tWaktu;
    }

    //fungsi untuk edit waktu operasional
    public function editWaktu(Request $request)
    {
      $id         = $request->id;
      $namaHari   = $request->namaHari;
      $waktuBuka  = $request->waktuBuka;
      $waktuTutup = $request->waktuTutup;

      DB::table('tb_waktu_operasional')
          ->where('id','=',$id)
          ->update([
                    'nama_hari' => $namaHari,
                    'waktu_buka' => $waktuBuka,
                    'waktu_tutup' => $waktuTutup
                  ]);
    }
}
