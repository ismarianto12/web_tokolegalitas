<?php
$gb = null;
if ($param != null) {
    $gb = $this->model->getRecord(array(
        'table' => 'coment', 'where' => array('coment_id' => $param)
        ));
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#gb-table-tab">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#gb-form-tab">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-envelope"></i>Manage Comments</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="gb-table-tab" class="tab-pane fade active in">
            <table id="table-gb" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="gb-form-tab" class="tab-pane fade">
            <div id="back-btn"></div>
            <div id="msg-content">
                
            </div>
            <div id="msg-btn"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        getGB();
        <?php
        if($gb != null) {
            echo 'getData("'. $param .'");';
            echo 'setActiveTab("gb-form-tab");';
        }
        ?>
    });

    function getGB() {
        if ($.fn.dataTable.isDataTable('#table-gb')) {
            tableGB = $('#table-gb').DataTable();
        } else {
            tableGB = $('#table-gb').DataTable({
                "ajax": base_url + 'objects/coment',
                "columns": [
                   {"data": "name"},
                   {"data": "email"},
                   {"data": "content"},
                   {"data": "is_approve"},
                   {"data" : "date"},
                   {"data": "aksi", "width": "10%"}
               ],
                "ordering": true,
                "deferRender": true,
                "order": [[0, "asc"]],
                "fnDrawCallback": function (oSettings) {
                    utilsGb();
                }
            });
        }
    }

    function utilsGb() {
        $("#table-gb .viewBtn").on("click",function() {
            loadContent(base_url + 'view/_comment_form/' + $(this).attr('href').substring(1));
        });        

        $("#table-gb .removeBtn").on("click",function() {
            confirmDelete($(this).attr('href').substring(1));
        });

        $("#table-gb .checkBtn").on("click",function() {
            confirmApprove($(this).attr('href').substring(1));
        });

        $("#table-gb .warningBtn").on("click",function() {
            confirmApprove($(this).attr('href').substring(1));
        });

    }
//Fungsi View

    function getData(idx) {
        $.ajax({
            url: base_url + 'object',
            data: 'model-input=coment&key-input=coment_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json['data'].code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    var status = json.data.object.is_approve;
                    switch (status){
                        case 0:
                            status = "UnApprove";
                        break;
                        case 1:
                            status = "Approved";
                        break;
                        default :
                            status = "Close/Hidden";
                        break;
                    }
                    var x = base_url+'article/'+json.data.object.link;
                    $("#back-btn").html(''+
                        ' <a href="#" onclick="loadContent(\'<?php echo base_url('view/_comment_form');?>\');" class="btn btn-default btn-xs"  style="width:80px;margin-bottom:20px;"><i class="fa fa-arrow-left"></i> Back </a><br>');
                    $("#msg-content").html(''+
                        '<p><b>Nama : </b> '+json.data.object.name+'</p>' +
                        '<p><b>Comment On : </b> '+json.data.object.article_content+'</p>' +
                        '<a href="#" onclick="loadContent(\''+x+'\');" class="pull-right"></i> Go to Article </a>'+
                        '<p><b>Email : </b> '+json.data.object.email+'</p>' +
                        '<p><b>Tanggal : </b> '+json.data.object.created_datetime+'</p>' +
                        '<p><b>Status : </b> '+status+'</p>' +
                        '<p><b>Content : </b></p>' +
                        '<div>'+json.data.object.content+'</div>');
                        var warna="";
                        var text="";
                        var icon="";
                    if (json.data.object.is_approve == 1){
                        warna="btn-warning";
                        text="UnApprove";
                    }else{
                        warna="btn-success";
                        text="Approve";
                    }
                    $("#msg-btn").html(''+
                        ' <a href="#" onclick="confirmDelete(\'<?php echo $param;?>\');" class="btn btn-danger btn-xs pull-right" style="width:80px;margin-top:20px;margin-right:5px;"><i class="fa fa-trash"></i> Hapus </a>'+
                        ' <a href="#" onclick="confirmApprove(\'<?php echo $param;?>\');" class="btn '+warna+' btn-xs  pull-right" style="width:80px;margin-top:20px;margin-left:5px;margin-left:5px;margin-bottom:10px;"><i class="fa fa-times" aria-hidden="true"></i> '+text+' </a>'
                        );
                    
                    
                }
            }
        });
    }

    //Fungsi menampilkan Komentar

    function confirmApprove(idx) {
        $.ajax({
            url: base_url + 'object',
            data: 'model-input=coment&key-input=comment_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.data.code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#Content-input").val(json.data.object.content);
                    $("#Email-input").val(json.data.object.email);
                    $("#publish-input").val(json.data.object.is_publish);
                    $("#category-input").val(json.data.object.article_category_id);
                    $("#action-input").val('2');
                    $("#value-input").val(idx);
                    if (json.data.object.img !== null) {
                        $("#foto-div").html('<img src="<?php echo base_url();?>assets/avatar/coment/'+json.data.object.img+'" class="img img-thumbnail img-small">');
                    }
                }
            }
        });
    }

    function confirmApprove(n){
        swal({
            title: "Konfirmasi Approve",
            text: "Apakah anda ingin Approve komentar?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Ya",
            closeOnConfirm: false
        },
        function(){
            loading('loading',true);
            setTimeout(function() {
                $.ajax({
                    url: base_url + 'approve_comment',
                    data: 'comment_id=' + n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json['data'].code == 1) {
                            genericAlert(json['data'].message,'success','Sukses');
                            refreshTable();
                            setActiveTab('gb-table-tab');
                        } else if(json['data'].code == 2){
                            genericAlert('Approve data gagal!','error','Error');
                        } else{
                            genericAlert(json['data'].message,'warning','Perhatian');
                        }
                    },
                    error: function () {
                        loading('loading',false);
                        genericAlert('Tidak dapat Approve data!','error', 'Error');
                            refreshTable();
                            setActiveTab('gb-table-tab');
                    }
                });
            }, 100);
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
                    data: 'model-input=Coment&action-input=3&key-input=coment_id&value-input='+n,
                    dataType: 'json',
                    type: 'POST',
                    cache: false,
                    success: function(json){
                        loading('loading',false);
                        if (json['data'].code === 1) {
                            genericAlert('Hapus data berhasil','success','Sukses');
                            refreshTable();
                            setActiveTab('gb-table-tab');
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
        tableGB.ajax.url(base_url + '/objects/coment').load();
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>