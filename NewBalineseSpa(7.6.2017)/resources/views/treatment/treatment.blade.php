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
           <button type="button" class="btn bg-light-green waves-effect" data-toggle="modal" data-target="#modalTambahTreatment">
             Tambah
           </button>

            <div class="block-header">
            </div>

            <div id="tampilDataTreatment">

            </div>
        </div>

        {{-- Modal Dialog (modal lg) --}}
        <!-- Large Size -->
            <div class="modal fade" id="modalTambahTreatment" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Input Data Treatment</h4>
                        </div>
                        <div class="modal-body">
                          <form id="formTambahTreatment">
                              <label for="namaTreatment">Nama Treatment</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" name="namaTreatment" placeholder="Masukan Nama Treatment">
                                  </div>
                              </div>
                              <label for="durasi">Durasi (Menit)</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="number" class="form-control" name="durasi">
                                  </div>
                              </div>
                              <label for="harga">Harga (Rp)</label>
                              <div class="form-group">
                                <div class="form-line">
                                  <input type="number" class="form-control" name="harga">
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

       {{-- Edit Treatment --}}
       <!-- Large Size -->
           <div class="modal fade" id="modalEditTreatment" tabindex="-1" role="dialog">
               <div class="modal-dialog modal-lg" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h4 class="modal-title" id="largeModalLabel">Edit Data Treatment</h4>
                       </div>
                       <div class="modal-body">
                         <form id="formEditTreatment">
                           <input type="hidden" class="form-control" id="editId">
                             <label for="namaTreatment">Nama Treatment</label>
                             <div class="form-group">
                                 <div class="form-line">
                                     <input type="text" class="form-control" id="editNamaTreatment" placeholder="Masukan Nama Treatment">
                                 </div>
                             </div>
                             <label for="durasi">Durasi (Menit)</label>
                             <div class="form-group">
                                 <div class="form-line">
                                     <input type="number" class="form-control" id="editDurasi">
                                 </div>
                             </div>
                             <label for="harga">Harga (Rp)</label>
                             <div class="form-group">
                               <div class="form-line">
                                 <input type="number" class="form-control" id="editHarga">
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
    </section>

    <script type="text/javascript">

      //Tampilkan Data Pegawai
      $('#tampilDataTreatment').load('/treatment/tampilDataTreatment');

      //Tambah treatment
      $('#btnSimpan').click(function () {
        var nilaiForm = $('#formTambahTreatment').serialize();

        $.ajax({
          url     : '/treatment/tambahTreatment',
          method  : 'get',
          data    : nilaiForm,
          success : function (response) {
            console.log(response);
            $('#tampilDataTreatment').load('/treatment/tampilDataTreatment');
          }
        })
      })

      // Edit treatment
      $('#btnEdit').click(function(){
        var id            = $('#editId').val();
        var namaTreatment = $('#editNamaTreatment').val();
        var durasi        = $('#editDurasi').val();
        var harga         = $('#editHarga').val();
        //
        $.ajax({
          url    : '/treatment/editTreatment',
          method : 'get',
          data   : {
                      'id'            : id,
                      'namaTreatment' : namaTreatment,
                      'durasi'        : durasi,
                      'harga'         : harga
                    },
          success : function(response){
            $('#tampilDataTreatment').load('/treatment/tampilDataTreatment');
          }
        })
      })
    </script>
@endsection
