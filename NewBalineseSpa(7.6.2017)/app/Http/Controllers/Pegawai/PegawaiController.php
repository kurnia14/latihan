<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatables;

class PegawaiController extends Controller
{
     public function index()
     {
         return view('pegawai.pegawai');
     }

     public function tambahPegawai(Request $request)
     {
         $nama = $request->namaLengkap;
         $tglLahir = $request->tglLahir;
         $jenisKelamin = $request->jenisKelamin;
         $alamat = $request->alamat;
         $email = $request->email;
         $noHp = $request->noHp;
         $now = date('Y-m-d H:i:s');

         #Insert Pegawai
         DB::table('tb_karyawan')->insert([
           ['nama' => $nama,'tgl_lahir' => $tglLahir,
            'jenis_kelamin' => $jenisKelamin,'alamat'=>$alamat,
            'email' => $email,'no_hp' => $noHp,'created_at'=> $now]
         ]);
        //  return $nama.' '.$tglLahir.' '.$jenisKelamin.' '.$alamat.' '.$email.' '.$noHp;
     }

     public function tampilDataPegawai()
     {
        return view('pegawai.tampilDataPegawai');
     }


     public function dataTablesPegawai()
     {
         #tampil Semua data pegawai
         $pegawai = DB::table('tb_karyawan')
                        ->where('status','=','aktif')
                        ->get();

         return Datatables::of($pegawai)
                            ->addColumn('edit',function($pegawai){
                              return "<button class='btn btn-default btn-xs'
                                              onclick='edit($pegawai->id_karyawan)'
                                              data-toggle='modal' data-target='#modalEditKaryawan'>
                                       Edit
                                      </button>";
                              })
                              ->addColumn('hapus',function($pegawai){
                                return "<button class='btn btn-default btn-xs'
                                                onclick='hapus($pegawai->id_karyawan)'>
                                         Hapus
                                        </button>";
                              })
                            ->rawcolumns(['edit','hapus'])
                            ->make(true);
     }

     public function tampilEditPegawai(Request $request)
     {
         $id = $request->id;
         $tbKaryawan = DB::table('tb_karyawan')
                            ->where('id_karyawan','=',$id)
                            ->get();
         return $tbKaryawan;
     }

     public function editPegawai(Request $request)
     {
         $id          = $request->id;
         $namaPegawai = $request->namaPegawai;
         $tglLahir    = $request->tglLahir;
         $alamat      = $request->alamat;
         $email       = $request->email;
         $noHp        = $request->noHp;

         DB::table('tb_karyawan')
                  ->where('id_karyawan','=',$id)
                  ->update(['nama'      => $namaPegawai,
                            'tgl_lahir' => $tglLahir,
                            'alamat'    => $alamat,
                            'email'     => $email,
                            'no_hp'     => $noHp]);

     }

     public function hapusPegawai(Request $request)
     {
          $id = $request->id;
          DB::table('tb_karyawan')
              ->where('id_karyawan','=',$id)
              ->update(['status'=>'tidak aktif']);
     }
}
