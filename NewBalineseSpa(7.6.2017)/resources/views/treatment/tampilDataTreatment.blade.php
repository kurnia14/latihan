<!-- Tampil Data Treatment -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align='center'>
                    Data Treatment New Balinese Mobile Spa
                </h2>
            </div>
            <div class="body">
                <table id="tabelDataTreatment" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                      <tr>
                        <th>Nama Treatment</th>
                        <th>Durasi(Menit)</th>
                        <th>Harga(Rp)</th>
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
    $('#tabelDataTreatment').DataTable({
      processing : true,
      serverSide : true,
      ajax       : '/treatment/dataTablesTreatment',
      columns    :[
                    {data : 'treatment', name : 'treatment'},
                    {data : 'durasi',    name : 'durasi'},
                    {data : 'harga', name : 'harga'},
                    {data: 'edit', name: 'action', orderable: false, searchable: false},
                    {data: 'hapus', name: 'action', orderable: false, searchable: false}
                  ]
    })

    // mengirim data id untuk proses edit dan menerima data
    function edit(id) {
      $.ajax({
        url :'/treatment/tampilEditTreatment',
        method : 'get',
        data : {'id' : id},
        success : function (response) {
          var editId            = $('#editId').val(response[0].id_treatment);
          var editNamaTreatment = $('#editNamaTreatment').val(response[0].treatment);
          var editDurasi        = $('#editDurasi').val(response[0].durasi);
          var editHarga         = $('#editHarga').val(response[0].harga);
        }
      })
    }

    //fungsi hapus treatmnet
    function hapus(id) {
      $.ajax({
        url     : '/treatment/hapusTreatment',
        method  : 'get',
        data    : {'id' : id},
        success : function(response) {
            console.log(response);
            $('#tampilDataTreatment').load('/treatment/tampilDataTreatment');
        }
      })
    }
</script>
