<?php
//default value
$gallery    = null;
$gallery_name = null;
$description = null;
if ($param != null) {
    $gallery = $this->model->getRecord(array(
        'table' => 'gallery', 'where' => array('gallery_id' => $param)
        ));
    if ($gallery) {
        $gallery_name  = $gallery->gallery_name;
        $description    = $gallery->description;
    }
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#gallery-table-tab" title="Table View">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#gallery-form-tab" title="Form View">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-image"></i> Photo Gallery</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="gallery-table-tab" class="tab-pane fade active in">
            <table id="table-gallery" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Gallery Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Publish</th>
                        <th>Nama Kantor</th>
                        <th><a href="#" class="btn btn-xs btn-success pull-right" onclick="newForm()"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="gallery-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="gallery-form">
                <div class="form-group">
                    <label for="name-input" class="col-md-3 control-label">Gallery Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name-input" name="name-input" placeholder="Gallery Name" value="<?php echo $gallery_name;?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="description-input" class="col-md-3 control-label">Description</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="description-input" name="description-input"><?php echo $description;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publish-input" class="col-md-3 control-label">Publish</label>
                    <div class="col-md-6">
                        <select class="form-control"  name="publish-input" id="publish-input">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
               <?= parsing_rs_select()  ?>
                <div class="form-group" id="div-foto">
                    <label class="control-label col-md-3" for="file_upload"></label>
                    <div class="col-md-6">
                        <?php
                        if ($gallery) {
                            //get cover
                            $cover = $this->db->query("SELECT * FROM gallery_detail WHERE gallery_id = $param LIMIT 1");
                            if ($cover->num_rows() > 0) {
                                $data = $cover->row();
                                echo "<img class='img img-thumbnail' src='".base_url('assets/image/gallery/' . $data->img)."'>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="gallery" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="gallery_id" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('gallery-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        /*CKEDITOR.replace('description-input');*/
        getGallery();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("gallery-form-tab");';
        }
        ?>
    });

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
                    model:'page',
                    key: 'page_id',
                    value: '<?php echo $param;?>'
                };
            }
        });

        //refresh if succes upload...
        $('#file_upload').on('filebatchuploadcomplete', function(event, files, extra) {
            loadContent(base_url + "view/_page_form/<?php echo $param;?>");
        });





    function newForm() {
        loadContent(base_url + "view/_gallery_form", function () {
            setActiveTab("gallery-form-tab");
        });
    }

    function getGallery() {
        if ($.fn.dataTable.isDataTable('#table-gallery')) {
            tableGallery = $('#table-gallery').DataTable();
        } else {
            tableGallery = $('#table-gallery').DataTable({
                "ajax": base_url + 'objects/gallery',
                "columns": [
                   {"data": "gallery_name"},
                   {"data": "description"},
                   {"data": "date"},
                   {"data": "is_publish"},
                   {"data": "nama_rumahsakit"},    
                   {"data": "aksi", "width": "21%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsGallery();
                }
            });
        }
    }

    function utilsGallery() {
        $("#table-gallery .detailBtn").on("click",function() {
            loadContent(base_url + 'view/_gallery_detail_form/' + $(this).attr('href').substring(1));
        });

        $("#table-gallery .editBtn").on("click",function() {
            loadContent(base_url + 'view/_gallery_form/' + $(this).attr('href').substring(1));
        });

        $("#table-gallery .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#gallery-form").serialize(),
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
                        var page ='_gallery_form/';
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
            data: 'model-input=gallery&key-input=gallery_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.data.code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#publish-input").val(json.data.object.is_publish);
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
                    data: 'model-input=gallery&action-input=3&key-input=gallery_id&value-input='+n,
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
        tableGallery.ajax.url(base_url + '/objects/gallery').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>