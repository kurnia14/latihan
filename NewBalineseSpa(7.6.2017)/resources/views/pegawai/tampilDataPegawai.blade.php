<!-- Tampil Data Pegawai -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    BASIC EXAMPLE
                </h2>
            </div>
            <div class="body">
                <table id="tabelDataPegawai" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                      <tr>
                        <th>Nama </th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
  $('#tabelDataPegawai').DataTable({
    processing : true,
    serverSide : true,
    ajax : '/pegawai/dataTablesPegawai',
    columns: [
            {data: 'nama', name: 'nama'},
            {data: 'tgl_lahir', name: 'tgl_lahir'},
            {data: 'jenis_kelamin', name: 'jenis_kelamin'},
            {data: 'alamat', name: 'alamat'},
            {data: 'email', name: 'email'},
            {data: 'no_hp', name: 'no_hp'},
            {data: 'edit', name: 'action', orderable: false, searchable: false},
            {data: 'hapus', name: 'action', orderable: false, searchable: false}
        ]
  })

  function edit(id){
      $.ajax({
        url :'/pegawai/tampilEditPegawai',
        method : 'get',
        data : {'id' : id},
        success : function(response) {
          var editId      = $('#editId').val(response[0].id_karyawan);
          var namaPegawai = $('#editNamaPegawai').val(response[0].nama);
          var tglLahir    = $('#editTglLahir').val(response[0].tgl_lahir);
          var alamat      = $('#editAlamat').val(response[0].alamat);
          var email       = $('#editEmail').val(response[0].email);
          var noHp        = $('#editNoHp').val(response[0].no_hp);
        }
      })
  }
</script>
