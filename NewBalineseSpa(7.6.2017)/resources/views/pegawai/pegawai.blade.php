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
           <button type="button" class="btn bg-light-green waves-effect" data-toggle="modal" data-target="#modalTambahPegawai">
             Tambah
           </button>

            <div class="block-header">
            </div>

            <div id="tampilDataPegawai">
              
            </div>
        </div>
    </section>

    {{-- Modal Dialog (modal lg) --}}
    <!-- Large Size -->
        <div class="modal fade" id="modalTambahPegawai" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                      <form id="formTambahPegawai">
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


   {{-- Modal Edit Karyawan --}}
   <!-- Large Size -->
       <div class="modal fade" id="modalEditKaryawan" tabindex="-1" role="dialog">
           <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title" id="largeModalLabel">Edit Karyawan</h4>
                   </div>
                   <div class="modal-body">
                     <form id="formEditPegawai">
                        <input type="hidden" class="form-control "id="editId">
                         <label for="nama-lengkap">Nama Lengkap</label>
                         <div class="form-group">
                             <div class="form-line">
                                 <input type="text" class="form-control" id="editNamaPegawai" placeholder="Masukan Nama Lengkap">
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

{{-- Tambah Pegawai --}}
   <script type="text/javascript">
   $('#btnSimpan').click(function(){
      var nilaiForm = $('#formTambahPegawai').serialize();

      $.ajax({
        url : '/pegawai/tambahPegawai',
        method : 'get',
        data : nilaiForm,
        success : function(response){
          console.log(response);
          $('#tampilDataPegawai').load('/pegawai/tampilDataPegawai');
        }
      })
   })

   //Tampilkan Data Pegawai
   $('#tampilDataPegawai').load('/pegawai/tampilDataPegawai');

  //Edit Pegawai
   $('#btnEdit').click(function() {
     var id          = $('#editId').val();
     var namaPegawai = $('#editNamaPegawai').val();
     var tglLahir    = $('#editTglLahir').val();
     var alamat      = $('#editAlamat').val();
     var email       = $('#editEmail').val();
     var noHp        = $('#editNoHp').val();

     $.ajax({
       url : '/pegawai/editPegawai',
       method : 'get',
       data : {
                'id'          : id,
                'namaPegawai' : namaPegawai,
                'tglLahir'    : tglLahir,
                'alamat'      : alamat,
                'email'       : email,
                'noHp'        : noHp
              },
       success : function (response) {
         $('#tampilDataPegawai').load('/pegawai/tampilDataPegawai');
       }
     })
   })

  //  //Hapus pegawai
   function hapus(id){
     $.ajax({
       url : '/pegawai/hapusPegawai',
       method : 'get',
       data : { 'id' : id},
       success : function(response){
         console.log(response);
         $('#tampilDataPegawai').load('/pegawai/tampilDataPegawai');
       }
      })
   }
   </script>
@endsection
