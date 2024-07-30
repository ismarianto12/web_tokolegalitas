<?php
//default value
$nama_rumahsakit = null;
$alamat = null;
if ($param != null) {
    $rumah_sakit = $this->model->getRecord(array(
        'table' => 'rumah_sakit', 'where' => array('id_rumahsakit' => $param)
        ));
    if ($rumah_sakit) {
        $nama_rumahsakit  = $rumah_sakit->nama_rumahsakit;
        $alamat    = $rumah_sakit->alamat;
    }
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#rumahsakit-table-tab">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#rumahsakit-form-tab">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-hospital-o"></i>Data Nama Kantor</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="rumahsakit-table-tab" class="tab-pane fade active in">
            <table id="table-rumahsakit" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nama Nama Kantor</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                        <th><a href="#" class="btn btn-xs btn-success" onclick="newForm()" id="btn-add"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="rumahsakit-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="rumahsakit-form">
                <div class="form-group">
                    <label for="nama_rumahsakit-input" class="col-md-3 control-label">Nama Nama Kantor </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nama_rumahsakit-input" name="nama_rumahsakit-input" placeholder="Nama Nama Kantor"/>
                    </div>
                </div>
               <div class="form-group">
                    <label for="alamat-input" class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="alamat-input" name="alamat-input"><?php echo $alamat;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status-input" class="col-md-3 control-label">Status</label>
                    <div class="col-md-6">
                        <select class="form-control"  name="status-input" id="status-input">
                            <option value="1">Aktif</option>
                            <option value="0">Non Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="rumah_sakit" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="id_rumahsakit" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('rumahsakit-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
           
    <script>
    $(document).ready(function () {
        CKEDITOR.replace('alamat-input');
        getRumahsakit();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("rumahsakit-form-tab");';
        }
        ?>
     });

     function newForm() {
        loadContent(base_url + "view/_rumahsakit_form", function () {
            setActiveTab("rumahsakit-form-tab");
        });
    }

    
    function getRumahsakit() {
        if ($.fn.dataTable.isDataTable('#table-rumahsakit')) {
            tableRumahsakit = $('#table-rumahsakit').DataTable();
        } else {
            tableRumahsakit = $('#table-rumahsakit').DataTable({
                "ajax": base_url + 'objects/rumah_sakit',
                "columns": [
                   {"data": "nama_rumahsakit"},
                   {"data": "alamat"},
                   {"data": "is_active"},
                   {"data": "aksi", "width": "15%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsRumahsakit();
                }
            });
        }
    }

    function utilsRumahsakit() {
        $("#table-rumahsakit .editBtn").on("click",function() {
            loadContent(base_url + 'view/_rumahsakit_form/' + $(this).attr('href').substring(1));
        });

        $("#table-rumahsakit .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }
    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#rumahsakit-form").serialize(),
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json) {
                    loading('loading',false);
                    if (json.data.code === 0) {
                        if (json.data.message == '') {
                            genericAlert('Penyimpanan data gagal!', 'error','Error');
                        } else {
                            genericAlert(json.data.message, 'warning','Peringatan');
                        }
                    } else {
                        var page ='_rumahsakit_form/';
                        page += json.data.last_id;
                        genericAlert('Penyimpanan data berhasil', 'success','Sukses');
                        loadContent(base_url + 'view/' + page);
                    }
                }, error: function () {
                    loading('loading',false);
                    genericAlert('Terjadi kesalahan!', 'error','Error');
                }
            });
        }, 100);
    }

    function getData(idx) {
        $.ajax({
            url: base_url + 'object',
            data: 'model-input=rumah_sakit&key-input=id_rumahsakit&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json['data'].code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#nama_rumahsakit-input").val(json.data.object.nama_rumahsakit);
                    $("#alamat-input").val(json.data.object.alamat);
                    $("#status-input").val(json.data.object.is_active);
                    $("#action-input").val('2');
                    $("#value-input").val(json.data.object.id_rumahsakit);
                 
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
                    data: 'model-input=rumah_sakit&action-input=3&key-input=id_rumahsakit&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json['data'].code === 1) {
                            genericAlert('Hapus data berhasil','success','Sukses');
                            refreshTable();
                            setActiveTab('rumahsakit-table-tab');
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
        tableRumahsakit.ajax.url(base_url + '/objects/rumah_sakit').load();
    }
    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }

</script>