<?php

namespace App\Http\Controllers\Reseller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Datatables;

class ResellerController extends Controller
{
    #fungsi halaman utama crud reseller
    public function index()
    {
      return view('reseller.reseller');
    }

    #fungsi menampilkan data reseller
    public function tampilDataReseller()
    {
      return view('reseller.tampilDataReseller');
    }

    #fungsi untuk menampilkan data reseller ke dalam DataTable
    public function dataTablesReseller()
    {
      $treseller = DB::table('tb_reseller')
                      ->where('status','=','aktif')
                      ->get();

      return Datatables::of($treseller)
                      ->addColumn('edit',function($treseller){
                        return "<button class='btn btn-default btn-xs'
                                        onclick='edit($treseller->id_reseller)'
                                        data-toggle='modal' data-target='#modalEditReseller'>
                                 Edit
                                </button>";
                      })
                      ->addColumn('hapus',function($treseller){
                        return "<button class='btn btn-default btn-xs'
                                        onclick='hapus($treseller->id_reseller)'>
                                 Hapus
                                </button>";
                      })
                      ->rawcolumns(['edit','hapus'])
                      ->make(true);
    }

    #fungsi untuk menambahkan data reseller
    public function tambahReseller(Request $request)
    {
      $nama         = $request->namaLengkap;
      $tglLahir     = $request->tglLahir;
      $jenisKelamin = $request->jenisKelamin;
      $alamat       = $request->alamat;
      $email        = $request->email;
      $noHp         = $request->noHp;
      $username     = $request->username;
      $password     = $request->password;
      $now = date('Y-m-d H:i:s');

      #query insert data reseller
      DB::table('tb_reseller')
          ->insert([
                    'nama_reseller' => $nama, 'tgl_lahir' => $tglLahir,
                    'jenis_kelamin' => $jenisKelamin, 'alamat' => $alamat,
                    'email' => $email, 'no_hp' => $noHp, 'username' => $username,
                    'password' => $password, 'created_at' => $now
                  ]);
    }

    #fungsi untuk menampilkan data reseller untuk di edit
    public function tampilEditReseller(Request $request)
    {
      $id = $request->id;

      $treseller = DB::table('tb_reseller')
                      ->where('id_reseller','=',$id)
                      ->get();
      return $treseller;
    }

    #fungsi untuk edit reseller
    public function editReseller(Request $request)
    {
      $id           = $request->id;
      $nama         = $request->namaReseller;
      $tglLahir     = $request->tglLahir;
      $alamat       = $request->alamat;
      $email        = $request->email;
      $noHp         = $request->noHp;
      $username     = $request->username;
      $password     = $request->password;
      $now = date('Y-m-d H:i:s');

      DB::table('tb_reseller')
          ->where('id_reseller','=',$id)
          ->update([
                    'nama_reseller' => $nama, 'tgl_lahir' => $tglLahir,
                    'alamat' => $alamat,
                    'email' => $email, 'no_hp' => $noHp, 'username' => $username,
                    'password' => $password, 'updated_at' => $now
                  ]);
    }

    #fungsi untuk hapus reseller
    public function hapusReseller(Request $request)
    {
      $id = $request->id;

      DB::table('tb_reseller')
          ->where('id_reseller','=',$id)
          ->update(['status' => 'tidak aktif']);
    }


}
