<?php
$nama_dokter = null;
$bagian = null;
$ket = null;
$alamat = null;
if ($param != null) {
    $dokter = $this->model->getRecord(array(
        'table' => 'dokter', 'where' => array('id_dokter' => $param)
        ));
    if ($dokter) {
        $nama_dokter  = $dokter->nama_dokter;
        $bagian       = $dokter->id_bagian;
        $ket          = $dokter->ket;
        $alamat       = $dokter->alamat;
    }
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#dokter-table-tab">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#dokter-form-tab">
                <i class="fa fa-edit"></i>
            </a>
        </li>
         <li class="">
            <a data-toggle="tab" href="#dokter-detail-tab" title="Detail View">
                <i class="fa fa-eye"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-user-md"></i>Data Dokter</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="dokter-table-tab" class="tab-pane fade active in">
            <table id="table-dokter" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nama Dokter</th>
                        <th>Bagian</th>
                        <th>Nama Kantor</th>
                        <th><a href="#" class="btn btn-xs btn-success" onclick="newForm()" id="btn-add"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
       <div id="dokter-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="dokter-form">
                <div class="form-group">
                    <label for="nama_dokter-input" class="col-md-3 control-label">Nama Dokter</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nama_dokter-input" name="nama_dokter-input" placeholder="Nama Dokter"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dokter-input" class="col-md-3 control-label">Nama Kantor</label>
                    <div class="col-md-6">
                        <select class="form-control" onclick="select(this.value)" name="rumah_sakit-input" id="rumah_sakit-input">
                            <option disabled selected>Pilih Nama Kantor</option>
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
                    <label for="bagian-input" class="col-md-3 control-label">Bagian</label>
                    <div class="col-md-6">
                        <select class="form-control" name="bagian-input" id="bagian-input">
                            <option selected disabled>Bagian</option>
                            <?php
                            $cat = $this->model->getList(array('table'=>'bagian', 'where' => array('is_publish'=>1),  'sort' => 'nama_bagian ASC')
                        );
                             if ($cat) {
                                foreach ($cat as $row) {
                                    echo '<option value="'. $row->id_bagian .'">'. $row->nama_bagian .'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
               <div class="form-group">
                    <label for="ket-input" class="col-md-3 control-label">Keterangan</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="ket-input" name="ket-input"><?php echo $ket;?></textarea>
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
                <div class="form-group" id="div-foto" style="display:none;">
                    <label class="control-label col-md-3" for="file_upload">Image</label>
                    <div class="col-md-6">
                        <div id="foto-div"></div>
                        <input id="file_upload" name="file_upload" class="image" type="file" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="dokter" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="id_dokter" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('dokter-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
    <script>
    $(document).ready(function () {
        CKEDITOR.replace('ket-input');
        getDokter();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("dokter-form-tab");';
            echo '$("#div-foto").show();';
        }
        ?>
         // file upload
        $("#file_upload").fileinput({
            maxFileCount: 1,
            browseClass: "btn btn-default",
            browseLabel: "Pilih file",
            browseIcon: '<i class="fa fa-file"></i> ',
            removeClass: "btn btn-warning",
            removeLabel: "Hapus",
            removeIcon: '<i class="glyphicon glyphicon-trash"></i> ',
            uploadClass: "btn btn-info",
            uploadLabel: "Unggah",
            uploadIcon: '<i class="fa fa-cloud-upload"></i> ',
            previewFileType: "image",
            uploadUrl: "<?php echo base_url('doupload'); ?>",
            msgFilesTooMany: 'Jumlah berkas yang akan diunggah ({n}) melebihi batas jumlah yang sudah ditentukan ({m}). Coba ulangi proses unggah berkas!',
            msgLoading: 'Memproses berkas {index} dari {files} …',
            msgProgress: 'Memproses berkas {index} dari {files} - {name} - {percent}% selesai.',
            uploadExtraData: function() {
                return {
                    nama_field:'file_upload',
                    model:'dokter',
                    key: 'id_dokter',
                    value: '<?php echo $param;?>'
                };
            }
        });

        //refresh if succes upload...
        $('#file_upload').on('filebatchuploadcomplete', function(event, files, extra) {
            loadContent(base_url + "view/_dokter_form/<?php echo $param;?>");
        });
    });

     function newForm() {
        loadContent(base_url + "view/_dokter_form", function () {
            setActiveTab("dokter-form-tab");
        });
    }

    function getDokter() {
        if ($.fn.dataTable.isDataTable('#table-dokter')) {
            tableDokter = $('#table-dokter').DataTable();
        } else {
            tableDokter = $('#table-dokter').DataTable({
                "ajax": base_url + 'objects/dokter',
                "columns": [
                   {"data": "nama_dokter"},
                   {"data": "bagian"},
                   {"data": "nama_rumahsakit"},
                   {"data": "aksi"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsDokter();
                }
            });
        }
    }

    function utilsDokter() {
        $("#table-dokter .editBtn").on("click",function() {
            loadContent(base_url + 'view/_dokter_form/' + $(this).attr('href').substring(1));
        });

        $("#table-dokter .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }
    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#dokter-form").serialize(),
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
                        var page ='_dokter_form/';
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
            data: 'model-input=dokter&key-input=id_dokter&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json['data'].code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#nama_dokter-input").val(json.data.object.nama_dokter);
                    $("#bagian-input").val(json.data.object.bagian);
                    $("#rumah_sakit-input").val(json.data.object.id_rumahsakit);
                    $("#ket-input").val(json.data.object.ket);
                    $("#alamat-input").val(json.data.object.alamat);
                    $("#status-input").val(json.data.object.is_active);
                    $("#action-input").val('2');
                    $("#value-input").val(json.data.object.id_dokter);
                    if (json.data.object.img !== null) {
                        $("#foto-div").html('<img src="<?php echo base_url();?>assets/image/dokter/'+json.data.object.img+'" class="img img-thumbnail img-small">');
                    }
                 
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
                    data: 'model-input=dokter&action-input=3&key-input=id_dokter&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json['data'].code === 1) {
                            genericAlert('Hapus data berhasil','success','Sukses');
                            refreshTable();
                            setActiveTab('dokter-table-tab');
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
        tableDokter.ajax.url(base_url + '/objects/dokter').load();
    }
    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }

    function select(v){
        // console.log(v)
        $.ajax({
         url: base_url + 'api/get_bagian',
         type: 'POST',
         data: {'id_rs':v},
         dataType: 'json',
         success: function(response){
         var emptyOp = $("#bagian-input :first-child");
         emptyOp.nextAll().remove();
         var array = response.data.bagian;
              if (array != ''){
                $.each( array, function( key, value ) {
                  $("#bagian-input").append("<option value="+value.id_bagian+">"+value.nama_bagian+"</option>");
                });
              }

         },
         error: function(x, e) {

        }
      });
      $('#bagian-input').removeAttr('disabled');
    }

</script>
