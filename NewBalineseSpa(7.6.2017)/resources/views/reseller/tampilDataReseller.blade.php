<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    Data Reseller New Balinese Mobile Spa
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="tabelDataReseller" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                          </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $('#tabelDataReseller').DataTable({
    processing : true,
    serverSide : true,
    ajax       : '/reseller/dataTablesReseller',
    columns    :[
                  {data : 'nama_reseller', name : 'nama_reseller'},
                  {data : 'tgl_lahir', name : 'tgl_lahir'},
                  {data : 'jenis_kelamin', name : 'jenis_kelamin'},
                  {data : 'alamat', name : 'alamat'},
                  {data : 'email', name : 'email'},
                  {data : 'no_hp', name : 'no_hp'},
                  {data : 'username', name : 'username'},
                  {data : 'password', name : 'password'},
                  {data : 'edit', name: 'action', orderable: false, searchable: false},
                  {data : 'hapus', name: 'action', orderable: false, searchable: false}
                ]
  })

  //fungsi edit reseller
  function edit(id) {
      $.ajax({
        url     : '/reseller/tampilEditReseller',
        method  : 'get',
        data    : {'id' : id},
        success : function(response) {
          var editId      = $('#editId').val(response[0].id_reseller);
          var namaReseller = $('#editNamaReseller').val(response[0].nama_reseller);
          var tglLahir    = $('#editTglLahir').val(response[0].tgl_lahir);
          var alamat      = $('#editAlamat').val(response[0].alamat);
          var email       = $('#editEmail').val(response[0].email);
          var noHp        = $('#editNoHp').val(response[0].no_hp);
          var username    = $('#editUsername').val(response[0].username);
          var password    = $('#editPassword').val(response[0].password);
        }
      })
  }

  //fungsi hapus reseller
  function hapus(id) {
    $.ajax({
      url     : '/reseller/hapusReseller',
      method  : 'get',
      data    : {'id' : id},
      success :function(response) {
        console.log('sukses hapus');
      }

    })
  }
</script>
