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
            <div id="tampilDataWaktu">

            </div>
        </div>

        {{-- Edit Treatment --}}
        <!-- Large Size -->
            <div class="modal fade" id="modalEditWaktu" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" align="center" id="largeModalLabel">Edit Data Waktu Operasional</h4>
                        </div>
                        <div class="modal-body">
                          <form id="formEditWaktu">
                            <input type="hidden" class="form-control" id="editId">
                              <label for="namaTreatment">Hari</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" id="editNamaHari" disabled="disable">
                                  </div>
                              </div>
                              <label for="waktuBuka">Waktu Buka</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="time" class="form-control" id="editWaktuBuka">
                                  </div>
                              </div>
                              <label for="waktuTutup">Waktu Tutup</label>
                              <div class="form-group">
                                <div class="form-line">
                                  <input type="time" class="form-control" id="editWaktuTutup">
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
      //menampilkan data waktu
      $('#tampilDataWaktu').load('/waktu/tampilDataWaktu');

      //Edit Waktu Operaasional
      $('#btnEdit').click(function() {
          var id          = $('#editId').val();
          var namaHari    = $('#editNamaHari').val();
          var waktuBuka   = $('#editWaktuBuka').val();
          var waktuTutup  = $('#editWaktuTutup').val();

          $.ajax({
            url     : '/waktu/editWaktu',
            method  : 'get',
            data    : {
                        'id'        : id,
                        'namaHari'  : namaHari,
                        'waktuBuka' : waktuBuka,
                        'waktuTutup': waktuTutup
                      },
            success : function(response) {
              $('#tampilDataWaktu').load('/waktu/tampilDataWaktu');
            }
          })
      })
  </script>
@endsection
