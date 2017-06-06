<!-- Tampil Data Terapis -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    Data Terapis New Balinese Mobile Spa
                </h2>
            </div>
            <div class="body">
                <table id="tabelDataTerapis" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                      <tr>
                        <th>Nama </th>
                        <th>Alamat</th>
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

<script type="text/javascript">
  //tampilan untuk datatable
  $('#tabelDataTerapis').DataTable({
    processing : true,
    serverSide : true,
    ajax       : '/terapis/dataTablesTerapis',
    columns    : [
                    {data : 'nama', name : 'nama'},
                    {data : 'alamat', name : 'alamat'},
                    {data : 'username', name : 'username'},
                    {data : 'password', name : 'password'},
                    {data: 'edit', name: 'action', orderable: false, searchable: false},
                    {data: 'hapus', name: 'action', orderable: false, searchable: false}
                 ]
  })

  // fungsi untuk mengambil data untuk edit
  function edit(id) {
    $.ajax({
      url     :'/terapis/tampilEditTerapis',
      method  :'get',
      data    :{'id' : id},
      success :function (response) {
          var editId          = $('#editId').val(response[0].id_terapis);
          var editNamaTerapis = $('#editNamaTerapis').val(response[0].nama);
          var username        = $('#editUsername').val(response[0].username);
          var password        = $('#editPassword').val(response[0].password);
      }
    })
  }

  //fungsi untuk menghapus data terapis
  function hapus(id) {
    $.ajax({
      url     : '/terapis/hapusTerapis',
      method  : 'get',
      data    : {'id' : id},
      success :function(response){
        $('#tampilDataTerapis').load('/terapis/tampilDataTerapis');
      }
    })
  }
</script>
