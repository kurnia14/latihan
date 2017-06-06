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
       <button type="button" class="btn bg-light-green waves-effect" data-toggle="modal" data-target="#modalTambahTerapis">
         Tambah
       </button>

       <div class="block-header">
       </div>

       <div id="tampilDataTerapis">
       </div>
    </div>
  </section>

  {{-- Modal untuk Tambah Terapis --}}
  <div class="modal fade" id="modalTambahTerapis" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <form id="formTambahTerapis">
                    <label for="nama-lengkap">Nama Lengkap</label>
                      <select class="form-control show-tick" id="namaTerapis" name="namaTerapis">
                            <option selected="selected">--pilih nama pegawai--</option>
                            @foreach ($nama as $terapis)
                              <option value="{{ $terapis->id_karyawan }}">{{ $terapis->nama }}</option>
                            @endforeach
                      </select>

                    <label for="username">Username</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" id="username">
                        </div>
                    </div>

                    <label for="password">Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" class="form-control" id="password">
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


  {{-- Modal untuk Edit Terapis --}}
  <div class="modal fade" id="modalEditTerapis" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <form id="formEditTerapis">
                    <input type="hidden" id="editId" value="">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" id="editNamaTerapis" disabled="disable">
                        </div>
                    </div>
                    <label for="username">Username</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" id="editUsername">
                        </div>
                    </div>

                    <label for="password">Password</label>
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

  <script type="text/javascript">
    //menampilkan data terapis
    $('#tampilDataTerapis').load('/terapis/tampilDataTerapis');

    //menambahkan data terapis
    $('#btnSimpan').click(function(){
      var namaTerapis = $('#namaTerapis').val();
      var username    = $('#username').val();
      var password    = $('#password').val();

      $.ajax({
        url     : '/terapis/tambahTerapis',
        method  : 'get',
        data    : {
                    'id'        : namaTerapis,
                    'username'  : username,
                    'password'  : password
                  },
        success : function(response) {
          console.log(response);
          $('#tampilDataTerapis').load('/terapis/tampilDataTerapis');
        }
      })
    })

    //edit Data terapis
    $('#btnEdit').click(function(){
      var id        = $('#editId').val();
      var username  = $('#editUsername').val();
      var password  = $('#editPassword').val();

      $.ajax({
        url   : '/terapis/editTerapis',
        method: 'get',
        data  : {
                  'id'        : id,
                  'username'  : username,
                  'password'  : password
                },
        success : function(response) {
          $('#tampilDataTerapis').load('/terapis/tampilDataTerapis');
        }
      })
    })





  </script>
@endsection
