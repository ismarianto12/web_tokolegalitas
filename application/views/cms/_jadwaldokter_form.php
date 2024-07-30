<?php
//default value

$jadwal = null;
$ket = null;

$hari=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Senin-Jumat","Senin-Sabtu","Minggu1","Minggu2","Minggu3","Minggu4","Minggu5","Minggu1-Minggu5");


$bagian = null;
//$hari=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");

//$spesialis=array('Dokter Umum','Dokter Spesialis');
$oncall=array('oncall','tidak');
if ($param != null) {
    $jadwaldokter = $this->model->getRecord(array(
        'table' => 'jadwal_dokter', 'where' => array('id_jadwal' => $param)
        ));
    if ($jadwaldokter) {
        $jadwal  =$jadwaldokter->hari;
        //$bagian       = $dokter->bagian;
        $ket    =$jadwaldokter->ket;
    }
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#jadwaldokter-table-tab">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#jadwaldokter-form-tab">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-hospital-o"></i>Jadwal Dokter</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="jadwaldokter-table-tab" class="tab-pane fade active in">
            <table id="table-jadwaldokter" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nama Dokter</th>
                        <th>Bagian</th>
                        <th>Hari</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Nama Kantor</th>
                        <th>On Call</th>
                        <th>Keterangan</th>
                        <th><a href="#" class="btn btn-xs btn-success" onclick="newForm()" id="btn-add"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <div id="jadwaldokter-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="jadwaldokter-form">
               <div class="form-group">
                <label for="id_dokter-input" class="col-md-3 control-label"> Nama Dokter </label>
                <div class="col-md-6">
                   <select class="form-control"  name="id_dokter-input" id="id_dokter-input">
                    <?php
                    $cat = $this->model->getList(array('table' => 'dokter', 'where' => array('is_active' => 1),  'sort' => 'nama_dokter ASC'));
                    if ($cat) {
                        foreach ($cat as $row) {
                            echo '<option value="'. $row->id_dokter .'">'. $row->nama_dokter .'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="hari-input" class="col-md-3 control-label">Jadwal Dokter</label>
            <div class="col-md-6">
                <select type="text" class="form-control" id="hari-input" name="hari-input">
                    <?php
                    foreach ($hari as $value) {
                     echo "<option value='".addslashes($value)."'>".$value."</option>";
                 }
                 ?>
             </select>
         </div>
     </div>
     <div class="form-group">
         <label for="jam-input" class="col-md-3 control-label">Jam Masuk</label>
         <div class="col-md-6">
             <div class="input-group bootstrap-timepicker timepicker">
                 <input id="timepicker1" type="text" name ="jam-input" class="form-control input-small time-picker">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
             </div>
         </div>
     </div>
     <div class="form-group">
         <label for="jam_pulang-input" class="col-md-3 control-label">Jam Pulang</label>
         <div class="col-md-6">
             <div class="input-group bootstrap-timepicker timepicker">
                 <input id="timepicker1" type="text" name ="jam_pulang-input" class="form-control input-small  time-picker">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
             </div>
         </div>
     </div>
     <div class="form-group">
        <label for="oncall-input" class="col-md-3 control-label">Oncall</label>
        <div class="col-md-6">
            <select class="form-control"  name="oncall-input" id="oncall-input">
                <option value="1">On Call</option>
                <option value="0">Tidak</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="ket-input" class="col-md-3 control-label">Keterangan</label>
        <div class="col-md-6">
            <textarea class="form-control" id="ket-input" name="ket-input"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="id_rumahsakit-input" class="col-md-3 control-label">Nama Kantor</label>
        <div class="col-md-6">
            <select class="form-control"  name="id_rumahsakit-input" id="id_rumahsakit-input">
                <?php
                $cat = $this->model->getList(array('table' => 'rumah_sakit', 'where' => array('is_active' => 1),  'sort' => 'nama_rumahsakit ASC'));
                if ($cat) {
                    foreach ($cat as $row) {
                        echo '<option value="'. $row->id_rumahsakit .'">'. $row->nama_rumahsakit .'</option>';
                    }
                }
                ?>
            </select>
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
            <input type="hidden" id="model-input" name="model-input" value="jadwaldokter" >
            <input type="hidden" id="action-input" name="action-input" value="1" >
            <input type="hidden" id="key-input" name="key-input" value="id_jadwal" >
            <input type="hidden" id="value-input" name="value-input" value="0" >
            <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
            <button type="reset" class="btn btn-default" onclick="setActiveTab('jadwaldokter-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
        </div>
    </div>
</form>
</div>
</div>
</div>

<script>
    $(document).ready(function () {
        CKEDITOR.replace('ket-input');
        getJadwalDokter();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("jadwaldokter-form-tab");';
        }
        ?>

    });
    $('#timepicker1').timepicker({
        minuteStep: 1,
        template: 'modal',
        appendWidgetTo: 'body',
        showSeconds: true,
        showMeridian: false,
        defaultTime: false
    });


    function newForm() {
        loadContent(base_url + "view/_jadwaldokter_form", function () {
            setActiveTab("jadwaldokter-form-tab");
        });
    }

    $('.time-picker').timepicker ({
        minuteStep: 1,
        template: 'modal',
        appendWidgetTo: 'body',
        showSeconds: true,
        showMeridian: false,
        defaultTime: false
    });
    

    
    function getJadwalDokter() {
        if ($.fn.dataTable.isDataTable('#table-jadwaldokter')) {
            tableJadwalDokter = $('#table-jadwaldokter').DataTable();
        } else {
            tableJadwalDokter = $('#table-jadwaldokter').DataTable({
                "ajax": base_url + 'objects/jadwaldokter',
                "columns": [
                {"data": "nama_dokter"},
                {"data": "bagian"},
                {"data": "hari"},
                {"data": "jam"},
                {"data": "jam_pulang"},
                {"data": "nama_rumahsakit"},
                {"data": "oncall"},
                {"data": "ket"},  
                {"data": "aksi", "width": "15%"}
                ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsJadwalDokter();
                }
            });
            // console.log(tableJadwalDokter);
        }
    }

    function utilsJadwalDokter() {
        $("#table-jadwaldokter .editBtn").on("click",function() {
            loadContent(base_url + 'view/_jadwaldokter_form/' + $(this).attr('href').substring(1));
        });

        $("#table-jadwaldokter .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }
    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            // console.log($("#jadwal_dokter-form").serialize());return;
            $.ajax({
                url: base_url + 'manage',
                data: $("#jadwaldokter-form").serialize(),
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
                        var page ='_jadwaldokter_form/';
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
            data: 'model-input=jadwaldokter&key-input=id_jadwal&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json['data'].code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#hari-input").val(json.data.object.hari);
                    $("#nama_dokter-input").val(json.data.object.id_dokter);
                    $("#jam-input").val(json.data.object.jam);
                    $("#jam_pulang-input").val(json.data.object.jam_pulang);
                    $("#rumah_sakit-input").val(json.data.object.id_rumahsakit);
                    $("#oncall-input").val(json.data.object.oncall); 
                    $("#ket-input").val(json.data.object.ket);          
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
                    data: 'model-input=jadwaldokter&action-input=3&key-input=id_jadwal&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json['data'].code === 1) {
                            genericAlert('Hapus data berhasil','success','Sukses');
                            refreshTable();
                            setActiveTab('jadwaldokter-table-tab');
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
        tableJadwalDokter.ajax.url(base_url + '/objects/jadwaldokter').load();
    }
    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }

</script>
