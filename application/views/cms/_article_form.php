<?php
//default value
$title = null;
$content = null;
if ($param != null) {
    $article = $this->model->getRecord(array(
        'table' => 'article', 'where' => array('article_id' => $param)
        ));
    if ($article) {
        $title  = $article->title;
        $content    = $article->content;
    }
}

?>

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#article-table-tab" title="Table View">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#article-form-tab" title="Form View">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#article-detail-tab" title="Detail View">
                <i class="fa fa-eye"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-file-text"></i> Article </li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="article-table-tab" class="tab-pane fade active in">
            <table id="table-article" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Publish</th>
                        <th>Date</th>
                        <th>Created By</th>
                        <th>Nama Kantor</th>
                        <th><a href="#" class="btn btn-xs btn-success pull-right" onclick="newForm()"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="article-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="article-form">
                <div class="form-group">
                    <label for="title-input" class="col-md-3 control-label">Title</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="title-input" name="title-input" placeholder="Title" value="<?php echo $title;?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="content-input" class="col-md-3 control-label">Content</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="content-input" name="content-input"><?php echo $content;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category-input" class="col-md-3 control-label">Category</label>
                    <div class="col-md-6">
                        <select class="form-control"  name="category-input" id="category-input">
                            <?php
                            $cat = $this->model->getList(array('table' => 'article_category', 'where' => array('is_active' => 1, 'is_video' => 0), 'sort' => 'category_name ASC'));
                            if ($cat) {
                                foreach ($cat as $row) {
                                    echo '<option value="'. $row->article_category_id .'">'. $row->category_name .'</option>';
                                }
                            }
                            ?>
                        </select>
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
                <div class="form-group" id="div-foto" style="display:none;">
                    <label class="control-label col-md-3" for="file_upload">Image</label>
                    <div class="col-md-6">
                        <div id="foto-div"></div>
                        <input id="file_upload" name="file_upload" class="image" type="file" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="article" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="article_id" >
                        <input type="hidden" id="value-input" name="value-input" value="0" >
                        <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('article-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('content-input');
        getArticle();
        <?php
        if($param != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("article-form-tab");';
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
                    model:'article',
                    key: 'article_id',
                    value: '<?php echo $param;?>'
                };
            }
        });

        //refresh if succes upload...
        $('#file_upload').on('filebatchuploadcomplete', function(event, files, extra) {
            loadContent(base_url + "view/_article_form/<?php echo $param;?>");
        });
    });

    function newForm() {
        loadContent(base_url + "view/_article_form", function () {
            setActiveTab("article-form-tab");
        });
    }

    function getArticle() {
        if ($.fn.dataTable.isDataTable('#table-article')) {
            tableArticle = $('#table-article').DataTable();
        } else {
            tableArticle = $('#table-article').DataTable({
                "ajax": base_url + 'objects/article',
                "columns": [
                {"data": "title"},
                {"data": "category"},
                {"data": "is_publish"},
                {"data": "date"},
                {"data": "name"},
                {"data": "nama_rumahsakit"},
                {"data": "aksi", "width": "20%"}
                ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsArticle();
                }
            });
        }
    }

    function utilsArticle() {
        $("#table-article .editBtn").on("click",function() {
            loadContent(base_url + 'view/_article_form/' + $(this).attr('href').substring(1));
        });

        $("#table-article .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#article-form").serialize(),
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
                        var page ='_article_form/';
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
            data: 'model-input=article&key-input=article_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.data.code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#publish-input").val(json.data.object.is_publish);
                    $("#category-input").val(json.data.object.article_category_id);
                    $("#rumah_sakit-input").val(json.data.object.id_rumahsakit);
                    $("#action-input").val('2');
                    $("#value-input").val(idx);
                    if (json.data.object.img !== null) {
                        $("#foto-div").html('<img src="<?php echo base_url();?>assets/files/article/'+json.data.object.img+'" class="img img-thumbnail img-small">');
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
                    data: 'model-input=article&action-input=3&key-input=article_id&value-input='+n,
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
        tableArticle.ajax.url(base_url + '/objects/article').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>