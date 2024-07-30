<?php
$slide = null;
if ($param != null) {
    $slide = $this->model->getRecord(array(
        'table' => 'slide', 'where' => array('slide_id' => $param)
    ));
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active"><a data-toggle="tab" href="#slide-upload-tab"><i class="fa fa-file-image-o"></i></a>
        </li>
        <li class="pull-left header"><i class="fa fa-gear"></i> Slide Images</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="slide-upload-tab" class="tab-pane fade active in">
            <div class="col-md-7" style="background-color: lightblue; min-height: 600px; padding-top: 10px">
                <?php
                $imgs = $this->model->getList(array('table' => 'slide'));
                if ($imgs) {
                    foreach ($imgs as $row) {
                ?>
                        <div class="col-md-3">
                            <img src="<?php echo base_url('assets/image/slide/' . $row->img); ?>" class="img img-thumbnail" alt="<?php echo $row->alt; ?>" title="<?php echo $row->title; ?>">
                            <p class="img-desc"><?php echo $row->description; ?></p>

                            <?php
                            if ($row->is_active == 1) {
                                echo ' <a href="#" class="btn btn-xs btn-warning" style="float: right; margin-top:-10px; z-index: 3000;" onclick="statusImg(\'' . $row->slide_id . '\', 0);"><i class="fa fa-eye"></i> Nonaktifkan </a> &nbsp;';
                            } else {
                                echo ' <a href="#" class="btn btn-xs btn-success" style="float: right; margin-top:-10px; z-index: 3000;" onclick="statusImg(\'' . $row->slide_id . '\', 1);"><i class="fa fa-eye"></i> Aktifkan </a> &nbsp;';
                            }
                            ?>

                            <a href="#" class="btn btn-xs btn-danger" style="float: right; margin-top:-10px; z-index: 3000;" onclick="hapusImg('<?php echo $row->slide_id; ?>');"><i class="fa fa-trash-o"></i> Delete</a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-md-5">
                <h3>Upload Image</h3>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="title-input" class="col-md-3 control-label">Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="title-input" name="title-input" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description-input" class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description-input" name="description-input"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alt-input" class="col-md-3 control-label">Alt</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="alt-input" name="alt-input" placeholder="Alt">
                        </div>
                    </div>
                    <?= parsing_rs_select() ?>
                    <div class="">
                        <div id="foto-div"></div>
                        <input id="file_upload" name="file_upload" class="image" type="file">
                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

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
            uploadUrl: "<?php echo base_url('doupload_slide'); ?>",
            msgFilesTooMany: 'Jumlah berkas yang akan diunggah ({n}) melebihi batas jumlah yang sudah ditentukan ({m}). Coba ulangi proses unggah berkas!',
            msgLoading: 'Memproses berkas {index} dari {files} …',
            msgProgress: 'Memproses berkas {index} dari {files} - {name} - {percent}% selesai.',
            uploadExtraData: function() {
                return {
                    nama_field: 'file_upload',
                    title: $("#title-input").val(),
                    description: $("#description-input").val(),
                    id_rumahsakit: $("#id_rumahsakit-input").val(),
                    alt: $("#alt-input").val()
                };
            }
        });

        //refresh if succes upload...
        $('#file_upload').on('filebatchuploadcomplete', function(event, files, extra) {
            loadContent(base_url + "view/_slide_form");
        });
    });

    function hapusImg(n) {
        swal({
                title: "Konfirmasi Hapus",
                text: "Apakah anda yakin akan menghapus data ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: " Ya",
                closeOnConfirm: false
            },
            function() {
                loading('loading', true);
                setTimeout(function() {
                    $.ajax({
                        url: base_url + 'manage',
                        data: 'model-input=slide&action-input=3&key-input=slide_id&value-input=' + n,
                        dataType: 'json',
                        type: 'POST',
                        cache: false,
                        success: function(json) {
                            loading('loading', false);
                            if (json['data'].code === 1) {
                                genericAlert('Hapus data berhasil', 'success', 'Sukses');
                                loadContent(base_url + 'view/_slide_form');
                            } else if (json['data'].code === 2) {
                                genericAlert('Hapus data gagal!', 'error', 'Error');
                            } else {
                                genericAlert(json['data'].message, 'warning', 'Perhatian');
                            }
                        },
                        error: function() {
                            loading('loading', false);
                            genericAlert('Tidak dapat hapus data!', 'error', 'Error');
                        }
                    });
                }, 100);
            });
    }

    function statusImg(n, z) {
        loading('loading', true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: 'model-input=slide&action-input=2&key-input=slide_id&status=' + z + '&value-input=' + n,
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json) {
                    loading('loading', false);
                    if (json['data'].code === 1) {
                        genericAlert('Ubah status berhasil', 'success', 'Sukses');
                        loadContent(base_url + 'view/_slide_form');
                    } else if (json['data'].code === 2) {
                        genericAlert('Ubah status data gagal!', 'error', 'Error');
                    } else {
                        genericAlert(json['data'].message, 'warning', 'Perhatian');
                    }
                },
                error: function() {
                    loading('loading', false);
                    genericAlert('Tidak dapat ubah status  data!', 'error', 'Error');
                }
            });
        }, 100);
    }
</script>