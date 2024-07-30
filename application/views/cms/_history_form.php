<?php
$gb = null;
if ($param != null) {
    $gb = $this->model->getRecord(array(
        'table' => 'download_history', 'where' => array('download_id' => $param)
        ));
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#gb-table-tab">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#gb-form-tab">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-envelope"></i>Download History</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="gb-table-tab" class="tab-pane fade active in">
            <table id="table-gb" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>file download</th>
                        <th>Keterangan</th>
                        <th>Date</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="gb-form-tab" class="tab-pane fade">
            <div id="msg-content">
                
            </div>
            <div id="msg-btn">
               
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        getGB();
        <?php
        if($gb != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("gb-form-tab");';
        }
        ?>
    });

    function getGB() {
        if ($.fn.dataTable.isDataTable('#table-gb')) {
            tableGB = $('#table-gb').DataTable();
        } else {
            tableGB = $('#table-gb').DataTable({
                "ajax": base_url + 'objects/download',
                "columns": [
                   {"data": "name"},
                   {"data": "email"},
                   {"data" : "title"},
                   {"data": "ket"},
                   {"data" : "date"},
                   {"data": "aksi", "width": "15%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsGb();
                }
            });
        }
    }

    function utilsGb() {
        $("#table-gb .viewBtn").on("click",function() {
            loadContent(base_url + 'view/_history_form/' + $(this).attr('href').substring(1));
        });

        $("#table-gb .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    function getData(idx) {
        $.ajax({
            url: base_url + 'object',
            data: 'model-input=v_download&key-input=download_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json['data'].code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#msg-content").html('<p><b>Nama : </b> '+json.data.object.name+'</p>' +
                        '<p><b>Email : </b> '+json.data.object.email+'</p>' +
                        '<p><b>Tanggal : </b> '+json.data.object.download_datetime+'</p>' +
                        '<p><b>Ebook Name : </b> '+json.data.object.ebook_title+'</p>' +
                        '<p><b>Pesan : </b></p>' +
                        '<div>'+json.data.object.ket+'</div>');
                    $("#msg-btn").html(''+
                        ' <a href="#" onclick="confirmDelete(\'<?php echo $param;?>\');" class="btn btn-danger"><i class="fa fa-trash-0"></i> Hapus</a>');
                }
            }
        });
    }

    function confirmDelete(n){
        swal({
            title: "Konfirmasi Hapus",
            text: "Apakah anda yakin akan menghapus data ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: " Ya",
            closeOnConfirm: false
        },
        function(){
            loading('loading',true);
            setTimeout(function() {
                $.ajax({
                    url: base_url + 'manage',
                    data: 'model-input=Historydownload&action-input=3&key-input=download_id&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json['data'].code === 1) {
                            genericAlert('Hapus data berhasil','success','Sukses');
                            refreshTable();
                            setActiveTab('gb-table-tab');
                        } else if(json['data'].code === 2){
                            genericAlert('Hapus data gagal!','error','Error');
                        } else{
                            genericAlert(json['data'].message,'warning','Perhatian');
                        }
                    },
                    error: function () {
                        loading('loading',false);
                        genericAlert('Tidak dapat hapus data!','error', 'Error');
                    }
                });
            }, 100);
        });
    }

    function refreshTable(){
        tableGB.ajax.url(base_url + '/objects/download').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }

    function newForm() {
        loadContent(base_url + 'view/_sample_guestbook_form');
    }
</script>