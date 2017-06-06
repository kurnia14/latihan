<?php

namespace App\Http\Controllers\Terapis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatables;

class TerapisController extends Controller
{
    #fungsi untuk menampilkan halaman terapis
    public function index()
    {
      $nama = DB::select('select nama, tb_karyawan.id_karyawan from tb_karyawan
                          left Join tb_terapis ON(tb_karyawan.id_karyawan
                          = tb_terapis.id_karyawan) where tb_terapis.id_karyawan is null');
      // return $nama;
      return view('terapis.terapis',['nama'=>$nama]);
    }

    #fungsi untuk menampilkan data terapis
    public function tampilDataTerapis()
    {

      return view ('terapis.tampilDataTerapis');
    }

    #fungsi datatables terapis
    public function dataTablesTerapis()
    {
      #tampil semua data karyawan join data terapis di database
      $terapis = DB::table('tb_karyawan')
                    ->join('tb_terapis','tb_karyawan.id_karyawan','=','tb_terapis.id_karyawan')
                    ->select('id_terapis','nama','alamat','username','password')
                    ->where('tb_terapis.status','=','aktif')
                    ->get();
      return Datatables::of($terapis)
                    ->addColumn('edit',function($terapis){
                      return "<button class='btn btn-default btn-xs'
                                      onclick='edit($terapis->id_terapis)'
                                      data-toggle='modal' data-target='#modalEditTerapis'>
                               Edit
                              </button>";
                      })
                      ->addColumn('hapus',function($terapis){
                        return "<button class='btn btn-default btn-xs'
                                        onclick='hapus($terapis->id_terapis)'>
                                 Hapus
                                </button>";
                      })
                    ->rawcolumns(['edit','hapus'])
                    ->make(true);
    }

    #fungsi untuk menambah data
    public function tambahTerapis(Request $request)
    {
      $id_karyawan = $request->id;
      $username    = $request->username;
      $password    = $request->password;


      DB::table('tb_terapis')->insert([
        [
          'id_karyawan' => $id_karyawan,
          'username'    => $username,
          'password'    => $password
        ]
      ]);
    }

    #fungsi untuk tampil edit data terapis
    public function tampilEditTerapis(Request $request)
    {
      $id = $request->id;
      $tbTerapis = DB::table('tb_karyawan')
                    ->join('tb_terapis','tb_karyawan.id_karyawan','=','tb_terapis.id_karyawan')
                    ->select('id_terapis','nama','alamat','username','password')
                    ->where('id_terapis','=',$id)
                    ->get();
      return $tbTerapis;
    }

    #fungsi untuk edit Terapis
    public function editTerapis(Request $request)
    {
      $id       = $request->id;
      $username = $request->username;
      $password = $request->password;

      DB::table('tb_terapis')
          ->where('id_terapis','=',$id)
          ->update([
                      'username' => $username,
                      'password' => $password
                  ]);
    }

    #fungsi untuk menghapus treatment
    public function hapusTerapis(Request $request)
    {
      $id = $request->id;

      DB::table('tb_terapis')
          ->where('id_terapis','=',$id)
          ->update(['status' => 'tidak aktif']);
    }
}
