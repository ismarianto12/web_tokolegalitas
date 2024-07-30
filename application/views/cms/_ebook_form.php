<?php
//default value
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#ebook-table-tab" title="Table View">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#ebook-form-tab" title="Form View">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-file-text"></i> E-Book List </li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="ebook-table-tab" class="tab-pane fade active in">
            <table id="table-ebook" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Publish</th>
                        <th>Date</th>
                        <th><a href="#" class="btn btn-xs btn-success pull-right" onclick="newForm()"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="ebook-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="ebook-form">
                <div class="form-group">
                    <label for="title-input" class="col-md-3 control-label">Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="title-input" name="title-input" placeholder="Title" value="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="link-input" class="col-md-3 control-label">Link</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="link-input" name="link-input" placeholder="Link Download Ebook" value="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="ket-input" class="col-md-3 control-label">Ket</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="ket-input" name="ket-input"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category-input" class="col-md-3 control-label">Category</label>
                    <div class="col-md-6">
                        <select class="form-control"  name="category-input" id="category-input">
                            <?php
                            $cat = $this->model->getList(array('table' => 'ebook_category', 'where' => array('is_active' => 1)));
                            if ($cat) {
                                foreach ($cat as $row) {
                                    echo '<option value="'. $row->ebook_category_id .'">'. $row->category_name .'</option>';
                                }
                            }
                            ?>
                        </select>
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
                <div class="form-group" id="div-foto" style="display:none;">
                    <label class="control-label col-md-3" for="file_upload">Image</label>
                    <div class="col-md-6">
                        <div id="foto-div"></div>
                        <input id="file_upload" name="file_upload" class="image" type="file" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="ebook" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="ebook_id" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('ebook-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('ket-input');
        getEbook();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("ebook-form-tab");';
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
                    model:'ebook',
                    key: 'ebook_id',
                    value: '<?php echo $param;?>'
                };
            }
        });

        //refresh if succes upload...
        $('#file_upload').on('filebatchuploadcomplete', function(event, files, extra) {
            loadContent(base_url + "view/_ebook_form/<?php echo $param;?>");
        });
    });

    function newForm() {
        loadContent(base_url + "view/_ebook_form", function () {
            setActiveTab("ebook-form-tab");
        });
    }

    function getEbook() {
        if ($.fn.dataTable.isDataTable('#table-ebook')) {
            tableEbook = $('#table-ebook').DataTable();
        } else {
            tableEbook = $('#table-ebook').DataTable({
                "ajax": base_url + 'objects/ebook',
                "columns": [
                   {"data": "title"},
                   {"data": "category_name"},
                   {"data": "is_publish"},
                   {"data": "date"},
                   {"data": "aksi", "width": "15%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsEbook();
                }
            });
        }
    }

    function utilsEbook() {
        $("#table-ebook .editBtn").on("click",function() {
            loadContent(base_url + 'view/_ebook_form/' + $(this).attr('href').substring(1));
        });

        $("#table-ebook .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#ebook-form").serialize(),
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
                        var page ='_ebook_form/';
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
            data: 'model-input=ebook&key-input=ebook_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.data.code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#title-input").val(json.data.object.title);
                    $("#link-input").val(json.data.object.link);
                    $("#ket-input").val(json.data.object.ket);
                    $("#category-input").val(json.data.object.ebook_category_id);
                    $("#publish-input").val(json.data.object.is_publish);
                    $("#action-input").val('2');
                    $("#value-input").val(idx);
                    if (json.data.object.img !== null) {
                        $("#foto-div").html('<img src="<?php echo base_url();?>assets/image/ebook/'+json.data.object.img+'" class="img img-thumbnail img-small">');
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
                    data: 'model-input=ebook&action-input=3&key-input=ebook_id&value-input='+n,
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
        tableEbook.ajax.url(base_url + '/objects/ebook').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
    
</script>