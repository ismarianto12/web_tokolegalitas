<?php
//default value
$category_name = null;
$description = null;
if ($param != null) {
    $category = $this->model->getRecord(array(
        'table' => 'article_category', 'where' => array('article_category_id' => $param)
        ));
    if ($category) {
        $category_name  = $category->category_name;
        $description    = $category->description;
    }
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#category-table-tab" title="Table View">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#category-form-tab" title="Form View">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-comment"></i> Article Category</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="category-table-tab" class="tab-pane fade active in">
            <table id="table-category" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th><a href="#" class="btn btn-xs btn-success pull-right" onclick="newForm()"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="category-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="category-form">
                <div class="form-group">
                    <label for="name-input" class="col-md-3 control-label">Category Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="name-input" name="name-input" placeholder="Category Name" value="<?php echo $category_name;?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="description-input" class="col-md-3 control-label">Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="description-input" name="description-input"><?php echo $description;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status-input" class="col-md-3 control-label">Status</label>
                    <div class="col-md-5">
                        <select class="form-control"  name="status-input" id="status-input">
                            <option value="1">Active</option>
                            <option value="0">Nonactive</option>
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
                        <input type="hidden" id="model-input" name="model-input" value="articlecategory" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="article_category_id" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('category-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('description-input');
        getCategory();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("category-form-tab");';
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
                    model:'articlecategory',
                    key: 'article_category_id',
                    value: '<?php echo $param;?>'
                };
            }
        });

        //refresh if succes upload...
        $('#file_upload').on('filebatchuploadcomplete', function(event, files, extra) {
            loadContent(base_url + "view/_article_category_form/<?php echo $param;?>");
        });
    });

    function newForm() {
        loadContent(base_url + "view/_article_category_form", function () {
            setActiveTab("category-form-tab");
        });
    }

    function getCategory() {
        if ($.fn.dataTable.isDataTable('#table-category')) {
            tableCat = $('#table-category').DataTable();
        } else {
            tableCat = $('#table-category').DataTable({
                "ajax": base_url + 'objects/articlecategory/is_video/0',
                "columns": [
                   {"data": "category_name"},
                   {"data": "description"},
                   {"data": "is_active"},
                   {"data": "aksi", "width": "15%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsCat();
                }
            });
        }
    }

    function utilsCat() {
        $("#table-category .editBtn").on("click",function() {
            loadContent(base_url + 'view/_article_category_form/' + $(this).attr('href').substring(1));
        });

        $("#table-category .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#category-form").serialize(),
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json) {
                    loading('loading',false);
                    if (json['data'].code === 0) {
                        if (json['data'].message == '') {
                            genericAlert('Penyimpanan data gagal!', 'error','Error');
                        } else {
                            genericAlert(json['data'].message, 'warning','Peringatan');
                        }
                    } else {
                        var page ='_article_category_form/';
                        page += json['data'].last_id;
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
            data: 'model-input=articlecategory&key-input=article_category_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json['data'].code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#status-input").val(json.data.object.is_active);
                    $("#action-input").val('2');
                    $("#value-input").val(idx);
                    if (json.data.object.img !== null) {
                        $("#foto-div").html('<img src="<?php echo base_url();?>assets/image/article-category/'+json.data.object.img+'" class="img img-thumbnail img-small">');
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
                    data: 'model-input=articlecategory&action-input=3&key-input=article_category_id&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json['data'].code === 1) {
                            genericAlert('Hapus data berhasil','success','Sukses');
                            refreshTable();
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
        tableCat.ajax.url(base_url + '/objects/articlecategory').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>