<?php
$name_set  = null;
$value_set = null;
if ($param != null) {
    $setting = $this->model->getRecord(array(
        'table' => 'setting', 'where' => array('setting_id' => $param)
        ));
    if ($setting) {
        $name_set  = $setting->name_set;
        $value_set    = $setting->value_set;
    }
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#setting-table-tab" title="Table View">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#setting-form-tab" title="Form View">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-gears"></i> Setting </li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="setting-table-tab" class="tab-pane fade active in">
            <table id="table-setting" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Value</th>
                        <th>Nama Kantor</th>
                        <th>Status</th>
                        <th><a href="#" class="btn btn-xs btn-success pull-right" onclick="newForm()"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="setting-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="setting-form">
                <div class="form-group">
                    <label for="name-input" class="col-md-3 control-label">Name Set</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name-input" name="name-input" placeholder="Name Set" value="<?php echo $name_set;?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="val-input" class="col-md-3 control-label" >Value</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="val-input" name="val-input" style="height: 120px;"><?php echo $value_set;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status-input" class="col-md-3 control-label">Status</label>
                    <div class="col-md-6">
                        <select class="form-control"  name="status-input" id="status-input">
                            <option value="1">Active</option>
                            <option value="0">Nonactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description-input" class="col-md-3 control-label">Description</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="description-input" name="description-input"></textarea>
                    </div>
                </div>
              <?= parsing_rs_select()  ?>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="setting" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="setting_id" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('setting-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        /*CKEDITOR.replace('val-input');*/
        getSetting();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("setting-form-tab");';
        }
        ?>
    });

    function newForm() {
        loadContent(base_url + "view/_setting_form", function () {
            setActiveTab("setting-form-tab");
        });
    }

    function getSetting() {
        if ($.fn.dataTable.isDataTable('#table-setting')) {
            tableSetting = $('#table-setting').DataTable();
        } else {
            tableSetting = $('#table-setting').DataTable({
                "ajax": base_url + 'objects/setting',
                "columns": [
                   {"data": "description"},
                   {"data": "value"},
                   {"data": "nama_rumahsakit"},
                   {"data": "is_active"},
                   {"data": "aksi", "width": "15%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsSetting();
                }
            });
        }
    }

    function utilsSetting() {
        $("#table-setting .editBtn").on("click",function() {
            loadContent(base_url + 'view/_setting_form/' + $(this).attr('href').substring(1));
        });

        $("#table-setting .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#setting-form").serialize(),
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
                        var page ='_setting_form/';
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
            data: 'model-input=setting&key-input=setting_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.data.code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#name-input").attr('readonly','');
                    $("#status-input").val(json.data.object.is_active);
                    $("#description-input").val(json.data.object.description);
                    $("#rumah_sakit-input").val(json.data.object.id_rumahsakit);
                    $("#action-input").val('2');
                    $("#value-input").val(idx);
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
                    data: 'model-input=setting&action-input=3&key-input=setting_id&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json.data.code === 1) {
                            genericAlert('Hapus data berhasil','success','Sukses');
                            refreshTable();
                        } else if(json.data.code === 2){
                            genericAlert('Hapus data gagal!','error','Error');
                        } else{
                            genericAlert(json.data.message,'warning','Perhatian');
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
        tableSetting.ajax.url(base_url + '/objects/setting').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>