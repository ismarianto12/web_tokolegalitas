<?php
//default value
$category_name = null;
$description = null;
if ($param != null) {
    $category = $this->model->getRecord(array(
        'table' => 'ebook_category', 'where' => array('ebook_category_id' => $param)
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
        <li class="pull-left header"><i class="fa fa-comment"></i> Ebook Category</li>
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
                <!-- <div class="form-group">
                    <label for="link-input" class="col-md-3 control-label">Link</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="link-input" name="link-input"></textarea>
                    </div>
                </div> -->
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
                        <input type="hidden" id="model-input" name="model-input" value="ebookcategory" >
                        <input type="hidden" id="action-input" name="action-input" value="1" >
                        <input type="hidden" id="key-input" name="key-input" value="ebook_category_id" >
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

        // file upload #skip dlu
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
            loadContent(base_url + "view/_ebook_category_form/<?php echo $param;?>");
        });
    });

    //ketika buat baru
    function newForm() {
        loadContent(base_url + "view/_ebook_category_form", function () {
            setActiveTab("category-form-tab");
        });
    }

    //retrieve data category via retriever ke datatable
    function getCategory() {
        if ($.fn.dataTable.isDataTable('#table-category')) {
            tableCat = $('#table-category').DataTable();
        } else {
            tableCat = $('#table-category').DataTable({
                "ajax": base_url + 'objects/ebook_category',    //nama tabel atau nama function di retriever (request data)
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

    //aksi tombol pada datatables
    function utilsCat() {
        //ketika tombol edit di klik
        $("#table-category .editBtn").on("click",function() {
            //akan load view ini dan menyertakan param yg akan di lookup dan ditampilkan di form nanti
            loadContent(base_url + 'view/_ebook_category_form/' + $(this).attr('href').substring(1));
        });

        //ketika tombol delete di datatables di klik
        $("#table-category .removeBtn").on("click",function() {
            //akan mengeksekusi function ini dg parameter id yg di klik
            confirmDelete($(this).attr('href').substring(1));
        });
    }

    //fungsi simpan/update data
    function saving() {
        //update ckeditor
        CKupdate();
        //loading dimulai
        loading('loading',true);
        //di timeout (jeda)
        setTimeout(function() {
            //ajax jalan
            $.ajax({
                url: base_url + 'manage',   //tujuan request manage CRUD
                data: $("#category-form").serialize(),  //data dari form ini dan di serialize
                dataType: 'json',   //tipe data JSON
                type: 'POST',   //method POST
                cache: false,
                success: function(json) {
                    //jika response dari server ada
                    //loading di hentikan
                    loading('loading',false);
                    //jika kode 0 berarti akses tidak sah, mungkin session login habis
                    if (json['data'].code === 0) {
                        //jika pesan dari server kosong
                        if (json['data'].message == '') {
                            genericAlert('Penyimpanan data gagal!', 'error','Error');
                        } else {
                            //jika tidak kosong
                            genericAlert(json['data'].message, 'warning','Peringatan');
                        }
                    //jika respon code bukan 0
                    } else {
                        var page ='_ebook_category_form/';
                        page += json['data'].last_id;
                        //pesan berhasil
                        genericAlert('Penyimpanan data berhasil', 'success','Sukses');
                        //arahkan ke form (edit)
                        loadContent(base_url + 'view/' + page);
                    }
                //jika response server error
                }, error: function () {
                    //loading dihentikan
                    loading('loading',false);
                    //show message
                    genericAlert('Terjadi kesalahan!', 'error','Error');
                }
            });
        }, 100);
    }

    //untuk mengambil data yg akan di edit dan ditampilkan ke form
    function getData(idx) {
        $.ajax({
            url: base_url + 'object',   //minta ke object
            //model? key? value? 
            data: 'model-input=ebookcategory&key-input=ebook_category_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json['data'].code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    //sebagian sudah pake PHP buat isi ke form, sisanya pake js
                    //$("#link-input").val(json.data.object.link);
                    $("#status-input").val(json.data.object.is_active);
                    $("#action-input").val('2');
                    $("#value-input").val(idx);
                    if (json.data.object.img !== null) {
                        //di skip dlu
                        //$("#foto-div").html('<img src="<?php echo base_url();?>assets/image/article-category/'+json.data.object.img+'" class="img img-thumbnail img-small">');
                    }
                }
            }
        });
    }

    //function untuk hapus data
    function confirmDelete(n){
        //notifikasi pake sweet alert
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
            //jika yes
            //loading
            loading('loading',true);
            //jeda
            setTimeout(function() {
                //ajax jalan
                $.ajax({
                    url: base_url + 'manage',   //request ke manager
                    //model?, key?, action?, value? kasih tahu ke manager
                    data: 'model-input=ebookcategory&action-input=3&key-input=ebook_category_id&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    //jika respon dari server ada
                    success: function(json){
                        //loading berhenti
                        loading('loading',false);
                        //jika code 1
                        if (json['data'].code === 1) {
                            //notifikasi
                            genericAlert('Hapus data berhasil','success','Sukses');
                            //refresh table kalo perlu
                            refreshTable();
                        //jika kode 2
                        } else if(json['data'].code === 2){
                            //notifikasi
                            genericAlert('Hapus data gagal!','error','Error');
                        } else{
                            //selain itu, mungkin validasi tidak terpenuhi
                            genericAlert(json['data'].message,'warning','Perhatian');
                        }
                    },
                    //jika error
                    error: function () {
                        //loading berhenti
                        loading('loading',false);
                        //notifikasi
                        genericAlert('Tidak dapat hapus data!','error', 'Error');
                    }
                });
            }, 100);
        });
    }

    //untuk reload/refresh/re-request datatable ke server
    function refreshTable(){
        tableCat.ajax.url(base_url + '/objects/ebook_category').load();
    }

    //for update ckeditor
    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>