@extends('master.layout')

@section('topBar')
  @include('master.include.topBarAdmin')
@endsection

@section('leftSideBar')
  @include('master.include.leftSideBarAdmin')
@endsection

@section('content')
  <section class="content">
    <div class="container-fluid">
       <button type="button" class="btn bg-light-green waves-effect" data-toggle="modal" data-target="#modalTambahReseller">
         Tambah
       </button>
       <div class="block-header">
       </div>
       <div id="tampilDataReseller">
       </div>
    </div>
  </section>

  {{-- Modal Untuk tambah Data Reseller --}}
  <!-- Large Size -->
      <div class="modal fade" id="modalTambahReseller" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="largeModalLabel" align="center">Input Data Reseller</h4>
                  </div>
                  <div class="modal-body">
                    <form id="formTambahReseller">
                        <label for="nama-lengkap">Nama Lengkap</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="namaLengkap" placeholder="Masukan Nama Lengkap">
                            </div>
                        </div>
                        <label for="ttl">Tempat Tanggal Lahir</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" class="form-control" name="tglLahir">
                            </div>
                        </div>

                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-group">
                              <input name="jenisKelamin" type="radio" id="radio_1" value="Laki-laki">
                              <label for="radio_1">Laki-Laki</label>
                              <input name="jenisKelamin" type="radio" id="radio_2" value="Perempuan">
                              <label for="radio_2">Perempuan</label>
                        </div>

                        <label for="alamat">Alamat</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" class="form-control" name="alamat">
                          </div>
                        </div>

                        <label for="notelepon">Email</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>

                        <label for="notelepon">Nomer Hp</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" name="noHp">
                            </div>
                        </div>

                        <label for="username">Username</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>

                        <label for="notelepon">password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <button type="Reset" class="btn bg-light-green m-t-15 waves-effect" id="btnReset">
                          Reset
                        </button>
                        <button type="button" class="btn bg-light-green m-t-15 waves-effect" data-dismiss="modal" id="btnSimpan">
                          Simpan
                        </button>
                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
              </div>
          </div>
      </div>
 <!-- #Large Size -->

 {{-- Modal Edit Reseller --}}
 <!-- Large Size -->
     <div class="modal fade" id="modalEditReseller" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="largeModalLabel">Edit Karyawan</h4>
                 </div>
                 <div class="modal-body">
                   <form id="formEditReseller">
                      <input type="hidden" class="form-control "id="editId">
                       <label for="nama-lengkap">Nama Lengkap</label>
                       <div class="form-group">
                           <div class="form-line">
                               <input type="text" class="form-control" id="editNamaReseller">
                           </div>
                       </div>
                       <label for="ttl">Tempat Tanggal Lahir</label>
                       <div class="form-group">
                           <div class="form-line">
                               <input type="date" class="form-control" id="editTglLahir">
                           </div>
                       </div>
{{--
                       <label for="jk">Jenis Kelamin</label>
                       <div class="form-group">
                             <input name="jenisKelamin" type="radio" id="radio_1" value="Laki-laki">
                             <label for="radio_1">Laki-Laki</label>
                             <input name="jenisKelamin" type="radio" id="radio_2" value="Perempuan">
                             <label for="radio_2">Perempuan</label>
                       </div> --}}

                       <label for="alamat">Alamat</label>
                       <div class="form-group">
                         <div class="form-line">
                           <input type="text" class="form-control" id="editAlamat">
                         </div>
                       </div>

                       <label for="notelepon">Email</label>
                       <div class="form-group">
                           <div class="form-line">
                               <input type="text" class="form-control" id="editEmail">
                           </div>
                       </div>

                       <label for="notelepon">Nomer Hp</label>
                       <div class="form-group">
                           <div class="form-line">
                               <input type="number" class="form-control" id="editNoHp">
                           </div>
                       </div>

                       <label for="notelepon">Username</label>
                       <div class="form-group">
                           <div class="form-line">
                               <input type="username" class="form-control" id="editUsername">
                           </div>
                       </div>

                       <label for="notelepon">Password</label>
                       <div class="form-group">
                           <div class="form-line">
                               <input type="password" class="form-control" id="editPassword">
                           </div>
                       </div>


                       <button type="Reset" class="btn bg-light-green m-t-15 waves-effect" id="btnReset">
                         Reset
                       </button>
                       <button type="button" class="btn bg-light-green m-t-15 waves-effect" data-dismiss="modal" id="btnEdit">
                         Simpan
                       </button>
                   </form>
                 </div>
                 <div class="modal-footer">
                 </div>
             </div>
         </div>
     </div>
 <!-- #Large Size -->

  <script type="text/javascript">
    //menampilkan data reseller
    $('#tampilDataReseller').load('/reseller/tampilDataReseller');

    //menambahkan data reseller ke database
    $('#btnSimpan').click(function() {
      var dataReseller = $('#formTambahReseller').serialize();

      $.ajax({
        url     : '/reseller/tambahReseller',
        method  : 'get',
        data    : dataReseller,
        success : function(response) {
          $('#tampilDataReseller').load('/reseller/tampilDataReseller');
        }
      })
    })

    $('#btnEdit').click(function () {
      var id            = $('#editId').val();
      var namaReseller  = $('#editNamaReseller').val();
      var tglLahir      = $('#editTglLahir').val();
      var alamat        = $('#editAlamat').val();
      var email         = $('#editEmail').val();
      var noHp          = $('#editNoHp').val();
      var username      = $('#editUsername').val();
      var password      = $('#editPassword').val();

      $.ajax({
        url       : '/reseller/editReseller',
        method    : 'get',
        data      : {
                      'id'            : id,
                      'namaReseller'  : namaReseller,
                      'tglLahir'      : tglLahir,
                      'alamat'        : alamat,
                      'email'         : email,
                      'noHp'          : noHp,
                      'username'      : username,
                      'password'      : password
                    },
        success   : function(response) {
          $('#tampilDataReseller').load('/reseller/tampilDataReseller');
        }
      })
    })
  </script>
@endsection
