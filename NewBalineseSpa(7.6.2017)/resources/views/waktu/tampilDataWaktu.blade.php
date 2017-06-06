<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    Data Waktu Operasional New Balinese Mobile Spa
                </h2>
            </div>
            <div class="body">
                <table id="tabelDataWaktu" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Waktu Buka</th>
                        <th>Waktu Tutup</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //menampilkan isi database pada datatables
    $('#tabelDataWaktu').DataTable({
      processing : true,
      serverSide : true,
      ajax       : '/waktu/dataTablesWaktu',
      columns    : [
                      {data : 'id', name : 'id'},
                      {data : 'nama_hari', name : 'nama_hari'},
                      {data : 'waktu_buka', name : 'waktu_buka'},
                      {data : 'waktu_tutup', name : 'waktu_tutup'},
                      {data : 'edit', name : 'action', orderable : false, searchable : false}
                   ]
    })

    //mengirim data id untuk proses edit dan menerima data
    function edit(id) {
      $.ajax({
          url     : '/waktu/tampilEditWaktu',
          method  : 'get',
          data    : {'id' : id},
          success : function (response) {
            var editId        = $('#editId').val(response[0].id);
            var EditNamaHari  = $('#editNamaHari').val(response[0].nama_hari);
            var waktuBuka     = $('#editWaktuBuka').val(response[0].waktu_buka);
            var waktuTutup    = $('#editWaktuTutup').val(response[0].waktu_tutup);
          }
      })
    }
</script>
