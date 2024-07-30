<?php
//default value
$nama_bagian = null;
$deskripsi = null;
$urutan = null;
if ($param != null) {
    $bagian = $this->model->getRecord(array(
        'table' => 'bagian', 'where' => array('nama_bagian' => $param)
        ));
    if ($bagian) {
        $nama_bagian  = $bagian->nama_bagian;
        $deskripsi    = $bagian->deskripsi;
        $urutan       = $bagian->urutan;
    }
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#bagian-table-tab" title="Table View">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#bagian-form-tab" title="Form View">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-file-text"></i>Data bagian</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="bagian-table-tab" class="tab-pane fade active in">
            <table id="table-bagian" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nama bagian</th>
                        <th>Deskripsi</th>
                        <th>Urutan</th>
                        <th>Nama Kantor</th>
                        <th>Publish</th>
                        <th><a href="#" class="btn btn-xs btn-success pull-right" onclick="newForm()"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
          <div id="bagian-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="bagian-form">
                <div class="form-group">
                    <label for="nama_bagian-input" class="col-md-3 control-label">Nama bagian</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nama_bagian-input" name="nama_bagian-input" placeholder="Nama bagian" value="<?php echo $nama_bagian;?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi-input" class="col-md-3 control-label">Deskripsi</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="deskripsi-input" name="deskripsi-input"><?php echo $deskripsi;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="urutan-input" class="col-md-3 control-label">Urutan Jadwal</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="urutan-input" name="urutan-input" placeholder="Urutan jadwal"/>
                    </div>
                </div>
              <?= parsing_rs_select()  ?>
                <div class="form-group">
                    <label for="publish-input" class="col-md-3 control-label">Publish</label>
                    <div class="col-md-6">
                        <select class="form-control"  name="publish-input" id="publish-input">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="bagian" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="id_bagian" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('bagian-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('deskripsi-input');
        getBagian();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("bagian-form-tab");';
        }
        ?>

      
 });
    function newForm() {
        loadContent(base_url + "view/_bagian_form", function () {
            setActiveTab("bagian-form-tab");
        });
    }


    function getBagian() {
        if ($.fn.dataTable.isDataTable('#table-bagian')) {
            tableBagian = $('#table-bagian').DataTable();
        } else {
            tableBagian = $('#table-bagian').DataTable({
                "ajax": base_url + 'objects/bagian',
                "columns": [
                   {"data": "nama_bagian"},
                   {"data": "deskripsi"},
                   {"data": "urutan"},
                   {"data": "nama_rumahsakit"},
                   {"data": "is_publish"},
                   {"data": "aksi", "width": "15%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsBagian();
                }
            });
        }
    }

    function utilsBagian() {
        $("#table-bagian .editBtn").on("click",function() {
            loadContent(base_url + 'view/_bagian_form/' + $(this).attr('href').substring(1));
        });

        $("#table-bagian .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#bagian-form").serialize(),
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
                        var page ='_bagian_form/';
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
            data: 'model-input=bagian&key-input=id_bagian&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.data.code === 0) {
                    loginAlert('Akses tidak sah');
                } else {

                    $("#nama_bagian-input").val(json.data.object.nama_bagian);
                    $("#rumah_sakit-input").val(json.data.object.id_rumahsakit);
                    $("#deskripsi-input").val(json.data.object.deskripsi);
                    $("#urutan-input").val(json.data.object.urutan);
                    $("#publish-input").val(json.data.object.is_publish);
                    $("#action-input").val('2');
                    $("#value-input").val(json.data.object.id_bagian);
                  
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
                    data: 'model-input=bagian&action-input=3&key-input=id_bagian&value-input='+n,
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
        tableBagian.ajax.url(base_url + '/objects/bagian').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>
