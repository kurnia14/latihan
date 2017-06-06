<?php

namespace App\Http\Controllers\Treatment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatables;

class TreatmentController extends Controller
{
    #fungsi index
    public function index()
    {
      return view('treatment.treatment');
    }

    #fungsi tampiil data Treatment
    public function tampilDataTreatment()
    {
      return view('treatment.tampilDataTreatment');
    }

    #fungsi data Tables Treatment
    public function dataTablesTreatment()
    {
      #tampil semua data treatment
      $treatment = DB::table('tb_treatment')
                       ->where('status','=','aktif')
                       ->get();

      return Datatables::of($treatment)
                        ->addColumn('edit',function($treatment){
                          return "<button class='btn btn-default btn-xs'
                                          onclick='edit($treatment->id_treatment)'
                                          data-toggle='modal' data-target='#modalEditTreatment'>
                                   Edit
                                  </button>";
                          })
                          ->addColumn('hapus',function($treatment){
                            return "<button class='btn btn-default btn-xs'
                                            onclick='hapus($treatment->id_treatment)'>
                                     Hapus
                                    </button>";
                          })
                        ->rawcolumns(['edit','hapus'])
                        ->make(true);
    }

    #fungsi tambah treatment
    public function tambahTreatment(Request $request)
    {
      $namaTreatment  = $request->namaTreatment;
      $durasi         = $request->durasi;
      $harga          = $request->harga;

      #query insert treatment
      DB::table('tb_treatment')->insert([
        [
          'treatment'=>$namaTreatment,
          'durasi'    =>$durasi,
          'harga'     =>$harga
        ]
      ]);
    }

    #menampilkan data ke form edit
    public function tampilEditTreatment(Request $request)
    {
      $id = $request->id;
      $tbTreatmemnt = DB::table('tb_treatment')
                        ->where('id_treatment','=',$id)
                        ->get();
      return $tbTreatmemnt;
    }

    #fungsi edit Treatment
    public function editTreatment(Request $request)
    {
      $id             = $request->id;
      $namaTreatment  = $request->namaTreatment;
      $durasi         = $request->durasi;
      $harga          = $request->harga;

      DB::table('tb_treatment')
          ->where('id_treatment','=',$id)
          ->update([
                    'treatment' => $namaTreatment,
                    'durasi'    => $durasi,
                    'harga'     => $harga
                  ]);
    }

    #fungsi hapus treatment
    public function hapusTreatment(Request $request)
    {
      $id = $request->id;
      DB::table('tb_treatment')
          ->where('id_treatment','=',$id)
          ->update(['status' => 'tidak aktif']);
    }

}
